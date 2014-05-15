<?php namespace Mico\Services;

use Mico\Services\Validators\UserValidator;
use Mico\Services\Validators\ValidationException;
use Mico\Repositories\Interfaces\UserRepositoryInterface as UserRepository;

class UsersManager {
	
	protected $repository;
	protected $validator;

	public function	__construct(UserRepository $repository, UserValidator $validator)
	{
		$this->repository = $repository;
		$this->validator = $validator;
	}

	public function paginate()
	{
		return $this->repository->paginate();
	}

	public function create(array $attributes)
	{
		$validator = $this->validator;

		if ($validator->isValid($attributes, 'create')) {
			return $this->repository->create($attributes);
		} else {
			throw new ValidationException("Validation Failed", $validator->getErrors());
		}
	}

	public function find($id)
	{
		return $this->repository->find($id);
	}

	public function update($id, array $attributes)
	{
		$validator = $this->validator;

		if ($validator->isValid($attributes, 'update')) {
			return $this->repository->update($id, $attributes);
		} else {
			throw new ValidationException("Validation Failed", $validator->getErrors());
		}
	}

	public function updateMyAccount($usuario, array $attributes)
	{
		$credentials = array(
			'email' => $usuario->email,
			'password' => $attributes['current_password']
		);

		$validator = $this->validator;

		if ($validator->isValid($attributes, 'my-account')) {

			if ( ! \Auth::validate($credentials)) {
				throw new ValidationException('', array('Senha atual incorreta'));
			}

			return $this->repository->updateMyAccount($usuario, $attributes);

		} else {
			throw new ValidationException("Validation Failed", $validator->getErrors());
		}
	}

	public function destroy($id)
	{
		return $this->repository->destroy($id);
	}

	public function search($termo)
	{
		return $this->repository->search($termo);
	}

	public function getAutoCompleteList($termo)
	{
		return $this->repository->getAutoCompleteList($termo);
	}

	public function getUser()
	{
		return $this->repository->getUser();
	}

}