<?php namespace Mico\Repositories\Eloquent;

use Auth;
use Mico\Models\Item;
use Mico\Repositories\Interfaces\ItemRepositoryInterface;

class EloquentItemRepository implements ItemRepositoryInterface
{
	public function getAll()
	{
		return Item::all();
	}

	public function store(Item $item)
	{
		$item->save();
		return $item;
	}

	public function update()
	{
	}

	public function destroy()
	{
	}
}