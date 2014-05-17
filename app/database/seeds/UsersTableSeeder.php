<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$user = new Mico\Models\User;
		$user->name = 'Admin';
		$user->email = 'admin@mico.dev';
		$user->password = Hash::make('mico4405');

		$user->save();
	}

}
