<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffrirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offrirs', function (Blueprint $table) {
            $table->char('medicament_id');
            $table->integer('rapport_id');

            $table->integer('quantite')->nullable();

            $keys = array('rapport_id', 'medicament_id');
            $table->primary($keys);

            $table->foreign('rapport_id')
                ->references('id')
                ->on('rapports');
            $table->foreign('medicament_id')
                ->references('id')
                ->on('medicaments');

/*            $fkeys_Name = array('rapport_id', 'medicament_id');
            $fkeys_Relation = array('id', 'id');
            $fkeys_On = array('rapports', 'medicaments');

            $table->foreign($fkeys_Name)
                ->references($fkeys_Relation)
                ->on(implode('',$fkeys_On))
                ->cascadeOnDelete()
                ->cascadeOnUpdate();*/

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offrirs');
    }
}
