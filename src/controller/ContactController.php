<?php

namespace 	controller;

class ContactController
extends AbstractController
{
	public $request;
	public $params;
	//DONE: Implementa la acción que recogerá los datos enviados 
	//      mediante el envio por AJAX de un formulario
	//      la acción se llamará processContactAjaxAction
	public function processContactAjaxAction ($request ,array $params) {
		// DONE: Haz que se verifique la $request recibida
		//       y que estén todos los datos que se esperan,
		//       dentro del parámetro $params
	
		if (empty($params['email'])){
			$message = false;
		} 
		elseif (empty($params['nombre'])){
			$message = false;
		}
		elseif (empty($params['mensaje'])) {
			$message = false;
		}
		else { //si todo está relleno ;
			$message =  "DATOS RECIBIDOS CORRECTAMENTE."; 
			//echo json_encode($message);
		}
		echo json_encode($message);
		
	}

	//DONE: Completa la implementación de indexAction
	//      para que muestre un formulario que funcione via ajax
public function indexAction($request , $params){
	include __DIR__."/../view/contact.html.php";
	}
}