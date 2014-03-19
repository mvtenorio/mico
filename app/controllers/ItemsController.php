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
		$items = $this->itemServices->getAll();

		return View::make('items.index', compact('items'));
	}

	public function create()
	{
		return View::make('items.create');
	}

	public function store()
	{
		$input = Input::all();

		try
		{
			$this->itemServices->store($input, 'OBJECT');
			return Redirect::route('items.index');
		}
		catch (ValidationException $e)
		{
			return Redirect::route('items.create')
				->withInput()
				->withErrors($e->getErrors());
		}
	}

	// public function show($id)
	// {
	// 	$itemServices = $this->item->findOrFail($id);

	// 	return View::make('items.show', compact('item'));
	// }

	// public function edit($id)
	// {
	// 	$itemServices = $this->item->find($id);

	// 	if (is_null($itemServices))
	// 	{
	// 		return Redirect::route('items.index');
	// 	}

	// 	return View::make('items.edit', compact('item'));
	// }

	// public function update($id)
	// {
	// 	$input = array_except(Input::all(), '_method');
	// 	$validation = Validator::make($input, Item::$rules);

	// 	if ($validation->passes())
	// 	{
	// 		$itemServices = $this->item->find($id);
	// 		$itemServices->update($input);

	// 		return Redirect::route('items.show', $id);
	// 	}

	// 	return Redirect::route('items.edit', $id)
	// 		->withInput()
	// 		->withErrors($validation)
	// 		->with('message', 'Item salvo com sucesso.');
	// }

	// public function destroy($id)
	// {
	// 	$this->item->find($id)->delete();

	// 	return Redirect::route('items.index');
	// }

}
