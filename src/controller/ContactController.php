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

	public function processContactAjaxAction ($request , array $params) 
	{//creacion del metodo processContactAjax
		if((!(empty($params['email']))) && (!(empty($params['nombre']))) && (!(empty($params['comentario'])))){
			$massage = "DATOS RECIBIDOS CORRECTAMENTE";
			}
		else{
			$massage = "false";
			}

	 // TODO: Haz que se verifique la $request recibida
		// // y que estén todos los datos que se esperan,
		// // dentro del parámetro $params
		// return json_encode($message);
	}
		//      para que muestre un formulario que funcione via ajax
	public function indexAction($request , $params)
	{
		include __DIR__."/../view/contact.html.php";
	}
	

 }