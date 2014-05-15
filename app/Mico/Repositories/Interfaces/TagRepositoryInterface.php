<?php namespace Mico\Repositories\Interfaces;

use Mico\Models\Tag;

interface TagRepositoryInterface extends BaseRepositoryInterface
{
	public function getTagById($id);
	public function save(Tag $tag);
	public function destroy($id);
}