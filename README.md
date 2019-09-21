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
Para el correcto funcionamiento de la aplicación se necesitará disponer de un sistema operativo de tipo servidor como: Windows Server (en versiones 2016 o posterior), Ubuntu Server (en versiones 16.04 o posterior), Debian (en versiones 9 o posterior), Red Had Enterprise Linux (en versiones 6 o posterior), CentOS (en versiones 6 o posterior), Solaris (en versiones 11.3 o posterior) o Fedora (en versiones 25 o posterior).  
  
El sistema operativo deberá tener usuarios, entre los que se requerirá disponer de uno para el que puedan realizarse operaciones administrativas que permitan la instalación de [software de terceros (_3rd party software_)](https://techterms.com/definition/thirdparty). También deberá disponer de un sistema de archivos (detallado a continuación), de [interfaces de red](https://www.youtube.com/watch?v=PYTG7bvpvRI) y, [de una interfaz de consola o interfaz de línea de comandos](https://es.wikipedia.org/wiki/Interfaz_de_l%C3%ADnea_de_comandos).

El sistema de archivos debe permitir el uso de _sockets_ y el almacenamiento de archivos. Se necesitará usar un sistema de archivos _jerárquico_, preferiblemente que cumpla con [POSIX](https://pubs.opengroup.org/onlinepubs/9699919799/), en el que se dispongan del directorio `/var/www`, que será propuesto para el despliegue de la aplicación.

Se necesitará que los servicios web y de applicación puedan acceder en modo de lectura a la carpeta de aplicación que allí se creará tanto para poder servir respuestas a las peticiones _HTTP_ entregando los archivos que se soliciten, como también para poder abrir y leer el código de la aplicación.  

> **Nota: La aplicación ha sido probada en el sistema operativo CentOS 7 utilizando un sistema de archivos local, compatible con POSIX**.  
  
### Servicios y conexiones
Se necesitará disponer de un servidor web, ya sea Apache (versiones 2.4 o posterior) o Nginx (versión 1.11 o posterior).  
  
En el caso que se desee utilizar Nginx, se aconseja proveerlo en el sistema operativo siguiendo las instrucciones que se encuentran [en la documentación oficial que hay en nginx.com](https://www.nginx.com/resources/wiki/start/topics/tutorials/install/).  
  
El servidor web deberá escuchar en el puerto [_TCP_](https://es.ccm.net/contents/281-protocolo-tcp) [`80`](http://www.steves-internet-guide.com/tcpip-ports-sockets/), preferiblemente para todas las interfaces de red, e indispensablemente para aquella que pueda ser accedida desde el dispositivo cliente.  
  
También se necesitará disponer de un servidor de aplicaciones para la interpretación y ejecución de aplicaciones implementadas en _PHP_, con lo que se aconseja seguir las indicaciones para [instalación y configuración de la web oficial de PHP](https://www.php.net/manual/es/install.php).  
  
En el caso de nuestra aplicación se aconseja utilizar el demonio de aplicaciones [PHP-FPM](https://blog.guillen.io/2017/03/15/apache-instalar-y-configurar-php-fpm-fastcgi-process-manager/).  
Alternativamente pueden utilizarse [el módulo Fast-CGI](https://fastcgi-archives.github.io/) (disponible para una amplia gama de servidores web), que no debe confundirse con el módulo _fcgid_ ([disponible para Apache](https://httpd.apache.org/mod_fcgid/)).  

**Se desaconseja** en este caso utilizar [el módulo _PHP_ para Apache](https://cwiki.apache.org/confluence/display/HTTPD/PHP) o el [módulo _PHP_ para Nginx](https://medium.com/@getpagespeed/how-to-install-ngx-php7-nginx-module-in-centos-redhat-7-b9e0dacc67d2), o [equivalente](https://www.php.net/manual/es/install.php). 
  
Finalmente se necesitará disponer de un servidor de bases de datos para la gestión de la persistencia de los contenidos. En este caso la aplicación está pensada para utilizar servidores de bases de datos tipo MySQL, por lo que se aconseja elegir entre MySQL Community Server (versión 5.7 o posterior) y MariaDB (versión 10.11 o posterior).  
Para su instalación, se aconseja seguir las instrucciones que se indican en la [web oficial de MySQL](https://dev.mysql.com/doc/refman/8.0/en/installing.html) o en la [web oficial de MariaDB](https://mariadb.com/kb/en/library/getting-installing-and-upgrading-mariadb/), según la elección.

> **Nota: La aplicación ha sido probada utilizando el servidor web Nginx 1.17 para CentOS 7 del repositorio de https://nginx.org, el servidor de aplicaciones PHP-FPM 7.2 del repositorio php 7.2 de http://rpms.remirepo.net, que han sido interconectados mediante el [módulo Fast-CGI de Nginx](http://nginx.org/en/docs/http/ngx_http_fastcgi_module.html)**
  
### Paquetes, extensiones y librerías
Para que la aplicación pueda ejecutarse será necesario que se disponga del software _composer_, que debe adquirirse utilizando las instrucciones disponibles en [getcomposer.org/download](https://getcomposer.org/download/).  

Por otro lado, se necesitará instalar el software _git_ para poder realizar el despliegue de la aplicación.  
Para ello se sugiere realizar la instalación [atendiendo a la opción que corresponda con el Sistema Operativo elegido](https://git-scm.com/downloads).

Además, se hará altamente recomendable disponer del [software cliente de MySQL](https://dev.mysql.com/doc/refman/8.0/en/mysql.html) para intérprete de comandos, en tanto que las instrucciones de _despliegue de datos_ (ver más adelante) se facilitarán empleando este software.  
Para una correcta instalación de este software se aconseja seguir las [instrucciónes de la web oficial](https://dev.mysql.com/doc/refman/8.0/en/installing.html).
  
En cuanto a __PHP__ se requerirán las extensiones:
- [yaml](https://www.php.net/manual/es/book.yaml.php) : para la interpretación de textos en notación _YAML_
- [json](https://www.php.net/manual/es/book.json.php) : para la interpretación de textos en notación _JSON_
- [pdo](https://www.php.net/manual/es/book.pdo.php) : para la gestión abstracta de conexiones a servicios de bases de datos y al acceso a datos
- [pdo_mysql](https://www.php.net/manual/es/ref.pdo-mysql.php) : para la integración de _mysqlnd_ en _pdo_
- [mysqlnd](https://www.php.net/manual/es/book.mysqlnd.php) : para la conexión al servicio de base de datos
- [url](https://www.php.net/manual/es/book.url.php) : para el tratamiento de las URLs peticionadas en las solicitudes HTTP

Para sostener una correcta evolución futura de la aplicación, se aconseja instalar igualmente las [extensiones de _PHP_](https://www.php.net/manual/es/funcref.php):
- [opcache](https://www.php.net/manual/es/book.opcache.php): para la generación de una cache con los códigos de aplicación procesados como opcode, que es un tipo de bytecode
- [dom](https://www.php.net/manual/es/book.dom.php), [xmlreader](https://www.php.net/manual/es/book.xmlreader.php) y [xml](https://www.php.net/manual/es/intro.xml.php) : para la manipulación interna de archivos escritos en XML o HTML
- [mbstring](https://www.php.net/manual/es/book.mbstring.php) e [iconv](https://www.php.net/manual/es/book.iconv.php) : para una mejor gestión de la internacionalización (i18n) de los textos
- [bcmath](https://www.php.net/manual/es/book.bc.php) : para una mejor manipulación y operación con de valores _float_
- [curl](https://www.php.net/manual/es/book.curl.php) : para la connexión vía HTTP con servicios externos
- [gd](https://www.php.net/manual/es/book.image.php) : para la manipulación de imágenes y producción de códigos QR
- [tokenizer](https://www.php.net/manual/es/book.tokenizer.php) : para la generación de códigos aleatorios con los que validar accesos y acciones

Finalmente, y en relación a las extensiones de _PHP_, éstas funcionarán correctamente en Sistemas Operativos que dispongan de las librerías:
- [libyaml](https://www.php.net/manual/es/yaml.requirements.php) : para la extensión yaml

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