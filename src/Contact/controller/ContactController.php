<?php

namespace Contact\controller;
use controller\AbstractController as IdxController;

class ContactController
		 extends IdxController

{
	//TODO: Implementa la acción que recogerá los datos enviados 
	//      mediante el envio por AJAX de un formulario
	//      la acción se llamará processContactAjaxAction
	public function processContactAjax($request,$params) {
		
		
		sleep(2);
		//       dentro del parámetro $params	 		
		if((!(empty($params['email']))) && (!(empty($params['nombre']))) && (!(empty($params['mensaje'])))){
			$massage = "DATOS RECIBIDOS CORRECTAMENTE";
		
		}else{
		return json_encode($message);				
		$massage = "FALSE";
		}
		echo json_encode($massage);
			}

		/*var_dump($email);
			if(!empty($email)){ //si la variable NO está vacía
				echo json_encode("Email recibido OK");
				}else{
				echo json_encode("Email recibido OK");
			}
			*/

	
		// TODO: Haz que se verifique la $request recibida
		//       y que estén todos los datos que se esperan,
		//       dentro del parámetro $params



	//TODO: Completa la implementación de indexAction
	//      para que muestre un formulario que funcione via ajax
	public function indexAction(){
		include  __DIR__."/../view/vista-contact.php";
	}
}