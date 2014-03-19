<?php

use Mico\Models\Tag;

class TagsController extends BaseController {

	/**
	 * Tag Repository
	 *
	 * @var Tag
	 */
	protected $tag;

	public function __construct(Tag $tag)
	{
		$this->tag = $tag;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tags = $this->tag->all();

		return View::make('tags.index', compact('tags'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// $input = Input::all();
		// $validation = Validator::make($input, Tag::$rules);

		// if ($validation->passes())
		// {
		// 	$this->tag->create($input);

		// 	return Redirect::route('tags.index');
		// }

		// return Redirect::route('tags.create')
		// 	->withInput()
		// 	->withErrors($validation)
		// 	->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->tag->find($id)->delete();

		return Redirect::route('tags.index');
	}

}
