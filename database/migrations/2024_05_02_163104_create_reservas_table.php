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
        Schema::create('reservas', function (Blueprint $table) {
            //crear una id para todad las tablas de la siguiente manera:
            $table->id();  //de esta manera este campo automaticamente se asigna como primary key
           
            $table->dateTime('Fecha_inicio')->nullable();
            $table->dateTime('Fecha_final')->nullable();
            $table->string('Estado_de_la_reserva')->nullable();
            $table->integer('Tarifa_total')->nullable();
            $table->string('Notas_adicionales')->nullable();
            $table->timestamps();
            
            //campos foraneos
            //las dos siguientes formas son correctas para asignar camppos foraneos

            $table->bigInteger('clientes_id')->unsigned();
            $table->foreign('clientes_id')->references('id')->on('clientes')->onDelete('cascade');

            //si la reserva solo puede incluir un vehiculo             

            $table->foreignId('vehiculos_id') //nombre del campo foraneo
            ->nullable()
            ->constrained('vehiculos') //tabla con la que se relaciona
            ->cascadeOnUpdate()    //actualizacion en cascada
            ->nullOnDelete();     //null cuando se elimina

           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('reservas');
    }
};
