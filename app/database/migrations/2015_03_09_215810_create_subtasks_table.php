<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubtasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subtasks', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('project_id');
			$table->string('name', 150);
			$table->string('description', 500);
			$table->timestamp('completion_date');
			$table->boolean('complete')->default(false);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('subtasks');
	}

}
