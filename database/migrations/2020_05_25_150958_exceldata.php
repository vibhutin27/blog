<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Exceldata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exceldata', function (Blueprint $table) 
        {
            $table->id();
            $table->string('email');
            $table->string('usertype');
            $table->string('ModuleShortNameQuestionYear');
            $table->text('DataValue');
            $table->string('ModuleShortName');
            $table->rememberToken();
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
        //
    }
}
