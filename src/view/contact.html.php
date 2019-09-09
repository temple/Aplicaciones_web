<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CONTACTO - Aplicaciones_Web</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<!-- Framework Jquery-->
		<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
		<script src="https://use.fontawesome.com/eaf3553229.js"></script>
</head>

<body>
	<form method="post" id="contact">
			<h3>Contacte con nosotros</h3>
			<input type="email" id="email" name="email" placeholder="Email">
			<input type="text" id="asunto" name="asunto" placeholder="Asunto">
			<textarea id="mensaje" name="mensaje" placeholder="Mensaje"></textarea>
			<input type="button" id="btn" value="Enviar Form">
			<!--Caja de mensajes de validación y respuesta del server -->
			<div id="data"></div>
		</form>
</body>
</html>