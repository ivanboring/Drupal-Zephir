<?php

$settings = array();

$settings["name"] = "cache_get";
$settings["variables"][] = array("type" => "string");
$settings["variables"][] = array("type" => "string");
$settings["performance_input"] = "random";
$settings["performance_runs"] = array(1000);

// The functional tests
$settings["functional_test"]["doesnotexist"] = array("asdfas");
$settings["functional_test"]["existswithbin"] = array("links:navigation:page:zephirtest:en:1:0", "cache_menu");