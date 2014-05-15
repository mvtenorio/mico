<?php namespace Mico\Repositories;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
	public function register()
	{

		$this->app->bind(
			'Mico\Repositories\Interfaces\UserRepositoryInterface',
			'Mico\Repositories\Eloquent\EloquentUserRepository'
		);

		$this->app->bind(
			'Mico\Repositories\Interfaces\ItemRepositoryInterface',
			'Mico\Repositories\Eloquent\EloquentItemRepository'
		);

		$this->app->bind(
			'Mico\Repositories\Interfaces\TagRepositoryInterface',
			'Mico\Repositories\Eloquent\EloquentTagRepository'
		);

	}
}