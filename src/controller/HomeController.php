<?php

namespace controller;

class HomeController
	extends AbstractController
{
public function indexAction($request , $params) {
	
		include __DIR__."/../view/home.php";
		
	}
public function premiumAction($request , $params) {
		include __DIR__."/../view/premium.php";

}
	//DONE: Crea el método adecuado para que se muestren las vistas correspondientes a las acciones: index y premium
}