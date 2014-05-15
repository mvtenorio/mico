<?php namespace Mico\Services\Validators;

use Exception;

/**
* Exceção de Validação
* Estende a classe Exception para implementar o método getErrors()
*/
class ValidationException extends Exception
{
	protected $errors;

	public function __construct($errors, $message = 'Validation Failed', $code = 0, Exception $previous = null)
	{
		$this->errors = $errors;

		parent::__construct($message, $code, $previous);
	}

	public function getErrors()
	{
		return $this->errors;
	}
}