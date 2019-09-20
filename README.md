Aplicaciones Web
========

Aplicaciones Web es un proyecto pensado para el aprendizaje del Desarrollo de aplicaciones con tecnologías Web.

# INTRODUCCIÓN
## OBJETIVOS DIDÁCTICOS

En el presente documento encontrarás una propuesta para cubrir los siguientes objetivos:

- Redactar un documento `README.md` para presentar (y **documentar**) una aplicación web
- Especificar los requisitos no funcionales (de arquitectura) para la correcta **implantación** de una aplicación web
- Proponer un conjunto de juegos de pruebas unitarias para realizar una **verificación** de las funcionalidades de una aplicación 

## PROYECTO

El presente proyecto consiste en una aplicación web basada en el patrón MVC (_Model Vista Controlador_), que ha sido implementada en el lenguaje de programación [PHP](http://php.net) y pensada para ser descargada y estudiada.

### Lenguajes

A parte de _PHP_, este proyecto incluye el uso de lenguajes tales como [Markdown](https://guides.github.com/features/mastering-markdown/), que se utiliza para dotar de formato el presente documento, así como [YAML](https://learnxinyminutes.com/docs/yaml/) y [JSON](https://developer.mozilla.org/es/docs/Learn/JavaScript/Objects/JSON), que son utilizados en archivos de configuración, así como [SQL](https://mariadb.com/kb/en/library/sql-statements-structure/), que se utiliza para la creación de bases de datos con una carga inicial de datos y también para el acceso a los mismos. 

### Tecnologías

Este proyecto, facilita el contacto inicial con las tecnologías más populares para la iniciación a las aplicaciones web. En este caso, y habiendo elegido _PHP_ como lenguaje en que está implementada la aplicación, se utiliza [_php-fpm_](https://www.stackscale.es/php-fpm-php-webs-alto-trafico/) para la ejecución de su código; a parte se utiliza [_Nginx_](https://www.nginx.com/resources/wiki/start/) como servicio web para poder atender peticiones via [_HTTP_](https://developer.mozilla.org/es/docs/Web/HTTP) y determinar cómo deben ser atendidas (pudiendo implicar la ejecución de la aplicación).  
  
Por otro lado, se usan tecnologías como [_MariaDB_](https://mariadb.com/kb/en/library/general-questions/) para el almacenamiento de datos que son accedidos y presentados por la aplicación (en algunos casos), lo que implica la utilización de algunas extensiones [PECL](https://www.php.net/manual/es/install.pecl.intro.php) de PHP, tales como [PDO](https://www.php.net/manual/es/book.pdo.php), con su respectivo driver [PDO-MySQL](https://www.php.net/manual/es/ref.pdo-mysql.php) así como la extensión [Mysqlnd](https://www.php.net/manual/es/book.mysqlnd.php) que dota a PHP de la capacidad de comunicarse con una servicio de base de datos _Mysql_ o _MariaDB_.    
  
Finalmente se utilizan los ejecutables [_composer_](https://getcomposer.org), que permite dotar a una aplicación escrita en *PHP* de librerías y paquetes (conocidos como _vendors_) que hay disponibles en [packagist.org](https://packagist.org); y [_git_](https://git-scm.com/), que por tratarse de un sistema descentralizado de control de versiones, se utiliza para gestionar la publicación de entregas de versiones de los archivos de la aplicación así como también para el despliegue de la misma.


# ESPECIFICACIÓN
## TEMÁTICA
La aplicación que hay detrás de este proyecto muestra un catálogo de certificados de profesionalidad de la familia IFCD (Desarrollo de Software).  
En cada certificado constan varios apartados y un listado de sus módulos.  
Para cada módulo, se ofrecerá un listado de sus Unidades Formativas y un resumen de sus contenidos.  
Para estas últimas se mostrará un resumen de sus contenidos.  

## FUNCIONALIDADES
La aplicación web sirve información de los contenidos albergados (certificados y unidades formativas) a partir de la carga de URLs.  
En otras palabras, las URLs de la aplicación permiten obtener respuestas que correspondan con los parámetros de los mismos.

* Listado de Contenidos  
  Esta funcionalidad se ofrece mediante una vista HTML que se carga para las rutas `''` (vacía), `'/'` (barra), `'/home'` y `'/home'`.  
  La vista prepara una parrilla de los contenidos disponibles que se rellena mediante la carga de datos obtenidos de forma asíncrona mediante _AJAX_.  
  La carga de contenidos ocurre tras que suceda el evento [`load`](https://developer.mozilla.org/en-US/docs/Web/API/Window/load_event). Es entonces cuando se solicitan dichos contenidos mediante una llamada a la ruta `ajax?contents=all`. La respuesta a dicha llamada se espera en forma de documento JSON con la siguiente forma:

  ```json
  [
  	{
  		"path": "/certificados/1",
  		"code": "IFCD0210",
  		"title": "Desarrollo de apliaciones .. web",
  		"hint": "Desarollo de aplicaciones con tecnologías web",
  		"class": "certificado"
  	},
  	{
  		"path": "/certificados/2",
  		"code": "IFCD0110",
  		"title": "Confección y publicación .. web",
  		"hint": "Confección y publicación de páginas web",
  		"class": "certificado"
  	},
  	{
  		"path": "/unidades/1",
  		"code": "UF1841",
  		"title": "Elaboración de documentos web",
  		"hint": "Elaboración de documentos web mediante lenguajes de marcas",
  		"class": "unidad"
  	}
  	... 
  	{
  		"path": "/modulos/6",
  		"code": "MF0493",
  		"title": "Implantación de aplicaciones web",
  		"hint": "Implantación de aplicaciones web en entornos internet, intranet y extranet"
  	}
  ]
  ```

* Listado de certificados  
  Esta funcionalidad se ofrece mediante una vista HTML que se carga para las rutas `'/certificados'` y `'/certificados/'`.  
  La vista prepara una parrilla de los certificados que se rellena mediante la carga de datos obtenidos de forma asíncrona mediante _AJAX_.  
  La carga de certificados ocurre tras que suceda el evento [`load`](https://developer.mozilla.org/en-US/docs/Web/API/Window/load_event). Es entonces cuando se solicitan dichos certificados mediante una llamada a la ruta `ajax?contents=certificados`. La respuesta a dicha llamada se espera en forma de documento JSON con la siguiente forma:

  ```json
  [
  	{
  		"path": "/certificados/1",
  		"code": "IFCD0210",
  		"title": "Desarrollo de apliaciones .. web",
  		"hint": "Desarollo de aplicaciones con tecnologías web",
  		"class": "certificado"
  	},
  	{
  		"path": "/certificados/2",
  		"code": "IFCD0110",
  		"title": "Confección y publicación .. web",
  		"hint": "Confección y publicación de páginas web",
  		"class": "certificado"
  	}
  ]
  ```


* Listado de módulos  
  Esta funcionalidad se ofrece mediante una vista HTML que se carga para las rutas `'/modulos'` y `'/modulos/'`.  
  La vista prepara una parrilla de los módulos que se rellena mediante la carga de datos obtenidos de forma asíncrona mediante _AJAX_.  
  La carga de módulos ocurre tras que suceda el evento [`load`](https://developer.mozilla.org/en-US/docs/Web/API/Window/load_event). Es entonces cuando se solicitan dichos módulos mediante una llamada a la ruta `ajax?contents=modulos`. La respuesta a dicha llamada se espera en forma de documento JSON con la siguiente forma:

  ```json
  [
  	{
  		"path": "/modulos/1",
  		"code": "MF0950",
  		"title": "Creación de páginas web",
  		"hint": "Creación de páginas web"
  	},
  	{
  		"path": "/modulos/2",
  		"code": "MF0951",
  		"title": "Componentes de software",
  		"hint": "Integración de componentes de software en páginas web"
  	},
  	...
  	{
  		"path": "/modulos/6",
  		"code": "MF0493",
  		"title": "Implantación de aplicaciones web",
  		"hint": "Implantación de aplicaciones web en entornos internet, intranet y extranet"
  	}

  ]
  ```


* Listado de unidades  
  Esta funcionalidad se ofrece mediante una vista HTML que se carga para las rutas `'/unidades'` y `'/unidades/'`.  
  La vista prepara una parrilla de las unidades formativas que se rellena mediante la carga de datos obtenidos de forma asíncrona mediante _AJAX_.  
  La carga de unidades formativas ocurre tras que suceda el evento [`load`](https://developer.mozilla.org/en-US/docs/Web/API/Window/load_event). Es entonces cuando se solicitan dichas unidades formativas mediante una llamada a la ruta `ajax?contents=unidades`. La respuesta a dicha llamada se espera en forma de documento JSON con la siguiente forma:

  ```json
  [
  	{
  		"path": "/unidades/1",
  		"code": "UF1841",
  		"title": "Elaboración de documentos web",
  		"hint": "Elaboración de documentos web mediante lenguajes de marcas",
  		"class": "unidad"
  	}
  	...
  	{
  		"path": "/unidades/11",
  		"code": "UF1306",
  		"title": "Pruebas de funcionalidades",
  		"hint": "Pruebas de funcionalidades y optimización de páginas web"
  	}

  ]
  ```

## REQUISITOS
### Sistema operativo y sistema de archivos
### Servicios y conexiones
### Paquetes, extensiones y librerías

## INSTALACIÓN
### Despliegue
#### Aplicación
#### Datos
### Configuración
#### Virtual hosts y dominios
#### Acceso a datos

## VERIFICACIÓN
### Requerimientos
### Funcionalidades