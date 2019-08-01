<?php

namespace src\view;
use src\controller\HomeController;

class Routing{

	protected $controllers = array();

	public function __construct(){
		$this->controllers['home'] = new HomeController();

		var_dump($controllers);
	}	


}