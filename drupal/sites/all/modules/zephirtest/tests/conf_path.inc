<?php

$settings = array();

$settings["name"] = "conf_path";
$settings["variables"][] = array("type" => "value", "value" => true);
$settings["variables"][] = array("type" => "value", "value" => false);
$settings["performance_input"] = "random";
$settings["performance_runs"] = array(1000);

// The functional tests
$settings["functional_test"]["truetrue"] = array(true, true);
$settings["functional_test"]["truefalse"] = array(true, false);
$settings["functional_test"]["falsetrue"] = array(false, true);
$settings["functional_test"]["falsefalse"] = array(false, false);