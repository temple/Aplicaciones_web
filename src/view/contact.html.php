<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Page</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
		<!-- Framework Jquery-->
		<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
		<script src="https://use.fontawesome.com/eaf3553229.js"></script>
</head>
<body>
	<form method="post" id="ajaxform">
			<h3>Contacte con nosotros </h3>
			<input type="email" id="email" name="email" placeholder="Su Email">
			<input type="text" id="asunto" name="asunto" placeholder="Asunto del mensaje">
			<textarea type="text" id="mensaje" name="mensaje" placeholder="Que quiere decirnos???"></textarea>
			<input type="button" id="btn" value="Enviar su mensaje">
			<!--Caja de mensajes de validación y respuesta del server -->
			<div id="data"></div>
		</form>
</body>
</html>