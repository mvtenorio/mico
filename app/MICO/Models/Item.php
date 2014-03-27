<?php namespace Mico\Models;

class Item extends BaseModel
{
	protected $fillable = array('name', 'description');

	public function isObject()
	{
		return $this->type == 'OBJECT';
	}

	public function isPlace()
	{
		return $this->type == 'PLACE';
	}
}
