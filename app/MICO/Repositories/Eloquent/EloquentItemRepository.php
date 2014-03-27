<?php namespace Mico\Repositories\Eloquent;

use Auth;
use Mico\Models\Item;
use Mico\Repositories\Interfaces\ItemRepositoryInterface;

class EloquentItemRepository implements ItemRepositoryInterface
{
	public function getAll()
	{
		return Item::orderBy('type')->get();
	}

	public function getItemById($id)
	{
		return Item::find($id);
	}

	public function save(Item $item)
	{
		$item->save();
		return $item;
	}

	public function destroy($id)
	{
		return Item::destroy($id);
	}
}