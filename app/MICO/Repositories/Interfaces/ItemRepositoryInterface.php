<?php namespace Mico\Repositories\Interfaces;

use Mico\Models\Item;

interface ItemRepositoryInterface extends BaseRepositoryInterface
{
	public function getItemById($id);
	public function save(Item $item);
	public function destroy();
}