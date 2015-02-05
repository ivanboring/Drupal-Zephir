<?php

$settings = array();

$settings["name"] = "menu_unserialize";
$settings["variables"][] = array("type" => "serialized", "serialized" => "assoc_array", "min_length_value" => 10, "max_length_value" => 20, "maxdepth" => 3);
$settings["variables"][] = array("type" => "value", "value" => array("node", "add"));
$settings["performance_input"] = "random";
$settings["performance_runs"] = array(1000);

// The functional tests
$settings["functional_test"]["devel_test"] = array('a:1:{i:0;s:24:"access devel information";}', array("node", "add"));
$settings["functional_test"]["admin_test"] = array('a:1:{i:0;s:27:"access administration pages";}', array("admin", "config"));