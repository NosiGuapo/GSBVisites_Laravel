<?php

namespace Database\Seeders;

use App\Models\Famille;
use Illuminate\Database\Seeder;

class FamilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Famille::create( [
            'id'=>'AA',
            'libelle'=>'Antalgiques en association'
        ] );

        Famille::create( [
            'id'=>'AAA',
            'libelle'=>'Antalgiques antipyréques en association'
        ] );

        Famille::create( [
            'id'=>'AAC',
            'libelle'=>'Antidépresseur d action centrale'
        ] );

        Famille::create( [
            'id'=>'AAH',
            'libelle'=>'Antivertigineux antihistaminique H1'
        ] );

        Famille::create( [
            'id'=>'ABA',
            'libelle'=>'Antibiotique antituberculeux'
        ] );

        Famille::create( [
            'id'=>'ABC',
            'libelle'=>'Antibiotique antiacnénique local'
        ] );

        Famille::create( [
            'id'=>'ABP',
            'libelle'=>'Antibiotique de la famille des béta-lactamines -pénicilline A-'
        ] );

        Famille::create( [
            'id'=>'AFC',
            'libelle'=>'Antibiotique de la famille des cyclines'
        ] );

        Famille::create( [
            'id'=>'AFM',
            'libelle'=>'Antibiotique de la famille des macrolides'
        ] );

        Famille::create( [
            'id'=>'AH',
            'libelle'=>'Antihistaminique H1 local'
        ] );

        Famille::create( [
            'id'=>'AIM',
            'libelle'=>'Antidépresseur imipraminique -tricyclique-'
        ] );

        Famille::create( [
            'id'=>'AIN',
            'libelle'=>'Antidépresseur inhibiteur sélectif de la recapture de la sétonine'
        ] );

        Famille::create( [
            'id'=>'ALO',
            'libelle'=>'Antibiotique local -ORL-'
        ] );

        Famille::create( [
            'id'=>'ANS',
            'libelle'=>'Antidépresseur IMAO non sélectif'
        ] );

        Famille::create( [
            'id'=>'AO',
            'libelle'=>'Antibiotique ophtalmique'
        ] );

        Famille::create( [
            'id'=>'AP',
            'libelle'=>'Antipsychotique normothymique'
        ] );

        Famille::create( [
            'id'=>'AUM',
            'libelle'=>'Antibiotique urinaire minute'
        ] );

        Famille::create( [
            'id'=>'CRT',
            'libelle'=>'Corticoide, antibiotique et antifongique à usage local'
        ] );

        Famille::create( [
            'id'=>'HYP',
            'libelle'=>'Hypnotique antihistaminique'
        ] );

        Famille::create( [
            'id'=>'PSA',
            'libelle'=>'Psychostimulant antiasthésique'
        ] );
        //
    }
}
