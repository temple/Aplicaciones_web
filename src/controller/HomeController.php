<?php

namespace controller;

class HomeController
	extends AbstractController

	{


	public function indexAction($request,$params){;
		include __DIR__."/../view/vista-index.php";

	}

	public function premiumAction ($request,$params){
		include __DIR__."/../view/vista-premium.php";
 	}


	//Done: Crea el método adecuado para que se muestren las vistas correspondientes a las acciones: index y premium
}