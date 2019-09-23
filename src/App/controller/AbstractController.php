<?php

namespace controller;

use controller\IndexControllerInterface;
use errors\PageNotFoundError;

abstract class AbstractController{
	
	/**
	 * Controller what shows an error page
	 * @var IndexControllerInterface
	 */
	protected $errorController;	


	/**
	 * {@inheritDoc}
	 */
	public function callAction($request, string $action, array $params = [])
	{
		$method = $action;
		if (FALSE == preg_match('/\w\w*Action$/', $action)){
				$method = $action."Action";
		}
		try{	
			if ( method_exists($this, $method) ){				
				return call_user_func_array( [$this,$method],[$request , $params]);
			}else {
				$error = PageNotFoundError::getInstance();
				$error->setDetails(new \Exception("Action $action was not found"));
				throw $error;
			}	
		}
		catch (\Throwable $error){
			return $this->showError($request, $error, $action, $params);
		}
	}

	 /* Muestra una pantalla de error
	 */
	protected function showError($request, \Throwable $error =null, string $action ='index', array $params=[])
	{

		if ($this->errorController instanceof IndexControllerInterface){
		 		$params = array('action'=>$action,'error'=>$error, 'params'=>$params);
		 		$this->errorController->indexAction($request,$params);

				//$this->errorController->callAction($request,'index',$params);
		}
		else{
		 	if (!($error instanceof \Throwable)){
				$error = new \Exception('Uknown Exception',500);
			}
			throw $error;
		}
	}
}