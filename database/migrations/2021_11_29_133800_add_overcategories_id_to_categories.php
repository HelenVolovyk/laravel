<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOvercategoriesIdToCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
			$table->unsignedBigInteger('overcategory_id')->nullable()->after('webname');

			$table->foreign('overcategory_id')
				 ->references('id')
				 ->on('overcategories');
      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
			if (Schema::hasColumn('categories', 'overcategory_id')) {
				$table->dropForeign(['overcategory_id']);
		  }
        });
    }
}