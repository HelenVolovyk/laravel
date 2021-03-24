<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWebnameToOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_product', function (Blueprint $table) {
			$table->string('product_webname')->after('id');

			$table->foreign('product_webname')
			->references('webname')
			->on('products')
			->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_product', function (Blueprint $table) {
			if(Schema::hasColumn('order_product', 'product_webname')){
				$table->dropForeign(['product_webname']);
		  }
		  });
		  Schema::dropIfExists('order_product');
    }
}