<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aplicaciones Web :: Demo :: <?php echo $title ?></title>
	<script async src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		window.addEventListener('load', (event) => {
 			loadContents();
		});
	</script>
</head>
<body>
	<ul class="contents">

	</ul>
	
	<template id="content-item">
		<li class="content-item" id="">
			<a data-id="identificacion" href="" title="">
				<h2 data-id="titulo"></h2>
				<dl>
					<dt data-id="codigo"></dt>
					<dd data-id="horas"></dd>
					<dd data-id="resumen"></dd>
				</dl>
			</a>
		</li>
	</template>

	<script>
		var content_loaded = false;
		function loadContents(){
			if (content_loaded) return;
			$.ajax({
				type: "get", 
				url: "/ajax?<?php echo $ajax_get?>",
				contentType: "text/plain",
				dataType: "json", //tipo de dato en formato json
				success: function(contents){
					var contents_list = document.querySelector("ul.contents");
					contents.forEach(function(item){
						var template = document.querySelector('#content-item');
						template.content.querySelector(".content-item").setAttribute('id',item.id);
						template.content.querySelector("[data-id='identificacion'").setAttribute('title',item.identificacion);
						template.content.querySelector("[data-id='titulo'").textContent = item.titulo;
						template.content.querySelector("[data-id='codigo'").textContent = item.codigo;
						template.content.querySelector("[data-id='horas'").textContent = parseInt(item.horas)+'h';
						if (typeof item.resumen != 'undefined')
							template.content.querySelector("[data-id='resumen'").textContent = item.resumen.substring(0,50);
						var content_item = document.importNode(template.content, true);
  						contents_list.appendChild(content_item);
					});

					content_loaded = true;
				},
				beforeSend: function(){

				},
				error: function(){
					
				}

			});
		}
	</script>
</body>
</html>