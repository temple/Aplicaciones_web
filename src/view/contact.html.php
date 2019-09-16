<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Ajax Form</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <!-- Framework Jquery-->
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script src="https://use.fontawesome.com/eaf3553229.js"></script>
    </head>
    <body>
        <form method="post" id="ajaxform">
            <h3>Ajax form</h3>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre">
            <input type="email" id="email" name="email" placeholder="Email">
            <textarea id="mensaje" name="mensaje" placeholder="Mensaje"></textarea>
            <input type="button" id="btn" value="Enviar Form">
            <!--Caja de mensajes de validación y respuesta del server -->
            <div id="data"> </div>
        </form>
    </body>
</html>