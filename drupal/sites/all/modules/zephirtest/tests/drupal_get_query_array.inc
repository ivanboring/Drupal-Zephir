<?php

$settings = array();

$settings["name"] = "drupal_get_query_array";
$settings["variables"][] = array("type" => "querystring", "min_length_key" => 10, "max_length_key" => 20, "min_length_value" => 10, "max_length_value" => 20, "minsize" => 1, "maxsize" => 5);
$settings["performance_input"] = "random";
$settings["performance_runs"] = array(1000);

// The functional tests
$settings["functional_test"]["normal"] = array('hey=man&high=five');
$settings["functional_test"]["with_array"] = array('man[]=test&man[]=magoo&Finch=shitbreak');