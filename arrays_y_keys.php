<script>
	var variable_con_array = ["valor string",{},543,false,null,undefined];
    for (var i in variable_con_array){
    	console.log("La variable i está en la posición ",i, " del array");
        console.log("En la posición ",i, "hay ",variable_con_array[i]);
    }
</script>

<?php
  $variable_con_array = [
      "a" => "valor string",
      "b" => new \StdClass(),
      534,
      1   => false,
      4   => null,
      null
  ];

  foreach($variable_con_array as $i => $valor){
  	print("La variable i está en la posición ".$i." del array\n");
    print("En la posicion ".$i." hay");
    print_r($valor);
  }