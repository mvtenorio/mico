<?php namespace Mico\Services\Validators;
 
class TagValidator extends Validator {
 
	public static $rules = array(
		'save' => array(
			'name' => 'required'
		),
		'create' => array(),
		'update' => array()
	);

	public static $customMessages = array();
}