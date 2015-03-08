<?php

class UsersTableSeeder extends Seeder {
	public function run() {
		DB::table('users')->delete();

		$users = array(
		    [
		       'name' => 'Josh',
		       'password' => Hash::make('Josh'),
		       'email' => 'email@email.com'
		   	],
		    [
		       'name' => 'Emily',
		       'password' => Hash::make('Emily'),
		       'email' => 'email@email.com'
		   	],
		    [
		       'name' => 'admin',
		       'password' => Hash::make('password'),
		       'email' => 'admin@example.com'
		   	]

		);

		DB::table('users')->insert($users);
	}
}
