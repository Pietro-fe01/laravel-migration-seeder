<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id(); // primarykey
            $table->string('company', 150)->nullable(); // Azienda
            $table->string('starting_station', 200); // Stazione di partenza
            $table->string('arrival_station', 200); // Stazione di arrivo
            $table->dateTime('starting_time'); // Orario di partenza
            $table->dateTime('arrival_time'); // Orario di arrivo
            $table->string('unique_code', 5); // Codice identificativo treno
            $table->tinyInteger('carriages_num')->nullable(); // Numero di carrozze in treno
            $table->boolean('in_time')->default(true); // Booleano che indica se il treno è in orario
            $table->boolean('is_cancelled')->default(false); // Booleano che indica se il treno è stato cancellato
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
