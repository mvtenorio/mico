<?php namespace Mico\Repositories\Eloquent;

use Auth;
use Mico\Models\Tag;
use Mico\Repositories\Interfaces\TagRepositoryInterface;

class EloquentTagRepository implements TagRepositoryInterface
{
	public function getAll()
	{
		return Tag::all();
	}

	public function getTagById($id)
	{
		return Tag::find($id);
	}

	public function save(Tag $tag)
	{
		$tag->save();
		return $tag;
	}

	public function destroy($id)
	{
		return Tag::destroy($id);
	}
}