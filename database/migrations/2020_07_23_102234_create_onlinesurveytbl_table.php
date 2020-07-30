<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlinesurveytblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onlinesurveytbl', function (Blueprint $table) {
            $table->id();
            $table->string('ModuleName');
            $table->string('PrimaryKey');
            $table->string('Col7');
            $table->string('Col8');
            $table->string('Col9');
            $table->string('Unit');
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
        Schema::dropIfExists('onlinesurveytbl');
    }
}
