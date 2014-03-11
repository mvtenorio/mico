<?php namespace MICO\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class BaseModel extends Eloquent {

	public static function boot()
	{
		parent::boot();
	}
}