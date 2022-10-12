<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda',50);
            $table->string('stazione_di_partenza', 50);
            $table->string('stazione_di_arrivo', 50);
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->string('codice_treno',50)->unique();
            $table->unsignedTinyInteger('numero_carrozze')->default(100);
            $table->unsignedTinyInteger('in_orario')->default(1);
            $table->unsignedTinyInteger('cancellato')->default(0);
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
}
