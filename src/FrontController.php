<?php

class FrontController
{
	protected $routing;

	protected $request_uri;
	
	public function __construct(){
		$this->routing = new Routing();
	}
	// en una función.
	// crea esta función. No olvides mirar el código de public/index.php 

	public function run(){

	  $this->request_uri = $_SERVER["REQUEST_URI"];


    }

}
