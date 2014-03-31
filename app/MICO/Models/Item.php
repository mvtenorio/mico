<?php namespace Mico\Models;

class Item extends BaseModel
{
	protected $fillable = array('name', 'description');

	public function parent()
	{
		return $this->belongsTo('Mico\Models\Item', 'parent_id');
	}

	public function isObject()
	{
		return $this->type == 'OBJECT';
	}

	public function isPlace()
	{
		return $this->type == 'PLACE';
	}

	public function hasParent()
	{
		return $this->parent_id != null;
	}
}
