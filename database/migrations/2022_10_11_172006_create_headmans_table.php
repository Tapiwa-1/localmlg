<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headmans', function (Blueprint $table) {
            $table->id();
            $table->string('province');
            $table->string('district');
            $table->string('chieftainship');
            $table->string('headmanship');
            $table->string('mutupo');
            $table->string('incumbent');
            $table->string('idnumber')->unique();
            $table->string('ecnumber');
            $table->string('gender');
            $table->date('dateofbirth');
            $table->date('dateofappointment');
            $table->string('status');
            $table->string('contactnumber');
            $table->integer('numberofhousehold');
            $table->integer('numberofwards');
            $table->integer('numberofvillages');
            $table->date('dateofdeathorremoval')->nullable();
            $table->string('physicalladdress');
            $table->string('slug')->unique();
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
        Schema::dropIfExists('headmans');
    }
};
