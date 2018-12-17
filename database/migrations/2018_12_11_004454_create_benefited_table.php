<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBenefitedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benefited', function (Blueprint $table) {
            $table->increments('id');
            $table->char('card', 8)->unique();
            $table->string('lastname', 60);
            $table->string('firstname', 40);
            $table->boolean('is_active');
            $table->integer('ration_id')->unsigned();
            $table->integer('type_benefited_id')->unsigned();
            $table->integer('dependence_id')->unsigned();
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
        Schema::dropIfExists('benefited');
    }
}
