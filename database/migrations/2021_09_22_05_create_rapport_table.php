<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRapportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapports', function (Blueprint $table) {
            $table->integer('id', 11);
            $table->date('date')->nullable()->default(NULL);
            $table->string('motif',100)->nullable()->default(NULL);
            $table->string('bilan',100)->nullable()->default(NULL);
            $table->char('visiteur_id', 4);
            $table->unsignedInteger('medecin_id');
            $table->foreign('medecin_id')
                ->references('id')
                ->on("medecins");
            $table->foreign('visiteur_id')
                ->references("id")
                ->on("visiteurs");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rapports');
    }
}
