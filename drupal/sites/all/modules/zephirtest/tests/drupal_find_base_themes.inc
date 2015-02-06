<?php

$settings = array();

// Note that this test requires Bootstrap Theme and Bootstrap Barrio Theme in the themes directory

$settings["name"] = "drupal_find_base_themes";
$system = cache_get('system_list', 'cache_bootstrap');
$settings["variables"][] = array("type" => "value", "value" => $system->data["theme"]);
$settings["variables"][] = array("type" => "value", "value" => "bootstrap_barrio");
$settings["performance_input"] = "random";
$settings["performance_runs"] = array(1000);

// The functional tests
$settings["functional_test"]["found"] = array($system->data["theme"], "bootstrap_barrio");
$settings["functional_test"]["notfound"] = array($system->data["theme"], "austin");