<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parent_id')->default(null)->nullable();
            $table->unsignedBigInteger('user_id');
            $table->text('comment');
            $table->unsignedBigInteger('commentable_id');
            $table->string('commentable_type'); 
            $table->timestamps();

               
            $table->foreign('user_id')
            ->references('id')
            ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {


		Schema::table('comments', function (Blueprint $table) {
			if(Schema::hasColumn('comments', 'user_id')){
				 $table->dropForeign(['user_id']);
			}
		
	  });
        Schema::dropIfExists('comments');
    }
}
