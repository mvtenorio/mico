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

	public function getItemById($id)
	{
		return Item::find($id);
	}

	public function getRootItems()
	{
		return Item::where('parent_id', '=', null)->orderBy('type')->get();
	}

	public function getChildren($id)
	{
		return Item::where('parent_id', '=', $id)->orderBy('type')->get();
	}

	public function getMostRecentItems()
	{
		return Item::orderBy('updated_at', 'desc')->take(3)->get();
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