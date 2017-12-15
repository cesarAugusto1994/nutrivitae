<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("patients", function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('cpf')->default();
            $table->integer('sus_code')->default();
            $table->integer('identity')->default();
            $table->integer('process_number')->default();
            $table->date('birth');
            $table->string('from');
            $table->string('address')->default();
            $table->string('phone');
            $table->string('gender');
            $table->string('occupation');
            $table->integer('zip');
            $table->string('email')->unique();
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
        Schema::drop("patients");
    }
}
