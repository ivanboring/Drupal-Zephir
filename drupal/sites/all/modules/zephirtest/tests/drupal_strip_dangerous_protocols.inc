<?php

$settings = array();

$settings["name"] = "drupal_strip_dangerous_protocols";
$settings["variables"][] = array("type" => "url", "min_length_value" => 10, "max_length_value" => 20, "with_query_string" => true, "with_subdirectories" => true, "maxdepth" => 3);
$settings["performance_input"] = "random";
$settings["performance_runs"] = array(10, 1000);

// The functional tests
$settings["functional_test"]["dangerous_protocol"] = array("mail://example.com/a?b=c#d");
$settings["functional_test"]["ok_protocol"] = array("https://example.com/a?b=c#d");