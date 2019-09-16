<?php

namespace controller;

class HomeController
	extends AbstractController
{
public function indexAction($request , $params) {
	
		include _DIR_."/../view/home.php";

	}
	public function premiumAction($request , $params) {
	
		include _DIR_."/../view/homepremium.php";

	}
	//TODO: Crea el método adecuado para que se muestren las vistas correspondientes a las acciones: index y premium
}