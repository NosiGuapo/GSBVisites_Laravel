<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicaments', function (Blueprint $table) {
            $table->char('id',30)->primary();
            $table->string('nomCommercial',80);
            $table->string('famille_id',10);
            $table->string('composition',100);
            $table->string('effets',100);
            $table->string('contreIndications',100);
            $table->foreign('famille_id')
                ->references('id')
                ->on('familles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicaments');
    }
}
