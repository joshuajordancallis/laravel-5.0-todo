<?php

class ProjectsTableSeeder extends Seeder {
	public function run() {
		DB::table('projects')->delete();

		$projects = array(
		     [
		     	'owner_id' => '1',
		     	'name' => 'learavel duuddeess',
		     	'done' => false
		     ],

		      [
		     	'owner_id' => '1',
		     	'name' => 'php duuddeeess',
		     	'done' => true
		     ],

		      [
		     	'owner_id' => '1',
		     	'name' => 'programming duuddeess',
		     	'done' => false
		     ],

		);

		DB::table('projects')->insert($projects);
	}
}

