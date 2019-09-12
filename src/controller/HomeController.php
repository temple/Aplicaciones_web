<?php

namespace controller;

class HomeController
	extends AbstractController
{
 
  	public $request;
  	public $params;

 public function IndexAction($request , $params) {
 	include __DIR__."/../view/vista.php";
 }

 public function PremiumAction($request , $params) {
 	include __DIR__."/../view/vista.php";
 }


}
