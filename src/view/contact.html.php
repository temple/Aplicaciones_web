<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
    <title>formulario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/form.css">
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
		<script src="https://use.fontawesome.com/eaf3553229.js"></script>
</head>

<body>
    <header>
        <h1>formulario</h1>
    </header>
    <main>
        <section class="formulario">
            <form id="formulario"  method="post">
                
                <section class="input-container">
                    <i class="fa fa-user icon"></i>
                    <input class="input-field" type="text" placeholder="Nombre" name="nombre" id="nombre">
                </section>
                <section class="input-container">
                    <i class="fa fa-envelope icon"></i>
                    <input class="input-field" type="email" placeholder="Email" name="email" id="email">
                </section>
                <section class="text-container">
                    <textarea id="comentario" name="comentario" placeholder="Comentario" rows="10"></textarea>
                </section><br>
                <button type="button" class="btn" id="btn" value="envio form">Enviar</button>
            </form>
            <section id="data"></section>
        </section>
    </main>
</body>

</html>