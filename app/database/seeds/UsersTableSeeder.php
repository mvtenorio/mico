<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$users = array(
			'name' => 'Admin',
			'email' => 'admin@mico.dev',
			'password' => Hash::make('mico4405')
		);

		DB::table('users')->insert($users);
	}

}
