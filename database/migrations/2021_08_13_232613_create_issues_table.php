<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('treatment_id')->nullable();
            $table->unsignedBigInteger('drug_id')->nullable();
            $table->bigInteger('isdQty')->nullable();
            $table->string('isActive')->default('A');

            $table->foreign('treatment_id')->references('id')->on('treatments')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('drug_id')->references('id')->on('drugs')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issues');
    }
}
