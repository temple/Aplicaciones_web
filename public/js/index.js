//No ejecuta código JS hasta que carga todo el documento HTML
$(document).ready(function(){ 

	//funcion que valida email mediante regexp
	function validateEmail(email){
		var pattern = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return pattern.test(email);
	}

	//Selector del boton con Id=btn y evento click
	$("#btn").click(function(){	

			$.ajax({
				//configuración de envío de datos
				type: "post", //tipo de envío mediante POST
				url: "ajax/contact", //archivo que es llamado en el server
				dataType: "json", //tipo de dato en formato json
				data: $("#ajaxform").serialize(), //datos que se envían del formulario en formato: name:valor
				//------------------------------------------------------
				//acciones de envío y respuesta
				success: function(dataSuccess){
					$("#data").html(dataSuccess);
				},
				beforeSend: function(){
					$("#data").html("enviando...");
				},
				error: function(){
					$("#data").html("error");
				}

			});

		
		
	});

  
});