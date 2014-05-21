<?php

use Mico\Services\TagServices;
use Mico\Services\Validators\ValidationException;

class TagsController extends BaseController
{
	protected $tagServices;

	public function __construct(TagServices $tagServices)
	{
		$this->tagServices = $tagServices;
	}

	public function index()
	{
		$tags = $this->tagServices->getAll();
		$qtdUl = round($tags->count() / 3);

		return View::make('tags.index', compact('tags', 'qtdUl'));
	}

	public function store()
	{
		$input = Input::all();

		try
		{
			$this->tagServices->store($input);
			return Redirect::route('tags.index');
		}
		catch (ValidationException $e)
		{
			return Redirect::route('tags.create')
				->withInput()
				->withErrors($e->getErrors());
		}
	}

	public function destroy($id)
	{
		$this->tagServices->destroy($id);

		return Redirect::route('tags.index');
	}

}
