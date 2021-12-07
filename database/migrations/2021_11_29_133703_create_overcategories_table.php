<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOvercategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('overcategories', function (Blueprint $table){ 
		$table->bigIncrements('id');
		$table->string('title', 90)->unique();
		$table->string('title_uk', 90)->unique();
		$table->string('webname', 90)->nullable();
		
	 });
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::dropIfExists('overcategories');
    }
}