<?php

$settings = array();

$settings["name"] = "drupal_get_query_parameters";
$settings["variables"][] = array("type" => "assoc_array", "min_length_key" => 10, "max_length_key" => 20, "min_length_value" => 10, "max_length_value" => 20, "minsize" => 1, "maxsize" => 5, "mindepth" => 1, "maxdepth" => 2);
$settings["performance_input"] = "random";
$settings["performance_runs"] = array(10, 1000);

// The functional tests
$settings["functional_test"]["with_q_also"] = array(array("test" => "marcus", array()));
$settings["functional_test"]["with_nesting"] = array(array("first_level" => array("second_level" => array("third_level", "third_level_second_array"))));