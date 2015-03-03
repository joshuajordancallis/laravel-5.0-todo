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
		   		]

		);

		DB::table('users')->insert($users);
	}
}
