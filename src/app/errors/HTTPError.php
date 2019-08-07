<?php

namespace errors;

use errors\HTTPErrorInterface;

/**
 * Error HTTP
 * Clase que sirve de base para cualquier tipo de error
 * Su constante code por defecto es 500
 */
abstract class HTTPError
	extends \Exception
	implements HTTPErrorInterface,
		\Throwable

{
	const CODE = 500;

	//TODO: 
	//es: Implementar el código restante para cumplir con la interfaz
	//en: Implement the necessary code to accomplish interface

	/**
	 * Array que almacena los objetos HTTPError según su código
	 * @var array
	 */
	static private $instances = array();
	// se trata de una propiedad privada porque no queremos 
	// que la gestión de esta propiedad pueda cambiar en ninguna clase 
	// descendiente

	/**
	 * Gets the only instance of this kind what will exist
	 * @return HTTPError
	 */
	public static function getInstance()
	{
		// Si no tenemos guardado nada en la posición 
		// marcada por la constante CODE
		if (!isset(self::$instances[self::CODE])) 
			self::$instances[self::CODE] = new static();
			// creamos un objeto de la clase que toque y lo guardamos
			// dentro del array de objetos error, en la posición de su número

		return self::$instances[self::CODE];
		// Por defecto se retorna lo que haya guardado dentro del array
		// de objetos en la posición corresondiente a self::CODE
	}

	/**
	 * Como solo vamos a tener un único objeto por cada error
	 * el constructor será protected
	 */
	protected function __construct(){
	}

}