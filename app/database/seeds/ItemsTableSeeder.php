<?php

class ItemsTableSeeder extends Seeder {
	public function run() {
		DB::table('items')->delete();

		$items = array(
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

		DB::table('items')->insert($items);
	}
}

