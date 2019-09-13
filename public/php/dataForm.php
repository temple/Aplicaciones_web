<?php
sleep(2); //simula un retardo (3sec) para ver el funcionamiento de beforeSend de ajax
//recibo por POST el email del form
$email = $_POST['email'];

if(!empty($email)){ //si la variable NO está vacía
	echo json_encode("Email recibido OK");
}else{
	echo json_encode("Email recibido OK");
}



if ($_POST['email']==""){

		return json_encode($message);
			$message =  "No incluyo ningún email. Por favor, revise el formulario";
			//echo json_encode ($message); 
		} 
		elseif ($_POST['asunto']==""){
			$message = "No incluyo ningún asunto. Por favor, revise el formulario";
		}
		elseif ($_POST['mensaje']=="") {
			$message = "No incluyo ningún mensaje. No tiene nada que decirnos???? 
			Por favor, revise el formulario";
		}
		else { //si todo está relleno ;
			$message =  "Tu mensaje se ha enviado correctamente. En breve recibirá contestación."; 
			//echo json_encode($message);
		}
		echo json_encode($message);

