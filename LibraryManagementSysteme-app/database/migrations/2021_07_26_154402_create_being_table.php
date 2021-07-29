<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('being', function (Blueprint $table) {
            $table->unsignedBigInteger('library_id');
            $table->unsignedBigInteger('book_id');

            $table->foreign('library_id')->references('id')->on('library')->onDelete('cascade');

            $table->foreign('book_id')->references('id')->on('book')->onDelete('cascade');
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
        Schema::dropIfExists('being');
    }
}
