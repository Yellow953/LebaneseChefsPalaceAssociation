<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('insurance_applications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("insurance_type_id")->unsigned();
            $table->string('name');
            $table->string('phone');
            $table->date('dob');
            $table->string('address');
            $table->string('rank');
            $table->string('maritial_status');
            $table->integer('number_of_kids')->nullable();
            $table->text('health_status')->nullable();
            $table->string('company_name')->nullable();
            $table->string('work_location')->nullable();
            $table->double('salary')->nullable();
            $table->text('work_description')->nullable();

            $table->timestamps();
            $table->foreign('insurance_type_id')->references('id')->on('insurance_types');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('insurance_applications');
    }
};
