<?php namespace MICO\Repositories\Eloquent;

use MICO\Models\User;
use MICO\Repositories\Interfaces\UserRepositoryInterface;

class EloquentUserRepository implements UserRepositoryInterface{

	public function getAll()
	{
		return User::all();
	}

	public function paginate()
	{
		return User::paginate();
	}

	public function find($id)
	{
		return User::findOrFail($id);
	}

	public function create(array $attributes)
	{
		$user = new User;
		$user->name = $attributes['name'];
		$user->email = $attributes['email'];
		$user->password = $attributes['password'];
		$user->save();
		return $user;
	}

	public function update($id, array $attributes)
	{
		$user = $this->find($id);
		return $user->update();
	}

	public function updateMyAccount($user, array $attributes)
	{
		$user->email = $attributes['email'];
		if($attributes['password']) $user->password = $attributes['password'];
		return $user->update();
	}

	public function destroy($id)
	{
		return User::destroy($id);
	}

	public function getList()
	{
		return \DB::table('users')->lists('name', 'id');
	}

	public function search($termo)
	{
		return User::where('name', 'like', "%$termo%")
			->orWhere('email', 'like', "%$termo%")->paginate();
	}

	public function getAutoCompleteList($termo)
	{
		$users = User::select('id', 'name as value')->where('name', 'like', "%$termo%")->get();

		$data = array();

		foreach ($users as $user) {
			$data[] = $user->toArray();
		}

		return $data;
	}

	public function getUser()
	{
		return \Auth::user();
	}

}