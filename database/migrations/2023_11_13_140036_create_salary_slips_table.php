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
        Schema::create('salary_slips', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id');
            $table->string('salary_month');
            $table->decimal('basic_salary', 10, 2);
            $table->decimal('transport_allowances', 10, 2);
            $table->decimal('income_tax', 10, 2);
            $table->decimal('absent_deduction', 10, 2)->nullable();
            $table->json('other_allowances')->nullable();
            $table->json('other_deduction')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salary_slips');
    }
};
