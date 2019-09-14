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

	public function processContactAjaxAction ($request ,array $params) 
	{//creacion del metodo processContactAjax

		if ($_POST['email']==""){
			$message =  "No incluyo ningún email. Por favor, revise el formulario";
			//echo json_encode ($message); 
		} 
		elseif ($_POST['asunto']==""){
			$message = "No incluyo ningún asunto. Por favor, revise el formulario";
		}
		elseif ($_POST['mensaje']=="") {
			$message = "No incluyo ningún mensaje. No tiene nada que decirnos???? 
			Por favor, revise el formulario";
		}
		else { //si todo está relleno ;
			$message =  "Tu mensaje se ha enviado correctamente. En breve recibirá contestación."; 
			
		}
		echo json_encode($message);
		// // TODO: Haz que se verifique la $request recibida
		// // y que estén todos los datos que se esperan,
		// // dentro del parámetro $params
		// return json_encode($message);
	}
		//TODO: Completa la implementación de indexAction
		//      para que muestre un formulario que funcione via ajax
	public function indexAction($request , $params)
	{
		include __DIR__."/../view/contact.html.php";
	}
}

