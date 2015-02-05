<?php

$settings = array();

$settings["name"] = "drupal_get_region_content";
$settings["variables"][] = array("type" => "string", "min_length_value" => 10, "max_length_value" => 20);
$settings["performance_input"] = "random";
$settings["performance_runs"] = array(1000);

// The functional tests
$settings["functional_test"]["content"] = array("content", "");
$settings["functional_test"]["footer"] = array("footer", " doge ");
