<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('parent_id')->unsigned()->nullable();
			$table->string('name');
			$table->text('description');
			$table->enum('type', array('PLACE', 'OBJECT'));
			$table->timestamps();
		});

		Schema::table('items', function($table)
		{
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('parent_id')->references('id')->on('items');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('items');
	}

}
