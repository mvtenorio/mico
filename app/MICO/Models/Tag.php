<?php namespace Mico\Models;

class Tag extends BaseModel {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required'
	);
}
