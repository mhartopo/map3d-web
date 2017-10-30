<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('address');
            $table->integer('value');
            $table->string('function');

            //location
            $table->double('longitude');
            $table->double('latitude');

            //dimension
            $table->float('length');
            $table->float('width');
            $table->float('height');

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
        Schema::dropIfExists('buildings');
    }
}
