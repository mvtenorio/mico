<?php namespace MICO\Services\Validators;

abstract class Validator {
 
	protected $errors;
	protected $messages;

	public function __construct()
	{
		$this->messages = isset(static::$customMessages)
			? static::$customMessages
			: array();
	}

	public function isValid($input, $tipo = "")
	{
		$rules = static::$rules['save'];

		if($tipo != "") $rules = array_merge(static::$rules['save'], static::$rules[$tipo]);

		return $this->validate($rules, $input);
	}

    public function isValidForCreation($input)
    {
    	$rules = array_merge(static::$rules['save'], static::$rules['create']);
    	return $this->validate($rules, $input);
    }

    public function isValidForUpdate($input)
    {
    	$rules = array_merge(static::$rules['save'], static::$rules['update']);
    	return $this->validate($rules, $input);
    }

    private function validate($rules, $input)
	{
		$validation = \Validator::make($input, $rules, $this->messages);

		if ($validation->passes()) return true;
	 
		$this->errors = $validation->messages();

		return false;
	}

	public function getErrors()
	{
		return $this->errors;
	}
}