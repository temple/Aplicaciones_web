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


