<?php namespace Mico\Repositories\Interfaces;

interface UserRepositoryInterface {
	public function getAll();
	public function paginate();
	public function find($id);
	public function create(array $attributes);
	public function update($id, array $attributes);
	public function updateMyAccount($usuario, array $attributes);
	public function destroy($id);
	public function getList();
	public function search($termo);
	public function getAutoCompleteList($termo);
	public function getUser();
}