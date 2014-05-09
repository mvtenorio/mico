<?php

use Mico\Services\ItemServices;
use Mico\Services\Validators\ValidationException;

class ItemsController extends BaseController
{
	protected $itemServices;

	public function __construct(ItemServices $itemServices)
	{
		$this->itemServices = $itemServices;
	}

	public function index()
	{
		$items = $this->itemServices->getRootItems();

		return View::make('items.index', compact('items'));
	}

	public function store()
	{
		$input = Input::all();

		try
		{
			$item = $this->itemServices->store($input);
			return Redirect::back();
		}
		catch (ValidationException $e)
		{
			dd($e->getErrors());
		}
	}

	public function show($id)
	{
		$item = $this->itemServices->getItemById($id);
		$items = $this->itemServices->getChildren($id);

		return View::make('items.show', compact('item' ,'items'));
	}

	public function edit($id)
	{
		$item = $this->itemServices->getItemById($id);

		if (is_null($item))
		{
			return Redirect::route('items.index');
		}

		return View::make('items.edit', compact('item'));
	}

	public function update($id)
	{
		$input = array_except(Input::all(), '_method');

		try
		{
			$item = $this->itemServices->update($id, $input);
			return Redirect::route('items.show', $item->id);
		}
		catch (ValidationException $e)
		{
			return Redirect::route('items.edit', $id)
				->withInput()
				->withErrors($e->getErrors());
		}
	}

	public function destroy($id)
	{
		$this->itemServices->destroy($id);

		return Redirect::back();
	}

}
