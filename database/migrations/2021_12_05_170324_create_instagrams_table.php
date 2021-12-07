<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstagramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instagrams', function (Blueprint $table) {
				$table->bigIncrements('id');
				$table->unsignedBigInteger('otherimages_id');
				$table->string('inst_src', 90);
				$table->timestamps();
				
				$table->foreign('otherimages_id')
				->references('id')
				->on('otherimages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instagrams',  function (Blueprint $table) {
			if (Schema::hasColumn('instagrams', 'otherimages_id')) {
				 $table->dropForeign(['otherimages_id']);
			}
		});
	}
}