ASIGNACIÓN DE VARIABLES POR COPIA
#################################

Creamos una variable con un valor de tipo array
y la copiamos en otra variable.
<?php
$variable_con_una_lista = ['0',1,false];
$variable_copia = $variable_con_una_lista;
?>

Volcado de ambas variables:
<?php
var_dump($variable_con_una_lista);
var_dump($variable_copia);
// Las dos variables tienen una COPIA de un array


array_shift($variable_con_una_lista);
/* Modificamos el array de la primera variable 
   eliminando la primera posición.
   tal como si hiciéramos variable_array.shift() en JavaScript
*/
?>

Volcado de las variables tras modificar la primera:
<?php
var_dump($variable_con_una_lista);
var_dump($variable_copia);
// La lista se ha modificado solo para la primera variable


unset($variable_copia);
// Eliminamos la variable copiada
?>

Volcado de $variable_con_una_lista tras eliminar $variable_copia:
<?php
var_dump($variable_con_una_lista);
?>

ASIGNACIÓN DE VARIABLES POR REFERENCIA
######################################
Creamos una variable con un valor de tipo objeto
y la "copiamos" en otra variable.
En realidad lo que copiamos es una referencia al objeto.
<?php
$variable_con_objeto = new \StdClass();
// Creamos un objeto y lo asignamos a la variable 
// new \StdClass() equivale a "new Object()" en JavaScript
$variable_referencia = $variable_con_objeto;
// Las dos variables tienen una referencia a un OBJETO (el mismo objeto)
$variable_con_objeto->propiedad = "modificada via primera variable";
?>

Volcado de la $variable_referencia tras modificar 
el objeto referenciado usando $variable_objeto:
<?php
var_dump($variable_referencia);


$referencia1 = spl_object_id($variable_con_objeto);
$referencia2 = spl_object_id($variable_referencia);
// Ambas variables usan la misma referencia.
?>

Volcado de las referencias:
<?php
var_dump($referencia1);
var_dump($referencia2);


unset($variable_referencia);
/* Al eliminar la variable, se elimina una de las referencias al objeto 
   El objeto referenciado se destruirá automáticamente cuando ya no queden referencias al mismo.
   Por lo tanto la referencia de $variable_objeto se conserva
*/
?>

Volcado de $variable_objeto tras realizar
unset($variable_referencia):
<?php
var_dump($variable_con_objeto);

$variable_con_objeto = new \StdClass();
$variable_con_objeto->name = "objeto a ser copiado";
// Creamos un objeto y le asignamos valor a una nueva propiedad

$variable_copia = clone $variable_con_objeto;
$variable_copia->name = "objeto copiado usando clone";
/* Cuando clonamos un objeto usando "clone"
   estamos creando una copia de ese objeto
   y la asignación ya no es de la referencia al primer objeto
   si no de la referencia a la copia
*/
?>

Volcado de $variable_objeto y $variable_copia
tras asignar un objeto y una clonación
<?php

var_dump($variable_con_objeto);
var_dump($variable_copia);

$referencia1 = spl_object_id($variable_con_objeto);
$referencia2 = spl_object_id($variable_copia);
// Las variables tienen distintas referencias.
?>

Volcado de las referencias tras la clonación:
<?php
var_dump($referencia1);
var_dump($referencia2);