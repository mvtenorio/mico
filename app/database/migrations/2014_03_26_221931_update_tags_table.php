<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tags', function($table)
		{
			$table->integer('user_id')->unsigned();
		});

		Schema::table('tags', function($table)
		{
			$table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tags', function($table)
		{
			$table->dropForeign('tags_user_id_foreign');
		});

		Schema::table('tags', function($table)
		{
			$table->dropColumn('user_id');
		});
	}

}
