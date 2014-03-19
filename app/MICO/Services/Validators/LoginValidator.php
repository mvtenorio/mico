<?php namespace Mico\Services\Validators;
 
class LoginValidator extends Validator {
 
	public static $rules = array(
		'save' => array(
			'email' => 'required',
			'password' => 'required'
		),
		'create' => array(),
		'update' => array()
	);

	public static $customMessages = array(
		'email.required' => 'O campo e-mail deve ser preenchido.',
		'password.required' => 'O campo senha deve ser preenchido.'
	);
}