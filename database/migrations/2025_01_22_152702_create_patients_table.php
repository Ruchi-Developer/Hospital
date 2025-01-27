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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('opd_id')->unique();
            $table->string('patient_name');
            $table->enum('gender', ['MALE', 'FEMALE']);
            $table->integer('age')->nullable();
            $table->string('father_husband_name')->nullable();
            $table->string('mobile_no')->nullable();
            $table->text('address')->nullable();
            $table->string('disease')->nullable();
            $table->string('area')->nullable();
            $table->string('caste')->nullable();
            $table->enum('mlc_pmlc', ['NONE', 'MLC', 'PMLC'])->default('NONE');
            $table->enum('charges', ['PAID', 'UNPAID']);
            $table->decimal('charge_amount', 8, 2)->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
