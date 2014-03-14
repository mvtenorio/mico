<?php namespace MICO\Repositories;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
	public function register()
	{

		$this->app->bind(
			'MICO\Repositories\Interfaces\UserRepositoryInterface',
			'MICO\Repositories\Eloquent\EloquentUserRepository'
		);

	}
}