<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWatersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waters', function (Blueprint $table) {
            $table->increments('id');
            //informations
            $table->string('name');
            $table->string('type');
            $table->string('function');
                        
            //location
            $table->double('longitude');
            $table->double('latitude');

            //model
            $table->string('model_url');
            
            //references
            $table->integer('cluster_id');
            
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
        Schema::dropIfExists('waters');
    }
}
