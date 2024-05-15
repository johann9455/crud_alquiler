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
        //
        Schema::create('vehiculos', function (Blueprint $table) {
           
            $table->id();
          
            $table->string('Placa');
            $table->string('Modelo')->nullable();
            $table->integer('Año_de_fabricacion')->nullable();
            $table->string('Estado')->nullable();
            $table->integer('Tarifas_por_dia')->nullable();
            $table->timestamps();

            
        });
      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('vehiculos');
    
    }
};
