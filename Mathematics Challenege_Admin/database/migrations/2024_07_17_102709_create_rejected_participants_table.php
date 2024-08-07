<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRejectedParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rejected_participants', function (Blueprint $table) {
            $table->id();
            $table->string('userName');
            $table->string('schoolRegNo');
            $table->string('email')->unique();
            $table->string('firstName');
            $table->string('lastName');
            $table->date('dateOfBirth');
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
        Schema::dropIfExists('rejected_participants');
    }
}
