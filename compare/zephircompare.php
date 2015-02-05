<?php

/*
 * Setup by copying default.config.php to config.php and filling it with values.
 */

dirname(__FILE__); 
require_once('config.php');

// Collect the variables
if(php_sapi_name() === 'cli') {
	$i = 0;
	if (($argv[0]) == 'zephircompare.php') {
		$i = 1;
	}

	// Nothing given, show small instructions
	if (!isset($argv[$i])) {
		cli_output("Please give variables or run -h or --help for help.", 'b');
	} else {
		switch($argv[$i]) {
			case '-b':
				$i++;
				if (!isset($argv[$i])) {
					cli_output("You need to choose a function to run on or choose all.", 'b');
					exit;
				}
				$_GET['function'] = $argv[$i];
				$_GET['type'] = 'b';
				break;
			case '-ft':
				$i++;
				if (!isset($argv[$i])) {
					cli_output("You need to choose a function to run on or choose all.", 'b');
					exit;
				}
				$_GET['function'] = $argv[$i];
				$_GET['type'] = 'ft';
				break;
			case '-pt':
				$i++;
				if (!isset($argv[$i])) {
					cli_output("You need to choose a function to run on or choose all.", 'b');
					exit;
				}
				$_GET['function'] = $argv[$i];
				$_GET['type'] = 'pt';
				break;
			case '-l':
				break;
			case '-h':
			case '--help':
				cli_output("Usage: zephircompare.php [command] [function/all]", 'p');
				cli_output("Command can be one of the following:");
				cli_output("-b = Run both feature testing and performance testing. Requires a second argument.", "b");
				cli_output("-ft = Run feature testing only. Requires a second argument.", "b");
				cli_output("-pt = Run performance testing only. Requires a second argument.", "b");
				cli_output("-l = List all available functions to test.", "b");
				cli_output("-h or --help = What you see now.", "b");
				exit;
			default:
				cli_output("Not a valid command. Please run -h or --help for more information", 'b');
				exit;
		}
	}
}

$type = isset($_GET['type']) ? $_GET['type'] : '';
$function = isset($_GET['function']) ? $_GET['function'] : '';

// List the functions
if(!$type) {
	$data = get_data(array('q' => 'zephirtest'), $config['zephir_root']);
	array_unshift($data, "all");
	// start outputting
	if(php_sapi_name() === 'cli') {
		foreach($data as $name) {
			cli_output($name, "b");
		}
	} else {
		echo "<table border=1>";
		echo "<tr><th>Function name</th><th>Run both</th><th>Run feature test</th><th>Run performance test</th></tr>";
		foreach($data as $name) {
			echo "<tr><td>" . $name . "</td><td><a href=\"?type=b&function=" . $name . "\">Run both tests</a></td><td>
			<a href=\"?type=ft&function=" . $name . "\">Run feature test</a></td><td><a href=\"?type=pt&function=" . $name . "\">Run performance test</a></td></tr>";
		}
		echo "</table>";
	}
} elseif($function) {
	$data = get_data(array('q' => 'zephirtest'), $config['zephir_root']);
	if (!in_array($function, $data) && $function != 'all') {
		if(php_sapi_name() === 'cli') {
			cli_output("That function does not exist, please run with -l to see all valid functions.", 'b');
		}
		echo "That function does not exists!";
		exit;
	}
	$output = array();
	if($function == 'all') {
		foreach($data as $name) {
			$new['zephir'] = get_data(array('q' => 'zephirtest/' . $name), $config['zephir_root']);
			$new['drupal'] = get_data(array('q' => 'zephirtest/' . $name), $config['drupal_root']);
			$output = array_merge_recursive($output, $new);
		}
	} else {
		$output['zephir'] = get_data(array('q' => 'zephirtest/' . $function), $config['zephir_root']);
		$output['drupal'] = get_data(array('q' => 'zephirtest/' . $function), $config['drupal_root']);
	}
	
	if(php_sapi_name() === 'cli') {
		foreach($output['zephir'] as $functionname => $value) {
			cli_output($functionname, 'b');
			if($type == 'b' || $type == 'ft') {
				cli_output("Feature test.", 'p');
				foreach($value->functional_test as $testname => $testvalue) {
					if($testvalue == $output['drupal'][$functionname]->functional_test->{$testname}) {
						cli_output("The test $testname was ok!"); 
					} else {
						cli_output("The test $testname did not match!");
					}
				}
			}
			if($type == 'b' || $type == 'pt') {
				cli_output("Performance test.", 'p');
				foreach($value->performance_runs as $amount => $values) {
					$opposedvalues = $output['drupal'][$functionname]->performance_runs->{$amount};
					$time = $values->time - $opposedvalues->time;
					if($time > 0) {
						cli_output("When running $amount times Zephir is " . round(($time * -1000), 5) . " ms slower");
					} else {
						cli_output("When running $amount times Zephir is " . round(($time * 1000), 5) . " ms faster");
					}
				}
			}			
		}
	} else {
		foreach($output['zephir'] as $functionname => $value) {
			echo "<h2>" . $functionname . "</h2>";
			if($type == 'b' || $type == 'ft') {
				echo "<h4 style=\"margin: 0;\">Feature test:</h4>";
				foreach($value->functional_test as $testname => $testvalue) {
					if($testvalue == $output['drupal'][$functionname]->functional_test->{$testname}) {
						echo "The test $testname was <strong style=\"color: green\">ok!</strong><br>"; 
					} else {
						echo "The test $testname did <strong style=\"color: red\">not match!</strong><br>";
					}
				}
			}
			if($type == 'b' || $type == 'pt') {
				echo "<h4 style=\"margin: 0;\">Performance test:</h4>";
				foreach($value->performance_runs as $amount => $values) {
					echo "When running $amount times Zephir is ";
					$opposedvalues = $output['drupal'][$functionname]->performance_runs->{$amount};
					$time = $values->time - $opposedvalues->time;
					if($time > 0) {
						echo "<strong style=\"color: red\">" . round(($time * -1000), 5) . " ms slower</strong><br>";
					} else {
						echo "<strong style=\"color: green\">" . round(($time * 1000), 5) . " ms faster</strong><br>";
					}
				}
			}			
		}
	}
}




/**
 * Function to get data from a server
 */
function get_data($querystring, $server) {
	return (array) json_decode(file_get_contents($server . '?json=true&' . http_build_query($querystring)));
}
/**
 * Function for showing a nice cli output
 */
function cli_output($text, $type = 'r') {
	switch($type) {
		case 'b':
			echo "* $text\n";
			break;
		case 'p':
			echo "\n$text\n\n";
			break;					
		default:
			echo "$text\n";
			break;
	}
}