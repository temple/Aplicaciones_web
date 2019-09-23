<?php

namespace controller;

interface IndexControllerInterface
	extends ControllerInterface
{
	
	/**
	 * Index Action
	 * Acción que mostrará la vista en su estado por defecto
	 * @param  $request Información de la petición
	 * @param  $params Parámetros con información adicional
	 */
	public function indexAction($request,array $params);
}