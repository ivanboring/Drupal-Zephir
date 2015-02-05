<?php

$settings = array();

$settings["name"] = "check_plain";
$settings["variables"][] = array("type" => "string", "html" => true, "min_length_value" => 15, "max_length_value" => 30);
$settings["performance_input"] = "random";
$settings["performance_runs"] = array(10, 1000);

// The functional tests
$settings["functional_test"]["double_quotes"] = array("here I will write a double quote \" - how does it look in the source code?");
$settings["functional_test"]["single_quote"] = array("here I will write a single quote ' - how does it look in the source code?");
$settings["functional_test"]["ampersand"] = array("here I will write a ampersand & - how does it look in the source code?");
$settings["functional_test"]["less_then"] = array("here I will write a less then sign < - how does it look in the source code?");
$settings["functional_test"]["more_then"] = array("here I will write a more then sign > - how does it look in the source code?");