<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->string('image', 45);
            $table->string('description', 45);
            $table->float('price', 45);
            $table->unsignedBigInteger('auther_id');
            $table->unsignedBigInteger('category_id');
            

            $table->foreign('auther_id')->references('id')->on('auther')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
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
        Schema::dropIfExists('book');
    }
}
