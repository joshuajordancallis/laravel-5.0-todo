<?php

class ProjectsTableSeeder extends Seeder {
	public function run() {
		DB::table('projects')->delete();

		$projects = array(
			[
				'owner_id' => '3',
				'name' => 'Finish AC',
				'completion_date' => strtotime(date('Y-m-d')),
				'complete' => false
			],
			[
				'owner_id' => '1',
				'name' => 'Finish This Project',
				'completion_date' => strtotime(date('Y-m-d')),
				'complete' => false
			],
			[
				'owner_id' => '1',
				'name' => 'Finish This Project',
				'completion_date' => strtotime(date('Y-m-d')),
				'complete' => false
			],
			[
				'owner_id' => '1',
				'name' => 'Finish This Project',
				'completion_date' => strtotime(date('Y-m-d')),
				'complete' => false
			],
		);

		DB::table('projects')->insert($projects);
	}
}

