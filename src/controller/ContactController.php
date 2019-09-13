<?php

namespace controller;

class ContactController
	extends AbstractController
{
	public $request;
	public $params;

	//TODO: Implementa la acción que recogerá los datos enviados 
	//      mediante el envio por AJAX de un formulario
	//      la acción se llamará processContactAjaxAction
	public function processContactAjaxAction (){

		/*sleep(2); //simula un retardo (3sec) para ver el funcionamiento de beforeSend de ajax
		//recibo por POST el email del form
			$email = $_POST['email'];

		if(!empty($email)){ //si la variable NO está vacía
		echo json_encode("Email recibido OK");
		}else{
		echo json_encode("Email recibido KO");
		}
		//echo json_encode("hola");*/

	}

	//TODO: Completa la implementación de indexAction
	//      para que muestre un formulario que funcione via ajax
	public function indexAction($request , $params){
		include __DIR__."/../view/contact.html.php";
	}
}