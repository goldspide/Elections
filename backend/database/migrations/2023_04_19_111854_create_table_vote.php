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
        //
        Schema::create('vote', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label',120);
            $table->unsignedInteger('id_participant');
            $table->unsignedInteger('id_election');
            $table->unsignedInteger('id_bulletin');
            $table->foreign('id_participant')->references('id')->on
            ('participant')->onDelete('cascade');
            $table->foreign('id_election')->references('id')->on
            ('election')->onDelete('cascade');
            $table->foreign('id_bulletin')->references('id')->on
            ('bulletin')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
