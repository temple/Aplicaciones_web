<?php
namespace src\view;

class Routing{

	protected $controllers = array();

	public function __construct(){
		$this->controllers['home'] = new HomeController();
	}	


}