<?php

namespace Contact\controller;
use controller\AbstractController as IdxController;

class ContactController
		 extends IdxController

{

	//TODO: Implementa la acción que recogerá los datos enviados 
	//      mediante el envio por AJAX de un formulario
	//      la acción se llamará processContactAjaxAction
	public function processContactAjaxAction($request, array $params) {
		
		
				if (empty($params['email'])){
					$mensage = "Error en el email";
				} 
				elseif (empty($params['nombre'])){
					$mensage = "Error en el nombre";
				}
				elseif (empty($params['mens'])) {
					$mensage = "Error en el mensajr";
				}
				else {
					$mensage =  "Todo correcto"; 
					
				}
				echo json_encode($mensage);
		
			}
		// TODO: Haz que se verifique la $request recibida
		//       y que estén todos los datos que se esperan,
		//       dentro del parámetro $params



	//TODO: Completa la implementación de indexAction
	//      para que muestre un formulario que funcione via ajax
	public function indexAction(){
		include  __DIR__."/../view/vista-contact.php";
	}
}