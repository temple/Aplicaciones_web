<?php

/* 
   Ejemplo de uso de las funciones 
   gettype y settype

   @see https://www.php.net/manual/en/function.gettype.php
   @see https://www.php.net/manual/en/function.settype.php
*/

$null = null;
$string = "5tring de texto";
$integer = 2;
$float = 3.1;
$boolean = true;
$array = [0,'a','3'=>1];
$objeto = new \StdClass;

// Get type informa sobre el tipo de dato correspondiente al valor de una variable
$output = 	"Los tipos de las variables son:\n".
			gettype($null)."\n".
			gettype($string)."\n".
			gettype($integer)."\n".
			gettype($float)."\n".
			gettype($boolean)."\n".
			gettype($array)."\n".
			gettype($objeto)."\n";
echo $output;

echo "\nLos valores iniciales de las variables son:\n";
var_dump($null, $string, $integer, $float, $boolean, $array, $objeto);

// Settype modifica el tipo de dato del valor de una variable,
// y en consecuencia, el valor puede verse afectado
settype($null, "boolean");
settype($string, "float");
settype($integer, "array");
settype($float,"object");
settype($boolean, "string");
settype($array,"integer");
settype($objeto,"null");

$output = 	"\nLos tipos de las variables son:\n".
			gettype($null)."\n".
			gettype($string)."\n".
			gettype($integer)."\n".
			gettype($float)."\n".
			gettype($boolean)."\n".
			gettype($array)."\n".
			gettype($objeto)."\n";
echo $output;

echo "\nLos valores ahora han quedado así:\n";
var_dump($string, $integer, $float, $boolean, $array, $objeto);