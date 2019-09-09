<?php

namespace controller;

class HomeController{

	public $request;
	public $params;
	
	public function indexAction($request, $params){
		include __DIR__."/../view/vista.php";
	}
}
