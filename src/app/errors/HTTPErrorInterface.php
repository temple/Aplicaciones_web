<?php

namespace errors;

/**
 * Error HTTP
 */
interface HTTPErrorInterface{

	/**
	 * Guarda los detalles del error ocurrido
	 * @param \Throwable $error El error PHP que haya ocurrido
	 */
	public function setDetails(\Throwable $error): HTTPErrorInterface;
}