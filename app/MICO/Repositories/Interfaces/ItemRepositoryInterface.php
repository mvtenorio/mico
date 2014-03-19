<?php namespace Mico\Repositories\Interfaces;

use Mico\Models\Item;

interface ItemRepositoryInterface extends BaseRepositoryInterface
{
	public function store(Item $item);
	public function update();
	public function destroy();
}