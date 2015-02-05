<?php

$settings = array();

$settings["name"] = "drupal_http_build_query";
$settings["variables"][] = array("type" => "assoc_array", "min_length_key" => 10, "max_length_key" => 20, "min_length_value" => 10, "max_length_value" => 20, "maxsize" => 5, "maxdepth" => 2);
$settings["performance_input"] = "random";
$settings["performance_runs"] = array(10, 1000);

// The functional tests
$settings["functional_test"]["normal_array"] = array(array("test", "test2"));
$settings["functional_test"]["assoc_array"] = array(array("test" => "test2"));
$settings["functional_test"]["mixed_array"] = array(array("test" => "test2", "test3", "test4", "test5" => array("test6" => "test7")));