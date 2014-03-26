<?php

use Mico\Services\ItemServices;
use Mico\Services\Validators\ValidationException;

class HomeController extends BaseController
{
	protected $itemServices;

	public function __construct(ItemServices $itemServices)
	{
		$this->itemServices = $itemServices;
	}

	public function index()
	{
		$items = $this->itemServices->getAll();

		return View::make('home.index', compact('items'));
	}
}