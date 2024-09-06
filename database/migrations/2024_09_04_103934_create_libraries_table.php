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
        Schema::create('libraries', function (Blueprint $table) {
            $table->integer('id')->primary()->autoIncrement();
            $table->integer('s_id')->nullable();
            $table->foreign('s_id')->references('id')->on('students')->onUpdate('cascade')->onDelete('set null');

            // this method works when id in student table is created through id();
            //$table->integer('student_id');
            //$table->foreignId('student_id')->constrained();

            $table->string('b_name')->nullable(false);
            $table->boolean('status')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libraries');
    }
};
