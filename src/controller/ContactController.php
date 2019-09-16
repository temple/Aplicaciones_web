<?php
namespace controller;
class ContactController
	extends AbstractController
{
	//TODO: Implementa la acción que recogerá los datos enviados
	//      mediante el envio por AJAX de un formulario
	//      la acción se llamará processContactAjaxAction
	public function processContactAjaxAction($request ,array $params){
 
		sleep(3);
 		
		if((!(empty($params['email']))) && (!(empty($params['nombre']))) && (!(empty($params['mensaje'])))){

			$massage = "DATOS RECIBIDOS CORRECTAMENTE";
		
		}else{

			$massage = "FALSE";
		}

		echo json_encode($massage);
	}


	//TODO: Completa la implementación de indexAction
	//      para que muestre un formulario que funcione via ajax
	public function indexAction($request , $params){
		include  _DIR_."/../view/contact.html.php";
	}
}