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
        Schema::create('persona', function (Blueprint $table) {
            $table->bigIncrements('nPerCodigo');
            $table->char('cPerApellido', 50)->nullable();
            $table->char('cPerNombre', 50)->nullable();
            $table->char('cPerDireccion', 100)->nullable();
            $table->date('cPerFecNac');
            $table->integer('nPerEdad');
            $table->char('cPerSexo', 15)->nullable()->default('Masculino');
            $table->decimal('nPerSueldo', 6, 2);
            $table->char('cPerRnd', 50)->nullable();
            $table->char('nPerEstado', 1)->default('1');
            $table->char('remember_token', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona');
    }
};
