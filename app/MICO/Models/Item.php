<?php namespace MICO\Models;

class Item extends BaseModel {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required'
	);
}
