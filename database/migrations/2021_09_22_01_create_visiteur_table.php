<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisiteurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visiteurs', function (Blueprint $table) {
            $table->char('id', 4)->primary()->autoIncrement();
            $table->char('nom',30);
            $table->char('prenom',30);
            $table->char('login',20);
            $table->char('password',60);
            $table->char('adresse',30)->nullable()->default(NULL);
            $table->char('cp',5)->nullable()->default(NULL);
            $table->char('ville',30)->nullable()->default(NULL);
            $table->date('dateEmbauche')->nullable()->default(NULL);
            $table->integer('timespan')->default(0);
            $table->string('ticket')->nullable()->default(NULL);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visiteurs');
    }
}
