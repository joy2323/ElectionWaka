<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManifestoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manifesto', function (Blueprint $table) {
            $table->increments('id');
            $table->text('manifesto');
            $table->integer('candidate_id')->unsigned();
            $table->integer('category_id')->unsigned();


            $table->foreign('candidate_id')->references('id')
            ->on('candidates')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            
            $table->foreign('category_id')->references('id')
            ->on('category')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('manifesto');
    }
}
