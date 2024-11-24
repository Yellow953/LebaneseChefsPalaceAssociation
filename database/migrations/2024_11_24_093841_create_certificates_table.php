<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("certificate_type_id")->unsigned();
            $table->bigInteger("chef_id")->unsigned()->nullable();
            $table->bigInteger("restaurant_id")->unsigned()->nullable();

            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->enum('status', ['active', 'expired', 'canceled'])->default('active');

            $table->string('document')->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();

            $table->foreign('certificate_type_id')->references('id')->on('certificate_types');
            $table->foreign('chef_id')->references('id')->on('chefs');
            $table->foreign('restaurant_id')->references('id')->on('restaurants');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
