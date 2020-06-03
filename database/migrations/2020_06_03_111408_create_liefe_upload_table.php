<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiefeUploadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liefe_upload', function (Blueprint $table) {
            $table->id();
            $table->string('moduleshortnamequestionyear');
            $table->string('datavalue');	
            $table->string('moduleshortname');	
            $table->text('modulefullname');	
            $table->string('uniquequestionid');	
            $table->string('questionno');	
            $table->string('questiontext');	
            $table->string('surveyyear');
            //$table->string('email');
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
        Schema::dropIfExists('liefe_upload');
    }
}
