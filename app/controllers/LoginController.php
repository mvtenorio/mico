<?php

use MICO\Services\Validators\LoginValidator;
use MICO\Services\Validators\ValidationException;

class LoginController extends BaseController {

	protected $validator;

	public function	__construct(LoginValidator $validator)
	{
		$this->validator = $validator;
	}
	public function index()
	{
		return View::make('login.index');
	}

	public function login()
	{
		$attributes = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);

		$validator = $this->validator;
		$remember = Input::get('remember-me') ? true : false;

		if ($validator->isValid($attributes)) {
			if (! Auth::attempt($attributes, $remember)) {
	        	return Redirect::to('login')->withInput()->withErrors('Combinação de e-mail e senha inválida. Usuário não encontrado.');
			}
		} else {
			throw new ValidationException("Validation Failed", $validator->getErrors());
		}

		return Redirect::intended('/');
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('login');
	}

}