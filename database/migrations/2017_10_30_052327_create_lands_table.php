<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lands', function (Blueprint $table) {
            $table->increments('id');
            //informations
            $table->string('address');
            $table->string('function');
            $table->bigInteger('value');
            
            //dimension
            $table->float('length');
            $table->float('width');
            
            //location
            $table->double('longitude');
            $table->double('latitude');
            
            //model
            $table->string('model_url');
            //references
            $table->integer('owner_id')->nullable();
            $table->integer('cluster_id')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('lands');
    }
}
