<?php namespace Mico\Services;

use Auth;
use Mico\Models\Tag;
use Mico\Repositories\Interfaces\TagRepositoryInterface;
use Mico\Services\Validators\TagValidator;
use Mico\Services\Validators\ValidationException;

class TagServices
{	
	protected $tagRepo;
	protected $validator;

	public function __construct(TagRepositoryInterface $tagRepo, TagValidator $validator)
	{
		$this->tagRepo = $tagRepo;
		$this->validator = $validator;
	}

	public function getAll()
	{
		return $this->tagRepo->getAll();
	}

	public function getTagById($id)
	{
		return $this->tagRepo->getTagById($id);
	}

	public function store(Array $input)
	{
		$validator = $this->validator;

		if ($validator->isValid($input))
		{
			$tag = new Tag;
			$tag->name = $input['name'];
			$tag->user_id = Auth::user()->id;

			return $this->tagRepo->save($tag);
		}
		else 
		{
			throw new ValidationException($validator->getErrors());
		}
	}

	public function destroy($id)
	{
		$this->tagRepo->destroy($id);
	}
}