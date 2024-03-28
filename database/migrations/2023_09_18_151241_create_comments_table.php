<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
        $table->increments('id');
        $table->integer('user_id');
        $table->integer('customer_id');
        $table->text('comments');
        $table->timestamps(); // This will create created_at and updated_at columns
        $table->softDeletes(); // This will create a deleted_at column
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
