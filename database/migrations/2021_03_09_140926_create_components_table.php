<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('components', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedBigInteger('product_id')->nullable();
			$table->unsignedBigInteger('other_component_id')->nullable();
			$table->unsignedBigInteger('quantity');
			$table->unsignedBigInteger('units_id')->nullable();
			$table->unsignedBigInteger('componentable_id');
			$table->string('componentable_type'); 
			
			
			

			$table->foreign('product_id')
			->references('id')
			->on('products');
						
			$table->foreign('other_component_id')
			->references('id')
			->on('other_components');
			
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
		Schema::table('components', function (Blueprint $table) {
			if(Schema::hasColumn('components', 'product_id')){
				 $table->dropForeign(['product_id']);
			}
			if(Schema::hasColumn('components', 'other_component_id')){
				 $table->dropForeign(['other_component_id']);
			}
			if(Schema::hasColumn('components', 'units_id')){
				 $table->dropForeign(['units_id']);
			}
			
	  });
        Schema::dropIfExists('components');
    }
}