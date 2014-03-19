<?php namespace Mico\Services;

use Auth;
use Mico\Models\Item;
use Mico\Repositories\Interfaces\ItemRepositoryInterface;
use Mico\Services\Validators\ItemValidator;
use Mico\Services\Validators\ValidationException;

class ItemServices
{	
	protected $itemRepo;
	protected $validator;

	public function __construct(ItemRepositoryInterface $itemRepo, ItemValidator $validator)
	{
		$this->itemRepo = $itemRepo;
		$this->validator = $validator;
	}

	public function getAll()
	{
		return $this->itemRepo->getAll();
	}

	public function getItemById($id)
	{
		return $this->itemRepo->getItemById($id);
	}

	public function store(Array $input, $type)
	{
		$validator = $this->validator;

		if ($validator->isValid($input))
		{
			$item = new Item;
			$item->name = $input['name'];
			$item->description = $input['description'];
			$item->user_id = Auth::user()->id;
			$item->type = $type;

			return $this->itemRepo->save($item);
		}
		else 
		{
			throw new ValidationException($validator->getErrors());
		}
	}

	public function update($id, Array $input)
	{
		$validator = $this->validator;

		if ($validator->isValid($input))
		{
			$item = $this->getItemById($id);
			$item->name = $input['name'];
			$item->description = $input['description'];

			return $this->itemRepo->save($item);
		}
		else 
		{
			throw new ValidationException($validator->getErrors());
		}
	}
}