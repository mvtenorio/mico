<?php namespace MICO\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use MICO\Observers\BaseObserver;

class BaseModel extends Eloquent {

	public static function boot()
	{
		parent::boot();
		static::observe(new BaseObserver);
	}
}