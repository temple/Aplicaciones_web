echo de $var_sin_valor:
<?php
$var_sin_valor;
echo $var_sin_valor; 
// no se muestra nada porque la variable no tiene valor
?>

echo de $variable_string:
<?php
$variable_string = "cadena de texto";
// asignamos de manera directa un valor a $variable_string
echo $variable_string;
// se muestra "cadena de texto"
?>

echo de $variable_copia:
<?php
$variable_copia = $variable_string;
// $variable_copia tiene una copia del valor de $variable_string
unset($variable_string); 
// si destruimos $variable_string, $variable_copia sigue teniendo valor
echo $variable_copia;
// se muestra "cadena de texto"
?>

Asignaciones combinadas directa y por copia.
<?php
$var1 = $var2 = $var3 = "valor de var3";
/* las asignaciones se producen de derecha a izquierda
   la primera asignación es directa: 
       $var3 = "valor de var3"; 
   la segunda asignación es por copia:
       $var2 = $var3
   la tercera asignación también es por copia:
       $var1 = $var2
*/?>
echo de $var1
<?php echo $var1;
?>

echo de $var2
<?php echo $var2;
?>

echo de $var3
<?php echo $var3;
?>