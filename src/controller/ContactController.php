<?php

class ContactController{

	//TODO: Implementa la acción que recogerá los datos enviados 
	//      mediante el envio por AJAX de un formulario
	//      la acción se llamará processContactAjaxAction
	public function ...... {
		// TODO: Haz que se verifique la $request recibida
		//       y que estén todos los datos que se esperan,
		//       dentro del parámetro $params

		return json_encode($message);
	}

	//TODO: Completa la implementación de indexAction
	//      para que muestre un formulario que funcione via ajax
	public function indexAction(){
		include "../view/contact.html.php";
	}
}