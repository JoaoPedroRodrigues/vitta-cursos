<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutoresTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('autores', function (Blueprint $table) {
			$table->increments('id');
			$table->string('nome');
			$table->string('sobrenome');
			$table->string('email')->unique();
			$table->string('telefone')->unique();
			$table->string('foto');
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
		//
	}
}
