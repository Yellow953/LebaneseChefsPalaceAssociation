<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("chef_id")->unsigned();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('category');
            $table->decimal('achievement_value', 10, 2)->nullable();
            $table->string('unit')->nullable();
            $table->date('achieved_on');
            $table->string('location')->nullable();
            $table->string('certificate')->nullable();
            $table->timestamps();

            $table->foreign('chef_id')->references('id')->on('chefs');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};
