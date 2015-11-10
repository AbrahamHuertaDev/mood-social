<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username');
			$table->string('name');
			$table->string('email');
			$table->string('password');
			$table->string('remember_token');
			$table->longText('about');
			$table->string('ocupation');
			$table->string('role');
			$table->string('cover');
			$table->string('profile');
			$table->string('birthday');
			$table->string('gender');
			$table->string('location');
			$table->string('namespace');
			$table->timestamps();
		});

		Schema::create('accounts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('user_id');
			$table->string('namespace');
			$table->string('cover');
			$table->longText('description');
			$table->string('info');
			$table->string('logo');
			$table->string('schedule');
			$table->string('location');
			$table->string('public');
			$table->timestamps();
		});

		Schema::create('groups', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('user_id');
			$table->string('namespace');
			$table->string('cover');
			$table->longText('description');
			$table->string('info');
			$table->string('logo');
			$table->string('location');
			$table->string('public');
			$table->timestamps();
		});

		Schema::create('members', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('user_id');
			$table->string('group_id');
			$table->string('role');
			$table->timestamps();
		});

		Schema::create('subscribers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('user_id');
			$table->string('account_id');
			$table->timestamps();
		});

		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('user_id');
			$table->string('group_id');
			$table->string('account_id');
			$table->longText('content');
			$table->longText('description');
			$table->string('link');
			$table->longText('images');
			$table->string('video');
			$table->timestamps();
		});

		Schema::create('likes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('user_id');
			$table->string('post_id');
			$table->timestamps();
		});

		Schema::create('comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('user_id');
			$table->string('post_id');
			$table->longText('message');
			$table->longText('images');
			$table->timestamps();
		});

		Schema::create('comment_likes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('user_id');
			$table->string('comment_id');
			$table->timestamps();
		});

		Schema::create('inbox', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('user_id');
			$table->string('account_id');
			$table->string('friend_id');
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
		Schema::drop('tables');
	}

}
