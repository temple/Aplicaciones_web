<?php

namespace controller;

class HomeController
	extends AbstractController
{

	//TODO: Crea el método adecuado para que se muestren las vistas correspondientes a las acciones: index y premium

public $request;

public $params;

public function indexAction($request , $params) {
		include __DIR__."/../../public/home.php";
	}
public function premiumAction($request , $params) {
		include __DIR__."/../../public/home.php";
	}

}