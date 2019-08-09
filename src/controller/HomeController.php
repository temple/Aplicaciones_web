<?php

namespace controller;

class HomeController
	extends AbstractController

	{


	function indexAction($this->request_uri,$this->params){

		$vista = file_get_contents(__DIR__."../view/home.html");
		echo $vista;

	}

	//TODO: Crea el método adecuado para que se muestren las vistas correspondientes a las acciones: index y premium
}