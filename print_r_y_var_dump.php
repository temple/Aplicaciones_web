<?php
$array = ["a" => 1, "b" => 2, 3 =>"c"];

$objeto = new \StdClass();
$objeto->a = 1;
$objeto->b = 2;
$objeto->c = 3;

/* 
   var_dump y print_r equivalen a console.dir y a console.log en JavaScript
   print y echo imprimen únicamente strings
   @see https://www.php.net/manual/en/function.echo.php
   @see https://www.php.net/manual/en/function.print-r.php
   @see https://www.php.net/manual/en/function.var-dump.php
*/

print ("Usando print_r y var_dump para mostrar \$array");
echo "\n";
print_r($array);
var_dump($array);


echo "Usando print_r y var_dump para mostrar \$objeto";
print "\n";
print_r($objeto);
var_dump($objeto);



// cuando print_r recibe el segundo parámetro con un valor equivalente 
// al booleano true, la función no produce una impresión de la variable
// si no que retorna esa impresión a modo de string
$resultado = print_r($array,true);
print "Mostrando el retorno de print_r(\$array,true) de la línea ".(__LINE__-1);
echo "\n";
print_r($resultado);
var_dump($resultado);


echo "Usando var_dump con dos parámetros";
echo "\n";
var_dump($array,$resultado);


$resultado = print_r($objeto,true);
print "Mostrando el retorno de print_r(\$objeto,true) de la línea ".(__LINE__-1);
print "\n";
print_r($resultado);
var_dump($resultado);




