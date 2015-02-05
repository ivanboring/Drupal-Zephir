<?php

$settings = array();

$settings["name"] = "drupal_attributes";
$settings["variables"][] = array("type" => "assoc_array", "max_depth" => 1, "min_length_value" => 1, "max_length_value" => 20);
$settings["performance_input"] = "random";
$settings["performance_runs"] = array(1000);

// The functional tests
$settings["functional_test"]["steal_cookie"] = array(array('title' => t('<script>steal_cookie();</script>')));
$settings["functional_test"]["malicious"] = array(array('onmouseout' => 'window.location="http://malicious.com/";'));