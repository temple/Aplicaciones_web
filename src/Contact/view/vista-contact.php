<html>
<head>
   <header>
  <title>Materi.es</title>
  <meta charset="utf-8" />
    <link rel="stylesheet" href="css/index.css">
    <!-- Framework Jquery-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script src="https://use.fontawesome.com/eaf3553229.js"></script>
	
      <img class="logo" alt="logo corporativo" src="http://drive.google.com/file/d/1iX9YP8gmbv9BDQTJLK1DNaHv-B5Nvg89/view" />
        <nav>
       <ul class="rojo negrita">
              <li>Matematicas</li>
              <li>Ciencias naturales</li>
              <li>Inglés</li>
              <li>Materi.es</li>
          </ul>
      </nav>
  
  <nav class="buscador">
   <div class="busqueda">
      <input type="text" class="searchTerm" placeholder="Quiero buscar...">
      <button type="submit" class="searchButton">
        <img class="busqueda" src="https://image.flaticon.com/icons/png/512/1096/1096351.png" alt="lupa">

        <i class="fa fa-search"></i>
     </button>
   </div>
</nav>


  <nav class="acceso">
       <ul>
         <li><button>Entrar al aula</button></li>
         <li><button>Registrarse</button></li>

          </ul>
      </nav>
  
      <form id="Idioma">
          <input id="cat-lang" value="ca-ES" type="radio" name="idioma" />
          <label for="cat-lang"><img src="https://upload.wikimedia.org/wikipedia/commons/c/ce/Flag_of_Catalonia.svg" width="30" alt="Català" /></label>
          <input id="es-lang" value="es-ES" type="radio" name="idioma" />
          <label for="es-lang"><img src="https://www.comprarbanderas.es/images/banderas/400/1-espana_400px.jpg" width="30" alt="castellano" /></label>
          <input id="eng-lang" value="en-EN" type="radio" name="idioma" />
          <label for="eng-lang"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Flag_of_the_United_States.svg" width="30" alt="english" /></label>
      </form>
    </header>
  </head>
<body>

  	
		<form class = "form" method="post" id="ajaxform">
			<h2>Contacta con nosotros</h2>
			<input class= "element" type="text" id="nombre" name="nombre" placeholder="Nombre">
			<input  class= "element" type="email" id="email" name="email" placeholder="Email">
			<input class= "element" type="text" id="mens" name="mens" placeholder="Mensaje">
			<input class= "element" type="button" id="btn" value="Enviar Form">
			<!--Caja de mensajes de validación y respuesta del server -->
			<div id="data"></div>
		</form>
	   
    <footer>
    <div class="row">
      <ul title="zona asignaturas">
      <li><a href="#" title="">Matemáticas</a></li>
      <li><a href="#" title="">Ciencias naturales</a></li>
      <li><a href="#" title="">Inglés</a></li>
    </ul>
  <ul title="zona contacto">
        <li><b>Siguenos en:</b>
      </li>
         <img class="imagen"alt="Instagram" src="***" />
         <img class="imagen"alt="Youtube" src="***" />
         <img class="imagen"alt="Facebook" src="***" />

    </ul>   
     <ul title="zona legal">
      <li><a href="#" title="">Aviso legal</a></li>
      <li><a class="hola" href="#" title="">Política de privacidad</a></li>
      <li><a href="#" title="">Política de cookies</a></li>
    </ul>
    </div>
    <p class="copyr">&copy; Materies 2019</p>
  </footer>

</body>
</html>