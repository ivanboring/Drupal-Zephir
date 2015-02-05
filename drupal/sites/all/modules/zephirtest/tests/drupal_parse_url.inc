<?php

$settings = array();

$settings["name"] = "drupal_parse_url";
$settings["variables"][] = array("type" => "url", "min_length_value" => 10, "max_length_value" => 20, "with_query_string" => true, "with_subdirectories" => true, "maxdepth" => 3);
$settings["performance_input"] = "random";
$settings["performance_runs"] = array(1000);

// The functional tests
$settings["functional_test"]["external_path"] = array("https://example.com/a?b=c#d");
$settings["functional_test"]["internal_path"] = array("node?b=c#d ");