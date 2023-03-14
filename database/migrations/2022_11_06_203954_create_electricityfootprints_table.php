<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectricityfootprintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electricityfootprints', function (Blueprint $table) {
            $table->bigIncrements('ef_id',100);
            $table->string('u_id', 1000);
            $table->string('ef_usages', 100);
            $table->string('ef_carbonemission', 100);
            $table->string('ef_division', 50);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('electricityfootprints');
    }
}
