<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('course_enrollments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("course_id")->unsigned();
            $table->bigInteger("chef_id")->unsigned();
            $table->string('status')->default('enrolled');
            $table->date('enrolled_at')->default(now());
            $table->date('completed_at')->nullable();
            $table->timestamps();

            $table->foreign('chef_id')->references('id')->on('chefs');
            $table->foreign('course_id')->references('id')->on('courses');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_enrollments');
    }
};
