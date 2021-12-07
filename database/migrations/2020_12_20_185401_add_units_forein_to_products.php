<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUnitsForeinToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
			$table->unsignedBigInteger('units_id')->nullable()->after('quantity');

			$table->foreign('units_id')
				 ->references('id')
				 ->on('units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
			if (Schema::hasColumn('products', 'units_id')) {
				$table->dropForeign(['units_id']);
		  }
		  });
		 
    }
}