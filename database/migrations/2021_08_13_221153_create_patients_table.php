<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('fName', 100);
            $table->string('lName', 100);
            $table->string('adr1', 200)->nullable();
            $table->string('adr2', 200)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('sex', 1);
            $table->date('bDay')->nullable();
            $table->string('bldGrp', 1)->nullable();
            $table->string('phnNmbr', 10)->nullable();
            $table->string('grdName', 200)->nullable();
            $table->string('grdPhnNmbr', 10)->nullable();
            $table->dateTime('regDate');
            $table->string('refNo', 15)->nullable();
            $table->string('isActive');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
