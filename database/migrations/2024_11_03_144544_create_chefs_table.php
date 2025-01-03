<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('chefs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->date('dob');
            $table->string('address');
            $table->string('rank');

            $table->text('feedback')->nullable();
            $table->string('resume')->nullable();
            $table->string('certificate')->nullable();
            $table->string('identification')->nullable();

            $table->bigInteger("group_id")->unsigned();

            $table->timestamps();

            $table->foreign('group_id')->references('id')->on('groups');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chefs');
    }
};
