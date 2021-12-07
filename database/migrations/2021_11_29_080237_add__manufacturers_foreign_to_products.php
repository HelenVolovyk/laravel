<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddManufacturersForeignToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
			$table->unsignedBigInteger('manufacturer_id')->nullable()->after('webname');

			$table->foreign('manufacturer_id')
				 ->references('id')
				 ->on('manufacturers');
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
			if (Schema::hasColumn('products', 'manufacturer_id')) {
				$table->dropForeign(['manufacturer_id']);
		  }
        });
    }
}