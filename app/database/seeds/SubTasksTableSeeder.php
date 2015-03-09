<?php

class SubTasksTableSeeder extends Seeder {
	public function run() {
		DB::table('subtasks')->delete();

		$subtasks = array(
			[
				'project_id' => '1',
				'name' => 'Create edit pages',
				'description' => 'empty',
				'completion_date' => date('Y-m-d'),
				'complete' => false
			],
			[
				'project_id' => '1',
				'name' => 'Make edit pages function',
				'description' => 'empty',
				'completion_date' => date('Y-m-d'),
				'complete' => false
			],
			[
				'project_id' => '1',
				'name' => 'Push to repo',
				'description' => 'empty',
				'completion_date' => date('Y-m-d'),
				'complete' => false
			],
			[
				'project_id' => '1',
				'name' => 'Categories',
				'description' => 'empty',
				'completion_date' => date('Y-m-d'),
				'complete' => false
			],
		);

		DB::table('subtasks')->insert($subtasks);
	}
}

