<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phoneNumber');
            $table->string('homeOrCom');
            $table->integer('postcode');
            $table->string('firstLine');
            $table->string('SecondLine');
            $table->string('number');
            $table->string('finance');
            $table->string('panels');
            $table->string('batteries');
            $table->string('output');
            $table->string('kit');
            $table->string('profitCalc');
            $table->string('Notes');
            $table->string('RepID');
            $table->string('UserID');
            $table->string('assignedDate');
            $table->string('Status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
