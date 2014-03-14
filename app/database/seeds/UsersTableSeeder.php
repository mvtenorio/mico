<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$users = array(
			'name' => 'Admin',
			'email' => 'admin',
			'password' => Hash::make('123')
		);

		DB::table('users')->insert($users);
	}

}
