<?php

$paths =<<<PATHS
{
	"home": {
		"controller" : "HomeController",
		"action": "index"
	},

	"home/premium": {
		"controller": "HomeController",
		"action": "premium"
	},

	"login" : {
		"controller": "LoginController",
		"action": null
	},

	"logout" :{
		"controller": "LoginController",
		"action": "logout"
	},

	"404" : {
		"controller": "errorController"
	},

	"error": {
		"controller": "errorController",
		"action": "indexAction"
	}
}
PATHS;

$paths = json_decode($paths);
$GLOBALS['config']= array(
	"routes" => $paths
);