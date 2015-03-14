<?php

class SubTasksTableSeeder extends Seeder {
	public function run() {
		DB::table('subtasks')->delete();

		$subtasks = array(
			[
				'project_id' => '1',
				'name' => 'Create edit pages',
				'description' => 'empty',
				'completion_date' => strtotime(date('Y-m-d')),
				'complete' => false
			],
			[
				'project_id' => '1',
				'name' => 'Make edit pages function',
				'description' => 'empty',
				'completion_date' => strtotime(date('Y-m-d')),
				'complete' => false
			],
			[
				'project_id' => '1',
				'name' => 'Push to repo',
				'description' => 'empty',
				'completion_date' => strtotime(date('Y-m-d')),
				'complete' => true
			],
			[
				'project_id' => '1',
				'name' => 'Categories',
				'description' => 'empty',
				'completion_date' => strtotime(date('Y-m-d')),
				'complete' => false
			],
			[
				'project_id' => '1',
				'name' => 'categories suggestions',
				'description' => 'empty',
				'completion_date' => strtotime(date('Y-m-d')),
				'complete' => true
			],
			[
				'project_id' => '1',
				'name' => 'Make categories pages function',
				'description' => 'empty',
				'completion_date' => strtotime(date('Y-m-d')),
				'complete' => true
			],
			[
				'project_id' => '1',
				'name' => 'Push to repo',
				'description' => 'empty',
				'completion_date' => strtotime(date('Y-m-d')),
				'complete' => true
			],
			[
				'project_id' => '1',
				'name' => 'Content Pages',
				'description' => 'empty',
				'completion_date' => strtotime(date('Y-m-d')),
				'complete' => true
			],
			[
				'project_id' => '1',
				'name' => 'Edit content pages using wysywig',
				'description' => 'empty',
				'completion_date' => strtotime(date('Y-m-d')),
				'complete' => false
			],
			[
				'project_id' => '1',
				'name' => 'Repo Push time',
				'description' => 'empty',
				'completion_date' => strtotime(date('Y-m-d')),
				'complete' => false
			],
			[
				'project_id' => '1',
				'name' => 'Stats',
				'description' => 'empty',
				'completion_date' => strtotime(date('Y-m-d')),
				'complete' => true
			],
			[
				'project_id' => '1',
				'name' => 'Users',
				'description' => 'empty',
				'completion_date' => strtotime(date('Y-m-d')),
				'complete' => false
			],
			[
				'project_id' => '3',
				'name' => 'Make edit pages function',
				'description' => 'empty',
				'completion_date' => strtotime(date('Y-m-d')),
				'complete' => false
			],
			[
				'project_id' => '3',
				'name' => 'Push to repo',
				'description' => 'empty',
				'completion_date' => strtotime(date('Y-m-d')),
				'complete' => false
			],
			[
				'project_id' => '3',
				'name' => 'Categories',
				'description' => 'empty',
				'completion_date' => strtotime(date('Y-m-d')),
				'complete' => false
			],
		);

		DB::table('subtasks')->insert($subtasks);
	}
}

