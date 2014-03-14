<?php namespace MICO\Services\Validators;
 
class UserValidator extends Validator {
 
	public static $rules = array(
		'save' => array(),
		'create' => array(
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required|confirmed|min:6'
		),
		'update' => array(),
		'my-account' => array(
			'email' => 'required|email',
			'password' => 'confirmed|min:6',
			'current_password' => 'required'
		)
	);

	public static $customMessages = array(
		'current_password.required' => 'O campo senha atual deve ser preenchido',
		'password.required'	=> 'O campo senha deve ser preenchido',
		'password.confirmed'	=> 'O campo confirmar senha não coincide',
		'password.min'	=> ' O campo senha deve conter pelo menos 6 caracteres',
		'name.required'	=> ' O campo nome deve ser preenchido'
	);
}