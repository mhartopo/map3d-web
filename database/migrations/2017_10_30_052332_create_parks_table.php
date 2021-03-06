<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parks', function (Blueprint $table) {
            $table->increments('id');
            //informations
            $table->string('name');
            $table->string('address');
            
            //dimension
            $table->float('length');
            $table->float('width');
            
            //location
            $table->double('longitude');
            $table->double('latitude');

            //model
            $table->string('model_url');

            //references
            $table->integer('owner_id');
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
        Schema::dropIfExists('parks');
    }
}
