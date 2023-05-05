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
        Schema::create('participant', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nom',100);
            $table->string('num_cni',100);
            $table->integer('age');
            $table->char('sexe',1)->default('M');
            $table->string('status',30);
            $table->unsignedInteger('id_region');
            $table->foreign('id_region')->references('id')->on
            ('regions')->onDelete('cascade');
            $table->string('login',30);
            $table->string('password',100);
            $table->string('email',60)->nullable();
            $table->string('etat',1)->default('0');
            $table->string('telephone',15)->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participant');
    }
};
