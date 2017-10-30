<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClustersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clusters', function (Blueprint $table) {
            $table->increments('id');
           
            //informations
            $table->string('name');
            $table->string('address');
            $table->string('type');
            
            //location
            $table->double('longitude');
            $table->double('latitude');

            //model
            $table->string('model_url');
            $table->text('description')->nullable();
            //reference
            $table->integer('owner_id')->nullable();

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
        Schema::dropIfExists('clusters');
    }
}
