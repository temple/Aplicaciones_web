<?php

namespace src\view;

class FrontController
{
	protected $routing;

	public function __construct(){
		$this->routing = new Routing();
	}

}