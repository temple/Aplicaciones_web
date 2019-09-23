<?php

namespace contenidos\controller;

use controller\DataController;
use contenidos\model\ContentsRepository;

class MainController
	extends DataController
{

	public function __construct(){
		$this->repository = new ContentsRepository($GLOBALS['db']);
	}
	
	public function indexAction($request , $params) {
		$ajax_get = 'contents=all';
		$title = "Contenidos del site";
		include __DIR__.'/../view/list.html.php';		
	}

	public function ajaxAction($request , $params){
		if (!array_key_exists("contents", $params))
			throw new \Error("Missing 'contents' argument");
		else
			switch ($params['contents']){
				case "all":
					$result = array_merge($modulos = $this->repository->findAllModulos(), $this->repository->findAllUnidades(), $this->repository->findAllCertificados());
					break;
				case "certificados":
					$result = $this->repository->findAllCertificados();
					break;
				case "unidades":
					$result = $this->repository->findAllUnidades();
					break;
				case "modulos":
					$result = $this->repository->findAllModulos();
					break;
				default:
					$result = [['titulo'=>'No se han podido cargar datos']];
				exit;
			}
		echo json_encode($result);
	}
	
}