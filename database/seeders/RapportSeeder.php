<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rapport;

class RapportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rapport::create( [
            'id'=>1,
            'date'=>'2017-01-02',
            'motif'=>'positif',
            'bilan'=>'visiteannuelle',
            'visiteur_id'=>'b16',
            'medecin_id'=>963
        ] );

        Rapport::create( [
            'id'=>2,
            'date'=>'2016-07-02',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'a93',
            'medecin_id'=>4
        ] );

        Rapport::create( [
            'id'=>3,
            'date'=>'2016-07-02',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'a93',
            'medecin_id'=>86
        ] );

        Rapport::create( [
            'id'=>4,
            'date'=>'2016-07-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'a131',
            'medecin_id'=>725
        ] );

        Rapport::create( [
            'id'=>5,
            'date'=>'2016-07-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e49',
            'medecin_id'=>570
        ] );

        Rapport::create( [
            'id'=>6,
            'date'=>'2016-07-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b13',
            'medecin_id'=>82
        ] );

        Rapport::create( [
            'id'=>7,
            'date'=>'2016-07-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b25',
            'medecin_id'=>521
        ] );

        Rapport::create( [
            'id'=>8,
            'date'=>'2016-07-02',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'d13',
            'medecin_id'=>639
        ] );

        Rapport::create( [
            'id'=>9,
            'date'=>'2016-07-02',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b16',
            'medecin_id'=>863
        ] );

        Rapport::create( [
            'id'=>10,
            'date'=>'2016-07-02',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'e39',
            'medecin_id'=>475
        ] );

        Rapport::create( [
            'id'=>11,
            'date'=>'2016-07-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e39',
            'medecin_id'=>575
        ] );

        Rapport::create( [
            'id'=>12,
            'date'=>'2016-07-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b19',
            'medecin_id'=>268
        ] );

        Rapport::create( [
            'id'=>13,
            'date'=>'2016-07-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'c14',
            'medecin_id'=>754
        ] );

        Rapport::create( [
            'id'=>14,
            'date'=>'2016-07-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b50',
            'medecin_id'=>421
        ] );

        Rapport::create( [
            'id'=>15,
            'date'=>'2016-07-02',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e5',
            'medecin_id'=>11
        ] );

        Rapport::create( [
            'id'=>16,
            'date'=>'2016-07-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b59',
            'medecin_id'=>791
        ] );

        Rapport::create( [
            'id'=>17,
            'date'=>'2016-07-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'e5',
            'medecin_id'=>28
        ] );

        Rapport::create( [
            'id'=>18,
            'date'=>'2016-07-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'c14',
            'medecin_id'=>662
        ] );

        Rapport::create( [
            'id'=>19,
            'date'=>'2016-07-02',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e24',
            'medecin_id'=>365
        ] );

        Rapport::create( [
            'id'=>20,
            'date'=>'2016-07-02',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b28',
            'medecin_id'=>882
        ] );

        Rapport::create( [
            'id'=>21,
            'date'=>'2016-07-03',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'e39',
            'medecin_id'=>727
        ] );

        Rapport::create( [
            'id'=>22,
            'date'=>'2016-07-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'e39',
            'medecin_id'=>882
        ] );

        Rapport::create( [
            'id'=>23,
            'date'=>'2016-07-03',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b34',
            'medecin_id'=>69
        ] );

        Rapport::create( [
            'id'=>24,
            'date'=>'2016-07-03',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b4',
            'medecin_id'=>200
        ] );

        Rapport::create( [
            'id'=>25,
            'date'=>'2016-07-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'visiteur_id'=>'c3',
            'medecin_id'=>265
        ] );

        Rapport::create( [
            'id'=>26,
            'date'=>'2016-07-03',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'d13',
            'medecin_id'=>589
        ] );

        Rapport::create( [
            'id'=>27,
            'date'=>'2016-07-03',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b25',
            'medecin_id'=>471
        ] );

        Rapport::create( [
            'id'=>28,
            'date'=>'2016-07-03',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'a131',
            'medecin_id'=>935
        ] );

        Rapport::create( [
            'id'=>29,
            'date'=>'2016-07-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'f21',
            'medecin_id'=>41
        ] );

        Rapport::create( [
            'id'=>30,
            'date'=>'2016-07-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'e39',
            'medecin_id'=>148
        ] );

        Rapport::create( [
            'id'=>31,
            'date'=>'2016-07-03',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'d13',
            'medecin_id'=>820
        ] );

        Rapport::create( [
            'id'=>32,
            'date'=>'2016-07-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b28',
            'medecin_id'=>691
        ] );

        Rapport::create( [
            'id'=>33,
            'date'=>'2016-07-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'c14',
            'medecin_id'=>381
        ] );

        Rapport::create( [
            'id'=>34,
            'date'=>'2016-07-03',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'c14',
            'medecin_id'=>818
        ] );

        Rapport::create( [
            'id'=>35,
            'date'=>'2016-07-03',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b59',
            'medecin_id'=>153
        ] );

        Rapport::create( [
            'id'=>36,
            'date'=>'2016-07-03',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b25',
            'medecin_id'=>321
        ] );

        Rapport::create( [
            'id'=>37,
            'date'=>'2016-07-03',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b19',
            'medecin_id'=>352
        ] );

        Rapport::create( [
            'id'=>38,
            'date'=>'2016-07-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b34',
            'medecin_id'=>86
        ] );

        Rapport::create( [
            'id'=>39,
            'date'=>'2016-07-03',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'c54',
            'medecin_id'=>404
        ] );

        Rapport::create( [
            'id'=>40,
            'date'=>'2016-07-03',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'e39',
            'medecin_id'=>803
        ] );

        Rapport::create( [
            'id'=>41,
            'date'=>'2016-07-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'c14',
            'medecin_id'=>34
        ] );

        Rapport::create( [
            'id'=>42,
            'date'=>'2016-07-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e52',
            'medecin_id'=>738
        ] );

        Rapport::create( [
            'id'=>43,
            'date'=>'2016-07-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'d51',
            'medecin_id'=>628
        ] );

        Rapport::create( [
            'id'=>44,
            'date'=>'2016-07-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'c3',
            'medecin_id'=>356
        ] );

        Rapport::create( [
            'id'=>45,
            'date'=>'2016-07-04',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'a17',
            'medecin_id'=>388
        ] );

        Rapport::create( [
            'id'=>46,
            'date'=>'2016-07-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e5',
            'medecin_id'=>590
        ] );

        Rapport::create( [
            'id'=>47,
            'date'=>'2016-07-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b13',
            'medecin_id'=>603
        ] );

        Rapport::create( [
            'id'=>48,
            'date'=>'2016-07-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b16',
            'medecin_id'=>551
        ] );

        Rapport::create( [
            'id'=>49,
            'date'=>'2016-07-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'d13',
            'medecin_id'=>995
        ] );

        Rapport::create( [
            'id'=>50,
            'date'=>'2016-07-04',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e24',
            'medecin_id'=>115
        ] );

        Rapport::create( [
            'id'=>51,
            'date'=>'2016-07-04',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'e5',
            'medecin_id'=>680
        ] );

        Rapport::create( [
            'id'=>52,
            'date'=>'2016-07-04',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'e39',
            'medecin_id'=>564
        ] );

        Rapport::create( [
            'id'=>53,
            'date'=>'2016-07-04',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'e22',
            'medecin_id'=>281
        ] );

        Rapport::create( [
            'id'=>54,
            'date'=>'2016-07-04',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'c54',
            'medecin_id'=>542
        ] );

        Rapport::create( [
            'id'=>55,
            'date'=>'2016-07-04',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'e5',
            'medecin_id'=>137
        ] );

        Rapport::create( [
            'id'=>56,
            'date'=>'2016-07-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b19',
            'medecin_id'=>362
        ] );

        Rapport::create( [
            'id'=>57,
            'date'=>'2016-07-04',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b16',
            'medecin_id'=>633
        ] );

        Rapport::create( [
            'id'=>58,
            'date'=>'2016-07-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'c14',
            'medecin_id'=>424
        ] );

        Rapport::create( [
            'id'=>59,
            'date'=>'2016-07-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e52',
            'medecin_id'=>663
        ] );

        Rapport::create( [
            'id'=>60,
            'date'=>'2016-07-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'e5',
            'medecin_id'=>437
        ] );

        Rapport::create( [
            'id'=>61,
            'date'=>'2016-07-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'e24',
            'medecin_id'=>264
        ] );

        Rapport::create( [
            'id'=>62,
            'date'=>'2016-07-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e39',
            'medecin_id'=>7
        ] );

        Rapport::create( [
            'id'=>63,
            'date'=>'2016-07-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b25',
            'medecin_id'=>895
        ] );

        Rapport::create( [
            'id'=>64,
            'date'=>'2016-07-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'d13',
            'medecin_id'=>182
        ] );

        Rapport::create( [
            'id'=>65,
            'date'=>'2016-07-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'e24',
            'medecin_id'=>594
        ] );

        Rapport::create( [
            'id'=>66,
            'date'=>'2016-07-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'c3',
            'medecin_id'=>285
        ] );

        Rapport::create( [
            'id'=>67,
            'date'=>'2016-07-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e22',
            'medecin_id'=>834
        ] );

        Rapport::create( [
            'id'=>68,
            'date'=>'2016-07-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b50',
            'medecin_id'=>531
        ] );

        Rapport::create( [
            'id'=>69,
            'date'=>'2016-07-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b59',
            'medecin_id'=>873
        ] );

        Rapport::create( [
            'id'=>70,
            'date'=>'2016-07-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'f39',
            'medecin_id'=>976
        ] );

        Rapport::create( [
            'id'=>71,
            'date'=>'2016-07-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'c54',
            'medecin_id'=>913
        ] );

        Rapport::create( [
            'id'=>72,
            'date'=>'2016-07-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'a131',
            'medecin_id'=>931
        ] );

        Rapport::create( [
            'id'=>73,
            'date'=>'2016-07-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b4',
            'medecin_id'=>571
        ] );

        Rapport::create( [
            'id'=>74,
            'date'=>'2016-07-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e52',
            'medecin_id'=>487
        ] );

        Rapport::create( [
            'id'=>75,
            'date'=>'2016-07-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'c54',
            'medecin_id'=>78
        ] );

        Rapport::create( [
            'id'=>76,
            'date'=>'2016-07-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b59',
            'medecin_id'=>103
        ] );

        Rapport::create( [
            'id'=>77,
            'date'=>'2016-07-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'e5',
            'medecin_id'=>991
        ] );

        Rapport::create( [
            'id'=>78,
            'date'=>'2016-07-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'d13',
            'medecin_id'=>290
        ] );

        Rapport::create( [
            'id'=>79,
            'date'=>'2016-07-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b19',
            'medecin_id'=>314
        ] );

        Rapport::create( [
            'id'=>80,
            'date'=>'2016-07-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'f39',
            'medecin_id'=>43
        ] );

        Rapport::create( [
            'id'=>81,
            'date'=>'2016-07-06',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'c14',
            'medecin_id'=>797
        ] );

        Rapport::create( [
            'id'=>82,
            'date'=>'2016-07-06',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'a55',
            'medecin_id'=>747
        ] );

        Rapport::create( [
            'id'=>83,
            'date'=>'2016-07-06',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'visiteur_id'=>'e49',
            'medecin_id'=>97
        ] );

        Rapport::create( [
            'id'=>84,
            'date'=>'2016-07-06',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'e24',
            'medecin_id'=>389
        ] );

        Rapport::create( [
            'id'=>85,
            'date'=>'2016-07-06',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b25',
            'medecin_id'=>550
        ] );

        Rapport::create( [
            'id'=>86,
            'date'=>'2016-07-06',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'e39',
            'medecin_id'=>546
        ] );

        Rapport::create( [
            'id'=>87,
            'date'=>'2016-07-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'a131',
            'medecin_id'=>643
        ] );

        Rapport::create( [
            'id'=>88,
            'date'=>'2016-07-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'e52',
            'medecin_id'=>410
        ] );

        Rapport::create( [
            'id'=>89,
            'date'=>'2016-07-06',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'e39',
            'medecin_id'=>422
        ] );

        Rapport::create( [
            'id'=>90,
            'date'=>'2016-07-06',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'c3',
            'medecin_id'=>765
        ] );

        Rapport::create( [
            'id'=>91,
            'date'=>'2016-07-06',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b59',
            'medecin_id'=>117
        ] );

        Rapport::create( [
            'id'=>92,
            'date'=>'2016-07-06',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'e5',
            'medecin_id'=>638
        ] );

        Rapport::create( [
            'id'=>93,
            'date'=>'2016-07-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'c54',
            'medecin_id'=>96
        ] );

        Rapport::create( [
            'id'=>94,
            'date'=>'2016-07-06',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b19',
            'medecin_id'=>257
        ] );

        Rapport::create( [
            'id'=>95,
            'date'=>'2016-07-06',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e22',
            'medecin_id'=>465
        ] );

        Rapport::create( [
            'id'=>96,
            'date'=>'2016-07-06',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'e22',
            'medecin_id'=>907
        ] );

        Rapport::create( [
            'id'=>97,
            'date'=>'2016-07-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'d13',
            'medecin_id'=>871
        ] );

        Rapport::create( [
            'id'=>98,
            'date'=>'2016-07-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'f39',
            'medecin_id'=>15
        ] );

        Rapport::create( [
            'id'=>99,
            'date'=>'2016-07-06',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'e52',
            'medecin_id'=>676
        ] );

        Rapport::create( [
            'id'=>100,
            'date'=>'2016-07-06',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'c54',
            'medecin_id'=>569
        ] );

        Rapport::create( [
            'id'=>101,
            'date'=>'2016-07-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'d13',
            'medecin_id'=>158
        ] );

        Rapport::create( [
            'id'=>102,
            'date'=>'2016-07-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'a131',
            'medecin_id'=>32
        ] );

        Rapport::create( [
            'id'=>103,
            'date'=>'2016-07-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b50',
            'medecin_id'=>434
        ] );

        Rapport::create( [
            'id'=>104,
            'date'=>'2016-07-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'e52',
            'medecin_id'=>181
        ] );

        Rapport::create( [
            'id'=>105,
            'date'=>'2016-07-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'a131',
            'medecin_id'=>525
        ] );

        Rapport::create( [
            'id'=>106,
            'date'=>'2016-07-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'visiteur_id'=>'c14',
            'medecin_id'=>687
        ] );

        Rapport::create( [
            'id'=>107,
            'date'=>'2016-07-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b13',
            'medecin_id'=>867
        ] );

        Rapport::create( [
            'id'=>108,
            'date'=>'2016-07-07',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'e22',
            'medecin_id'=>302
        ] );

        Rapport::create( [
            'id'=>109,
            'date'=>'2016-07-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b19',
            'medecin_id'=>455
        ] );

        Rapport::create( [
            'id'=>110,
            'date'=>'2016-07-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'e52',
            'medecin_id'=>278
        ] );

        Rapport::create( [
            'id'=>111,
            'date'=>'2016-07-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'c54',
            'medecin_id'=>572
        ] );

        Rapport::create( [
            'id'=>112,
            'date'=>'2016-07-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'a131',
            'medecin_id'=>863
        ] );

        Rapport::create( [
            'id'=>113,
            'date'=>'2016-07-07',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b25',
            'medecin_id'=>959
        ] );

        Rapport::create( [
            'id'=>114,
            'date'=>'2016-07-07',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'d51',
            'medecin_id'=>205
        ] );

        Rapport::create( [
            'id'=>115,
            'date'=>'2016-07-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b19',
            'medecin_id'=>413
        ] );

        Rapport::create( [
            'id'=>116,
            'date'=>'2016-07-07',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b59',
            'medecin_id'=>698
        ] );

        Rapport::create( [
            'id'=>117,
            'date'=>'2016-07-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'a17',
            'medecin_id'=>857
        ] );

        Rapport::create( [
            'id'=>118,
            'date'=>'2016-07-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b28',
            'medecin_id'=>833
        ] );

        Rapport::create( [
            'id'=>119,
            'date'=>'2016-07-07',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'a93',
            'medecin_id'=>308
        ] );

        Rapport::create( [
            'id'=>120,
            'date'=>'2016-07-07',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e39',
            'medecin_id'=>362
        ] );

        Rapport::create( [
            'id'=>121,
            'date'=>'2016-07-08',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b25',
            'medecin_id'=>803
        ] );

        Rapport::create( [
            'id'=>122,
            'date'=>'2016-07-08',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'d13',
            'medecin_id'=>291
        ] );

        Rapport::create( [
            'id'=>123,
            'date'=>'2016-07-08',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'visiteur_id'=>'c54',
            'medecin_id'=>910
        ] );

        Rapport::create( [
            'id'=>124,
            'date'=>'2016-07-08',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'d13',
            'medecin_id'=>205
        ] );

        Rapport::create( [
            'id'=>125,
            'date'=>'2016-07-08',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'e24',
            'medecin_id'=>775
        ] );

        Rapport::create( [
            'id'=>126,
            'date'=>'2016-07-08',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'a17',
            'medecin_id'=>126
        ] );

        Rapport::create( [
            'id'=>127,
            'date'=>'2016-07-08',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b25',
            'medecin_id'=>926
        ] );

        Rapport::create( [
            'id'=>128,
            'date'=>'2016-07-08',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e39',
            'medecin_id'=>906
        ] );

        Rapport::create( [
            'id'=>129,
            'date'=>'2016-07-08',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'e5',
            'medecin_id'=>365
        ] );

        Rapport::create( [
            'id'=>130,
            'date'=>'2016-07-08',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b4',
            'medecin_id'=>62
        ] );

        Rapport::create( [
            'id'=>131,
            'date'=>'2016-07-08',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b4',
            'medecin_id'=>779
        ] );

        Rapport::create( [
            'id'=>132,
            'date'=>'2016-07-08',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'c14',
            'medecin_id'=>172
        ] );

        Rapport::create( [
            'id'=>133,
            'date'=>'2016-07-08',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b16',
            'medecin_id'=>522
        ] );

        Rapport::create( [
            'id'=>134,
            'date'=>'2016-07-08',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'visiteur_id'=>'e5',
            'medecin_id'=>403
        ] );

        Rapport::create( [
            'id'=>135,
            'date'=>'2016-07-08',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b4',
            'medecin_id'=>845
        ] );

        Rapport::create( [
            'id'=>136,
            'date'=>'2016-07-08',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b34',
            'medecin_id'=>104
        ] );

        Rapport::create( [
            'id'=>137,
            'date'=>'2016-07-08',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e24',
            'medecin_id'=>404
        ] );

        Rapport::create( [
            'id'=>138,
            'date'=>'2016-07-08',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b28',
            'medecin_id'=>397
        ] );

        Rapport::create( [
            'id'=>139,
            'date'=>'2016-07-08',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b25',
            'medecin_id'=>707
        ] );

        Rapport::create( [
            'id'=>140,
            'date'=>'2016-07-08',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b19',
            'medecin_id'=>959
        ] );

        Rapport::create( [
            'id'=>141,
            'date'=>'2016-07-09',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'e39',
            'medecin_id'=>986
        ] );

        Rapport::create( [
            'id'=>142,
            'date'=>'2016-07-09',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e22',
            'medecin_id'=>143
        ] );

        Rapport::create( [
            'id'=>143,
            'date'=>'2016-07-09',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'a55',
            'medecin_id'=>735
        ] );

        Rapport::create( [
            'id'=>144,
            'date'=>'2016-07-09',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'c54',
            'medecin_id'=>788
        ] );

        Rapport::create( [
            'id'=>145,
            'date'=>'2016-07-09',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'c14',
            'medecin_id'=>186
        ] );

        Rapport::create( [
            'id'=>146,
            'date'=>'2016-07-09',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'c14',
            'medecin_id'=>871
        ] );

        Rapport::create( [
            'id'=>147,
            'date'=>'2016-07-09',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'a131',
            'medecin_id'=>511
        ] );

        Rapport::create( [
            'id'=>148,
            'date'=>'2016-07-09',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'d13',
            'medecin_id'=>996
        ] );

        Rapport::create( [
            'id'=>149,
            'date'=>'2016-07-09',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'f21',
            'medecin_id'=>351
        ] );

        Rapport::create( [
            'id'=>150,
            'date'=>'2016-07-09',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'f21',
            'medecin_id'=>992
        ] );

        Rapport::create( [
            'id'=>151,
            'date'=>'2016-07-09',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b4',
            'medecin_id'=>205
        ] );

        Rapport::create( [
            'id'=>152,
            'date'=>'2016-07-09',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'a93',
            'medecin_id'=>936
        ] );

        Rapport::create( [
            'id'=>153,
            'date'=>'2016-07-09',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b25',
            'medecin_id'=>484
        ] );

        Rapport::create( [
            'id'=>154,
            'date'=>'2016-07-09',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b25',
            'medecin_id'=>790
        ] );

        Rapport::create( [
            'id'=>155,
            'date'=>'2016-07-09',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b34',
            'medecin_id'=>328
        ] );

        Rapport::create( [
            'id'=>156,
            'date'=>'2016-07-09',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b4',
            'medecin_id'=>834
        ] );

        Rapport::create( [
            'id'=>157,
            'date'=>'2016-07-09',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'e49',
            'medecin_id'=>826
        ] );

        Rapport::create( [
            'id'=>158,
            'date'=>'2016-07-09',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'e5',
            'medecin_id'=>41
        ] );

        Rapport::create( [
            'id'=>159,
            'date'=>'2016-07-09',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b16',
            'medecin_id'=>52
        ] );

        Rapport::create( [
            'id'=>160,
            'date'=>'2016-07-09',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e22',
            'medecin_id'=>52
        ] );

        Rapport::create( [
            'id'=>161,
            'date'=>'2016-07-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b4',
            'medecin_id'=>237
        ] );

        Rapport::create( [
            'id'=>162,
            'date'=>'2016-07-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b19',
            'medecin_id'=>829
        ] );

        Rapport::create( [
            'id'=>163,
            'date'=>'2016-07-10',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e24',
            'medecin_id'=>973
        ] );

        Rapport::create( [
            'id'=>164,
            'date'=>'2016-07-10',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e24',
            'medecin_id'=>789
        ] );

        Rapport::create( [
            'id'=>165,
            'date'=>'2016-07-10',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b4',
            'medecin_id'=>31
        ] );

        Rapport::create( [
            'id'=>166,
            'date'=>'2016-07-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b25',
            'medecin_id'=>858
        ] );

        Rapport::create( [
            'id'=>167,
            'date'=>'2016-07-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'a93',
            'medecin_id'=>210
        ] );

        Rapport::create( [
            'id'=>168,
            'date'=>'2016-07-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'a17',
            'medecin_id'=>278
        ] );

        Rapport::create( [
            'id'=>169,
            'date'=>'2016-07-10',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'d13',
            'medecin_id'=>144
        ] );

        Rapport::create( [
            'id'=>170,
            'date'=>'2016-07-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'f21',
            'medecin_id'=>665
        ] );

        Rapport::create( [
            'id'=>171,
            'date'=>'2016-07-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'visiteur_id'=>'d51',
            'medecin_id'=>495
        ] );

        Rapport::create( [
            'id'=>172,
            'date'=>'2016-07-10',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'a131',
            'medecin_id'=>701
        ] );

        Rapport::create( [
            'id'=>173,
            'date'=>'2016-07-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'e5',
            'medecin_id'=>180
        ] );

        Rapport::create( [
            'id'=>174,
            'date'=>'2016-07-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b25',
            'medecin_id'=>414
        ] );

        Rapport::create( [
            'id'=>175,
            'date'=>'2016-07-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'d13',
            'medecin_id'=>628
        ] );

        Rapport::create( [
            'id'=>176,
            'date'=>'2016-07-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'visiteur_id'=>'f39',
            'medecin_id'=>925
        ] );

        Rapport::create( [
            'id'=>177,
            'date'=>'2016-07-10',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'e39',
            'medecin_id'=>711
        ] );

        Rapport::create( [
            'id'=>178,
            'date'=>'2016-07-10',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'a131',
            'medecin_id'=>22
        ] );

        Rapport::create( [
            'id'=>179,
            'date'=>'2016-07-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b13',
            'medecin_id'=>738
        ] );

        Rapport::create( [
            'id'=>180,
            'date'=>'2016-07-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b34',
            'medecin_id'=>696
        ] );

        Rapport::create( [
            'id'=>181,
            'date'=>'2016-07-11',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b50',
            'medecin_id'=>452
        ] );

        Rapport::create( [
            'id'=>182,
            'date'=>'2016-07-11',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b34',
            'medecin_id'=>506
        ] );

        Rapport::create( [
            'id'=>183,
            'date'=>'2016-07-11',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b34',
            'medecin_id'=>228
        ] );

        Rapport::create( [
            'id'=>184,
            'date'=>'2016-07-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'d51',
            'medecin_id'=>806
        ] );

        Rapport::create( [
            'id'=>185,
            'date'=>'2016-07-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b4',
            'medecin_id'=>9
        ] );

        Rapport::create( [
            'id'=>186,
            'date'=>'2016-07-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e22',
            'medecin_id'=>159
        ] );

        Rapport::create( [
            'id'=>187,
            'date'=>'2016-07-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'c3',
            'medecin_id'=>202
        ] );

        Rapport::create( [
            'id'=>188,
            'date'=>'2016-07-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'e39',
            'medecin_id'=>974
        ] );

        Rapport::create( [
            'id'=>189,
            'date'=>'2016-07-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b4',
            'medecin_id'=>543
        ] );

        Rapport::create( [
            'id'=>190,
            'date'=>'2016-07-11',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'c14',
            'medecin_id'=>208
        ] );

        Rapport::create( [
            'id'=>191,
            'date'=>'2016-07-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e22',
            'medecin_id'=>793
        ] );

        Rapport::create( [
            'id'=>192,
            'date'=>'2016-07-11',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b59',
            'medecin_id'=>281
        ] );

        Rapport::create( [
            'id'=>193,
            'date'=>'2016-07-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e22',
            'medecin_id'=>892
        ] );

        Rapport::create( [
            'id'=>194,
            'date'=>'2016-07-11',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'c3',
            'medecin_id'=>917
        ] );

        Rapport::create( [
            'id'=>195,
            'date'=>'2016-07-11',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'a17',
            'medecin_id'=>561
        ] );

        Rapport::create( [
            'id'=>196,
            'date'=>'2016-07-11',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'f39',
            'medecin_id'=>428
        ] );

        Rapport::create( [
            'id'=>197,
            'date'=>'2016-07-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'a17',
            'medecin_id'=>618
        ] );

        Rapport::create( [
            'id'=>198,
            'date'=>'2016-07-11',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b16',
            'medecin_id'=>531
        ] );

        Rapport::create( [
            'id'=>199,
            'date'=>'2016-07-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'e5',
            'medecin_id'=>874
        ] );

        Rapport::create( [
            'id'=>200,
            'date'=>'2016-07-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'e52',
            'medecin_id'=>625
        ] );

        Rapport::create( [
            'id'=>201,
            'date'=>'2016-07-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'a93',
            'medecin_id'=>153
        ] );

        Rapport::create( [
            'id'=>202,
            'date'=>'2016-07-12',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'c3',
            'medecin_id'=>816
        ] );

        Rapport::create( [
            'id'=>203,
            'date'=>'2016-07-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'e39',
            'medecin_id'=>330
        ] );

        Rapport::create( [
            'id'=>204,
            'date'=>'2016-07-12',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e52',
            'medecin_id'=>978
        ] );

        Rapport::create( [
            'id'=>205,
            'date'=>'2016-07-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b34',
            'medecin_id'=>871
        ] );

        Rapport::create( [
            'id'=>206,
            'date'=>'2016-07-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b34',
            'medecin_id'=>928
        ] );

        Rapport::create( [
            'id'=>207,
            'date'=>'2016-07-12',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e22',
            'medecin_id'=>192
        ] );

        Rapport::create( [
            'id'=>208,
            'date'=>'2016-07-12',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'b28',
            'medecin_id'=>851
        ] );

        Rapport::create( [
            'id'=>209,
            'date'=>'2016-07-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b16',
            'medecin_id'=>4
        ] );

        Rapport::create( [
            'id'=>210,
            'date'=>'2016-07-12',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'c3',
            'medecin_id'=>532
        ] );

        Rapport::create( [
            'id'=>211,
            'date'=>'2016-07-12',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b19',
            'medecin_id'=>445
        ] );

        Rapport::create( [
            'id'=>212,
            'date'=>'2016-07-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'a17',
            'medecin_id'=>223
        ] );

        Rapport::create( [
            'id'=>213,
            'date'=>'2016-07-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'c54',
            'medecin_id'=>312
        ] );

        Rapport::create( [
            'id'=>214,
            'date'=>'2016-07-12',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'visiteur_id'=>'e52',
            'medecin_id'=>503
        ] );

        Rapport::create( [
            'id'=>215,
            'date'=>'2016-07-12',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'f39',
            'medecin_id'=>709
        ] );

        Rapport::create( [
            'id'=>216,
            'date'=>'2016-07-12',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b28',
            'medecin_id'=>693
        ] );

        Rapport::create( [
            'id'=>217,
            'date'=>'2016-07-12',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'f21',
            'medecin_id'=>47
        ] );

        Rapport::create( [
            'id'=>218,
            'date'=>'2016-07-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'f39',
            'medecin_id'=>451
        ] );

        Rapport::create( [
            'id'=>219,
            'date'=>'2016-07-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'a17',
            'medecin_id'=>502
        ] );

        Rapport::create( [
            'id'=>220,
            'date'=>'2016-07-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'c54',
            'medecin_id'=>305
        ] );

        Rapport::create( [
            'id'=>221,
            'date'=>'2016-07-13',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'e52',
            'medecin_id'=>581
        ] );

        Rapport::create( [
            'id'=>222,
            'date'=>'2016-07-13',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'b28',
            'medecin_id'=>346
        ] );

        Rapport::create( [
            'id'=>223,
            'date'=>'2016-07-13',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'a17',
            'medecin_id'=>786
        ] );

        Rapport::create( [
            'id'=>224,
            'date'=>'2016-07-13',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b28',
            'medecin_id'=>422
        ] );

        Rapport::create( [
            'id'=>225,
            'date'=>'2016-07-13',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b25',
            'medecin_id'=>402
        ] );

        Rapport::create( [
            'id'=>226,
            'date'=>'2016-07-13',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'visiteur_id'=>'b50',
            'medecin_id'=>391
        ] );

        Rapport::create( [
            'id'=>227,
            'date'=>'2016-07-13',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'c54',
            'medecin_id'=>699
        ] );

        Rapport::create( [
            'id'=>228,
            'date'=>'2016-07-13',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'e52',
            'medecin_id'=>31
        ] );

        Rapport::create( [
            'id'=>229,
            'date'=>'2016-07-13',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'c54',
            'medecin_id'=>728
        ] );

        Rapport::create( [
            'id'=>230,
            'date'=>'2016-07-13',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'c54',
            'medecin_id'=>155
        ] );

        Rapport::create( [
            'id'=>231,
            'date'=>'2016-07-13',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'c14',
            'medecin_id'=>71
        ] );

        Rapport::create( [
            'id'=>232,
            'date'=>'2016-07-13',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'c54',
            'medecin_id'=>887
        ] );

        Rapport::create( [
            'id'=>233,
            'date'=>'2016-07-13',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'c54',
            'medecin_id'=>63
        ] );

        Rapport::create( [
            'id'=>234,
            'date'=>'2016-07-13',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b4',
            'medecin_id'=>83
        ] );

        Rapport::create( [
            'id'=>235,
            'date'=>'2016-07-13',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'d13',
            'medecin_id'=>946
        ] );

        Rapport::create( [
            'id'=>236,
            'date'=>'2016-07-13',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b34',
            'medecin_id'=>139
        ] );

        Rapport::create( [
            'id'=>237,
            'date'=>'2016-07-13',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'visiteur_id'=>'b13',
            'medecin_id'=>174
        ] );

        Rapport::create( [
            'id'=>238,
            'date'=>'2016-07-13',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'f21',
            'medecin_id'=>148
        ] );

        Rapport::create( [
            'id'=>239,
            'date'=>'2016-07-13',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e39',
            'medecin_id'=>308
        ] );

        Rapport::create( [
            'id'=>240,
            'date'=>'2016-07-13',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'c3',
            'medecin_id'=>740
        ] );

        Rapport::create( [
            'id'=>241,
            'date'=>'2016-07-14',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b16',
            'medecin_id'=>323
        ] );

        Rapport::create( [
            'id'=>242,
            'date'=>'2016-07-14',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b4',
            'medecin_id'=>440
        ] );

        Rapport::create( [
            'id'=>243,
            'date'=>'2016-07-14',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'e22',
            'medecin_id'=>986
        ] );

        Rapport::create( [
            'id'=>244,
            'date'=>'2016-07-14',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e22',
            'medecin_id'=>6
        ] );

        Rapport::create( [
            'id'=>245,
            'date'=>'2016-07-14',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b19',
            'medecin_id'=>809
        ] );

        Rapport::create( [
            'id'=>246,
            'date'=>'2016-07-14',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'d13',
            'medecin_id'=>896
        ] );

        Rapport::create( [
            'id'=>247,
            'date'=>'2016-07-14',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'a93',
            'medecin_id'=>499
        ] );

        Rapport::create( [
            'id'=>248,
            'date'=>'2016-07-14',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'c54',
            'medecin_id'=>639
        ] );

        Rapport::create( [
            'id'=>249,
            'date'=>'2016-07-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b4',
            'medecin_id'=>737
        ] );

        Rapport::create( [
            'id'=>250,
            'date'=>'2016-07-14',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'visiteur_id'=>'b34',
            'medecin_id'=>979
        ] );

        Rapport::create( [
            'id'=>251,
            'date'=>'2016-07-14',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'e52',
            'medecin_id'=>709
        ] );

        Rapport::create( [
            'id'=>252,
            'date'=>'2016-07-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'a17',
            'medecin_id'=>290
        ] );

        Rapport::create( [
            'id'=>253,
            'date'=>'2016-07-14',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'a55',
            'medecin_id'=>121
        ] );

        Rapport::create( [
            'id'=>254,
            'date'=>'2016-07-14',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'e22',
            'medecin_id'=>116
        ] );

        Rapport::create( [
            'id'=>255,
            'date'=>'2016-07-14',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'c54',
            'medecin_id'=>331
        ] );

        Rapport::create( [
            'id'=>256,
            'date'=>'2016-07-14',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'a131',
            'medecin_id'=>204
        ] );

        Rapport::create( [
            'id'=>257,
            'date'=>'2016-07-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'a131',
            'medecin_id'=>187
        ] );

        Rapport::create( [
            'id'=>258,
            'date'=>'2016-07-14',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'c54',
            'medecin_id'=>172
        ] );

        Rapport::create( [
            'id'=>259,
            'date'=>'2016-07-14',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b13',
            'medecin_id'=>311
        ] );

        Rapport::create( [
            'id'=>260,
            'date'=>'2016-07-14',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'f39',
            'medecin_id'=>766
        ] );

        Rapport::create( [
            'id'=>261,
            'date'=>'2016-07-15',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'a55',
            'medecin_id'=>634
        ] );

        Rapport::create( [
            'id'=>262,
            'date'=>'2016-07-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'c14',
            'medecin_id'=>216
        ] );

        Rapport::create( [
            'id'=>263,
            'date'=>'2016-07-15',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e22',
            'medecin_id'=>119
        ] );

        Rapport::create( [
            'id'=>264,
            'date'=>'2016-07-15',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'visiteur_id'=>'b19',
            'medecin_id'=>725
        ] );

        Rapport::create( [
            'id'=>265,
            'date'=>'2016-07-15',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e24',
            'medecin_id'=>827
        ] );

        Rapport::create( [
            'id'=>266,
            'date'=>'2016-07-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'a131',
            'medecin_id'=>412
        ] );

        Rapport::create( [
            'id'=>267,
            'date'=>'2016-07-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'a55',
            'medecin_id'=>837
        ] );

        Rapport::create( [
            'id'=>268,
            'date'=>'2016-07-15',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'c3',
            'medecin_id'=>97
        ] );

        Rapport::create( [
            'id'=>269,
            'date'=>'2016-07-15',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'f21',
            'medecin_id'=>885
        ] );

        Rapport::create( [
            'id'=>270,
            'date'=>'2016-07-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b16',
            'medecin_id'=>484
        ] );

        Rapport::create( [
            'id'=>271,
            'date'=>'2016-07-15',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'f39',
            'medecin_id'=>962
        ] );

        Rapport::create( [
            'id'=>272,
            'date'=>'2016-07-15',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'e22',
            'medecin_id'=>9
        ] );

        Rapport::create( [
            'id'=>273,
            'date'=>'2016-07-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'d13',
            'medecin_id'=>855
        ] );

        Rapport::create( [
            'id'=>274,
            'date'=>'2016-07-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e5',
            'medecin_id'=>545
        ] );

        Rapport::create( [
            'id'=>275,
            'date'=>'2016-07-15',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'b50',
            'medecin_id'=>94
        ] );

        Rapport::create( [
            'id'=>276,
            'date'=>'2016-07-15',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'d51',
            'medecin_id'=>802
        ] );

        Rapport::create( [
            'id'=>277,
            'date'=>'2016-07-15',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'e49',
            'medecin_id'=>598
        ] );

        Rapport::create( [
            'id'=>278,
            'date'=>'2016-07-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'e52',
            'medecin_id'=>291
        ] );

        Rapport::create( [
            'id'=>279,
            'date'=>'2016-07-15',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b25',
            'medecin_id'=>97
        ] );

        Rapport::create( [
            'id'=>280,
            'date'=>'2016-07-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'a93',
            'medecin_id'=>718
        ] );

        Rapport::create( [
            'id'=>281,
            'date'=>'2016-07-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'e49',
            'medecin_id'=>103
        ] );

        Rapport::create( [
            'id'=>282,
            'date'=>'2016-07-16',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'e52',
            'medecin_id'=>128
        ] );

        Rapport::create( [
            'id'=>283,
            'date'=>'2016-07-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'a55',
            'medecin_id'=>123
        ] );

        Rapport::create( [
            'id'=>284,
            'date'=>'2016-07-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'a55',
            'medecin_id'=>866
        ] );

        Rapport::create( [
            'id'=>285,
            'date'=>'2016-07-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b19',
            'medecin_id'=>691
        ] );

        Rapport::create( [
            'id'=>286,
            'date'=>'2016-07-16',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e52',
            'medecin_id'=>632
        ] );

        Rapport::create( [
            'id'=>287,
            'date'=>'2016-07-16',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b34',
            'medecin_id'=>896
        ] );

        Rapport::create( [
            'id'=>288,
            'date'=>'2016-07-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'d51',
            'medecin_id'=>714
        ] );

        Rapport::create( [
            'id'=>289,
            'date'=>'2016-07-16',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'e52',
            'medecin_id'=>284
        ] );

        Rapport::create( [
            'id'=>290,
            'date'=>'2016-07-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'a131',
            'medecin_id'=>993
        ] );

        Rapport::create( [
            'id'=>291,
            'date'=>'2016-07-16',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'c54',
            'medecin_id'=>717
        ] );

        Rapport::create( [
            'id'=>292,
            'date'=>'2016-07-16',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b28',
            'medecin_id'=>375
        ] );

        Rapport::create( [
            'id'=>293,
            'date'=>'2016-07-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'f21',
            'medecin_id'=>697
        ] );

        Rapport::create( [
            'id'=>294,
            'date'=>'2016-07-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'a17',
            'medecin_id'=>53
        ] );

        Rapport::create( [
            'id'=>295,
            'date'=>'2016-07-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'c3',
            'medecin_id'=>446
        ] );

        Rapport::create( [
            'id'=>296,
            'date'=>'2016-07-16',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'visiteur_id'=>'b19',
            'medecin_id'=>236
        ] );

        Rapport::create( [
            'id'=>297,
            'date'=>'2016-07-16',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'c3',
            'medecin_id'=>222
        ] );

        Rapport::create( [
            'id'=>298,
            'date'=>'2016-07-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'a131',
            'medecin_id'=>604
        ] );

        Rapport::create( [
            'id'=>299,
            'date'=>'2016-07-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'a131',
            'medecin_id'=>959
        ] );

        Rapport::create( [
            'id'=>300,
            'date'=>'2016-07-16',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b28',
            'medecin_id'=>743
        ] );

        Rapport::create( [
            'id'=>301,
            'date'=>'2016-07-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e22',
            'medecin_id'=>483
        ] );

        Rapport::create( [
            'id'=>302,
            'date'=>'2016-07-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e52',
            'medecin_id'=>135
        ] );

        Rapport::create( [
            'id'=>303,
            'date'=>'2016-07-17',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'a55',
            'medecin_id'=>670
        ] );

        Rapport::create( [
            'id'=>304,
            'date'=>'2016-07-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'d13',
            'medecin_id'=>659
        ] );

        Rapport::create( [
            'id'=>305,
            'date'=>'2016-07-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'a131',
            'medecin_id'=>905
        ] );

        Rapport::create( [
            'id'=>306,
            'date'=>'2016-07-17',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b13',
            'medecin_id'=>334
        ] );

        Rapport::create( [
            'id'=>307,
            'date'=>'2016-07-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'c3',
            'medecin_id'=>570
        ] );

        Rapport::create( [
            'id'=>308,
            'date'=>'2016-07-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'c14',
            'medecin_id'=>978
        ] );

        Rapport::create( [
            'id'=>309,
            'date'=>'2016-07-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b50',
            'medecin_id'=>349
        ] );

        Rapport::create( [
            'id'=>310,
            'date'=>'2016-07-17',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b4',
            'medecin_id'=>742
        ] );

        Rapport::create( [
            'id'=>311,
            'date'=>'2016-07-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'c3',
            'medecin_id'=>334
        ] );

        Rapport::create( [
            'id'=>312,
            'date'=>'2016-07-17',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'c54',
            'medecin_id'=>577
        ] );

        Rapport::create( [
            'id'=>313,
            'date'=>'2016-07-17',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'c14',
            'medecin_id'=>154
        ] );

        Rapport::create( [
            'id'=>314,
            'date'=>'2016-07-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'c14',
            'medecin_id'=>871
        ] );

        Rapport::create( [
            'id'=>315,
            'date'=>'2016-07-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'a55',
            'medecin_id'=>486
        ] );

        Rapport::create( [
            'id'=>316,
            'date'=>'2016-07-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e22',
            'medecin_id'=>551
        ] );

        Rapport::create( [
            'id'=>317,
            'date'=>'2016-07-17',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e49',
            'medecin_id'=>169
        ] );

        Rapport::create( [
            'id'=>318,
            'date'=>'2016-07-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b34',
            'medecin_id'=>707
        ] );

        Rapport::create( [
            'id'=>319,
            'date'=>'2016-07-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b4',
            'medecin_id'=>814
        ] );

        Rapport::create( [
            'id'=>320,
            'date'=>'2016-07-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'c54',
            'medecin_id'=>69
        ] );

        Rapport::create( [
            'id'=>321,
            'date'=>'2016-07-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'f21',
            'medecin_id'=>71
        ] );

        Rapport::create( [
            'id'=>322,
            'date'=>'2016-07-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'e39',
            'medecin_id'=>404
        ] );

        Rapport::create( [
            'id'=>323,
            'date'=>'2016-07-18',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'c14',
            'medecin_id'=>895
        ] );

        Rapport::create( [
            'id'=>324,
            'date'=>'2016-07-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b28',
            'medecin_id'=>175
        ] );

        Rapport::create( [
            'id'=>325,
            'date'=>'2016-07-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'a131',
            'medecin_id'=>588
        ] );

        Rapport::create( [
            'id'=>326,
            'date'=>'2016-07-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b50',
            'medecin_id'=>314
        ] );

        Rapport::create( [
            'id'=>327,
            'date'=>'2016-07-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b16',
            'medecin_id'=>926
        ] );

        Rapport::create( [
            'id'=>328,
            'date'=>'2016-07-18',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b28',
            'medecin_id'=>970
        ] );

        Rapport::create( [
            'id'=>329,
            'date'=>'2016-07-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'e24',
            'medecin_id'=>466
        ] );

        Rapport::create( [
            'id'=>330,
            'date'=>'2016-07-18',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'f21',
            'medecin_id'=>955
        ] );

        Rapport::create( [
            'id'=>331,
            'date'=>'2016-07-18',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'e5',
            'medecin_id'=>541
        ] );

        Rapport::create( [
            'id'=>332,
            'date'=>'2016-07-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'a131',
            'medecin_id'=>21
        ] );

        Rapport::create( [
            'id'=>333,
            'date'=>'2016-07-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'a55',
            'medecin_id'=>548
        ] );

        Rapport::create( [
            'id'=>334,
            'date'=>'2016-07-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'visiteur_id'=>'c3',
            'medecin_id'=>273
        ] );

        Rapport::create( [
            'id'=>335,
            'date'=>'2016-07-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'a55',
            'medecin_id'=>812
        ] );

        Rapport::create( [
            'id'=>336,
            'date'=>'2016-07-18',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b34',
            'medecin_id'=>625
        ] );

        Rapport::create( [
            'id'=>337,
            'date'=>'2016-07-18',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'a55',
            'medecin_id'=>662
        ] );

        Rapport::create( [
            'id'=>338,
            'date'=>'2016-07-18',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'e49',
            'medecin_id'=>65
        ] );

        Rapport::create( [
            'id'=>339,
            'date'=>'2016-07-18',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'b19',
            'medecin_id'=>91
        ] );

        Rapport::create( [
            'id'=>340,
            'date'=>'2016-07-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'c3',
            'medecin_id'=>511
        ] );

        Rapport::create( [
            'id'=>341,
            'date'=>'2016-07-19',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'f39',
            'medecin_id'=>789
        ] );

        Rapport::create( [
            'id'=>342,
            'date'=>'2016-07-19',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'a93',
            'medecin_id'=>756
        ] );

        Rapport::create( [
            'id'=>343,
            'date'=>'2016-07-19',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'f21',
            'medecin_id'=>711
        ] );

        Rapport::create( [
            'id'=>344,
            'date'=>'2016-07-19',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e39',
            'medecin_id'=>481
        ] );

        Rapport::create( [
            'id'=>345,
            'date'=>'2016-07-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b25',
            'medecin_id'=>203
        ] );

        Rapport::create( [
            'id'=>346,
            'date'=>'2016-07-19',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e5',
            'medecin_id'=>103
        ] );

        Rapport::create( [
            'id'=>347,
            'date'=>'2016-07-19',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'visiteur_id'=>'b59',
            'medecin_id'=>796
        ] );

        Rapport::create( [
            'id'=>348,
            'date'=>'2016-07-19',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'d51',
            'medecin_id'=>599
        ] );

        Rapport::create( [
            'id'=>349,
            'date'=>'2016-07-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'a17',
            'medecin_id'=>994
        ] );

        Rapport::create( [
            'id'=>350,
            'date'=>'2016-07-19',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'a17',
            'medecin_id'=>506
        ] );

        Rapport::create( [
            'id'=>351,
            'date'=>'2016-07-19',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b16',
            'medecin_id'=>669
        ] );

        Rapport::create( [
            'id'=>352,
            'date'=>'2016-07-19',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'c14',
            'medecin_id'=>935
        ] );

        Rapport::create( [
            'id'=>353,
            'date'=>'2016-07-19',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'a17',
            'medecin_id'=>367
        ] );

        Rapport::create( [
            'id'=>354,
            'date'=>'2016-07-19',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'a93',
            'medecin_id'=>385
        ] );

        Rapport::create( [
            'id'=>355,
            'date'=>'2016-07-19',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b34',
            'medecin_id'=>544
        ] );

        Rapport::create( [
            'id'=>356,
            'date'=>'2016-07-19',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'f39',
            'medecin_id'=>985
        ] );

        Rapport::create( [
            'id'=>357,
            'date'=>'2016-07-19',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'c54',
            'medecin_id'=>980
        ] );

        Rapport::create( [
            'id'=>358,
            'date'=>'2016-07-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'c54',
            'medecin_id'=>456
        ] );

        Rapport::create( [
            'id'=>359,
            'date'=>'2016-07-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'e24',
            'medecin_id'=>4
        ] );

        Rapport::create( [
            'id'=>360,
            'date'=>'2016-07-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b16',
            'medecin_id'=>318
        ] );

        Rapport::create( [
            'id'=>361,
            'date'=>'2016-07-20',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'c14',
            'medecin_id'=>19
        ] );

        Rapport::create( [
            'id'=>362,
            'date'=>'2016-07-20',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'f21',
            'medecin_id'=>751
        ] );

        Rapport::create( [
            'id'=>363,
            'date'=>'2016-07-20',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'d51',
            'medecin_id'=>13
        ] );

        Rapport::create( [
            'id'=>364,
            'date'=>'2016-07-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b16',
            'medecin_id'=>104
        ] );

        Rapport::create( [
            'id'=>365,
            'date'=>'2016-07-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'e5',
            'medecin_id'=>535
        ] );

        Rapport::create( [
            'id'=>366,
            'date'=>'2016-07-20',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'e5',
            'medecin_id'=>479
        ] );

        Rapport::create( [
            'id'=>367,
            'date'=>'2016-07-20',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b13',
            'medecin_id'=>876
        ] );

        Rapport::create( [
            'id'=>368,
            'date'=>'2016-07-20',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b16',
            'medecin_id'=>137
        ] );

        Rapport::create( [
            'id'=>369,
            'date'=>'2016-07-20',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'a131',
            'medecin_id'=>736
        ] );

        Rapport::create( [
            'id'=>370,
            'date'=>'2016-07-20',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'c3',
            'medecin_id'=>504
        ] );

        Rapport::create( [
            'id'=>371,
            'date'=>'2016-07-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'c3',
            'medecin_id'=>407
        ] );

        Rapport::create( [
            'id'=>372,
            'date'=>'2016-07-20',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b19',
            'medecin_id'=>691
        ] );

        Rapport::create( [
            'id'=>373,
            'date'=>'2016-07-20',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'d13',
            'medecin_id'=>938
        ] );

        Rapport::create( [
            'id'=>374,
            'date'=>'2016-07-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e49',
            'medecin_id'=>4
        ] );

        Rapport::create( [
            'id'=>375,
            'date'=>'2016-07-20',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'e5',
            'medecin_id'=>830
        ] );

        Rapport::create( [
            'id'=>376,
            'date'=>'2016-07-20',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b13',
            'medecin_id'=>276
        ] );

        Rapport::create( [
            'id'=>377,
            'date'=>'2016-07-20',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b34',
            'medecin_id'=>173
        ] );

        Rapport::create( [
            'id'=>378,
            'date'=>'2016-07-20',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b25',
            'medecin_id'=>424
        ] );

        Rapport::create( [
            'id'=>379,
            'date'=>'2016-07-20',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'a93',
            'medecin_id'=>628
        ] );

        Rapport::create( [
            'id'=>380,
            'date'=>'2016-07-20',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b34',
            'medecin_id'=>587
        ] );

        Rapport::create( [
            'id'=>381,
            'date'=>'2016-07-21',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b28',
            'medecin_id'=>913
        ] );

        Rapport::create( [
            'id'=>382,
            'date'=>'2016-07-21',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e39',
            'medecin_id'=>985
        ] );

        Rapport::create( [
            'id'=>383,
            'date'=>'2016-07-21',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'visiteur_id'=>'a17',
            'medecin_id'=>750
        ] );

        Rapport::create( [
            'id'=>384,
            'date'=>'2016-07-21',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b34',
            'medecin_id'=>317
        ] );

        Rapport::create( [
            'id'=>385,
            'date'=>'2016-07-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'f21',
            'medecin_id'=>584
        ] );

        Rapport::create( [
            'id'=>386,
            'date'=>'2016-07-21',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'visiteur_id'=>'b16',
            'medecin_id'=>55
        ] );

        Rapport::create( [
            'id'=>387,
            'date'=>'2016-07-21',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b25',
            'medecin_id'=>982
        ] );

        Rapport::create( [
            'id'=>388,
            'date'=>'2016-07-21',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'a131',
            'medecin_id'=>238
        ] );

        Rapport::create( [
            'id'=>389,
            'date'=>'2016-07-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b59',
            'medecin_id'=>644
        ] );

        Rapport::create( [
            'id'=>390,
            'date'=>'2016-07-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e24',
            'medecin_id'=>168
        ] );

        Rapport::create( [
            'id'=>391,
            'date'=>'2016-07-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'f21',
            'medecin_id'=>476
        ] );

        Rapport::create( [
            'id'=>392,
            'date'=>'2016-07-21',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b28',
            'medecin_id'=>926
        ] );

        Rapport::create( [
            'id'=>393,
            'date'=>'2016-07-21',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'f21',
            'medecin_id'=>694
        ] );

        Rapport::create( [
            'id'=>394,
            'date'=>'2016-07-21',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b34',
            'medecin_id'=>294
        ] );

        Rapport::create( [
            'id'=>395,
            'date'=>'2016-07-21',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'c3',
            'medecin_id'=>329
        ] );

        Rapport::create( [
            'id'=>396,
            'date'=>'2016-07-21',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b50',
            'medecin_id'=>22
        ] );

        Rapport::create( [
            'id'=>397,
            'date'=>'2016-07-21',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'a17',
            'medecin_id'=>843
        ] );

        Rapport::create( [
            'id'=>398,
            'date'=>'2016-07-21',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'c3',
            'medecin_id'=>428
        ] );

        Rapport::create( [
            'id'=>399,
            'date'=>'2016-07-21',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'e5',
            'medecin_id'=>867
        ] );

        Rapport::create( [
            'id'=>400,
            'date'=>'2016-07-21',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'d13',
            'medecin_id'=>810
        ] );

        Rapport::create( [
            'id'=>401,
            'date'=>'2016-07-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'a131',
            'medecin_id'=>720
        ] );

        Rapport::create( [
            'id'=>402,
            'date'=>'2016-07-22',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e24',
            'medecin_id'=>910
        ] );

        Rapport::create( [
            'id'=>403,
            'date'=>'2016-07-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b34',
            'medecin_id'=>467
        ] );

        Rapport::create( [
            'id'=>404,
            'date'=>'2016-07-22',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b13',
            'medecin_id'=>908
        ] );

        Rapport::create( [
            'id'=>405,
            'date'=>'2016-07-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b59',
            'medecin_id'=>629
        ] );

        Rapport::create( [
            'id'=>406,
            'date'=>'2016-07-22',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'d51',
            'medecin_id'=>253
        ] );

        Rapport::create( [
            'id'=>407,
            'date'=>'2016-07-22',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b13',
            'medecin_id'=>702
        ] );

        Rapport::create( [
            'id'=>408,
            'date'=>'2016-07-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b13',
            'medecin_id'=>549
        ] );

        Rapport::create( [
            'id'=>409,
            'date'=>'2016-07-22',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b50',
            'medecin_id'=>651
        ] );

        Rapport::create( [
            'id'=>410,
            'date'=>'2016-07-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'e24',
            'medecin_id'=>640
        ] );

        Rapport::create( [
            'id'=>411,
            'date'=>'2016-07-22',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'f21',
            'medecin_id'=>80
        ] );

        Rapport::create( [
            'id'=>412,
            'date'=>'2016-07-22',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'e22',
            'medecin_id'=>108
        ] );

        Rapport::create( [
            'id'=>413,
            'date'=>'2016-07-22',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'f21',
            'medecin_id'=>179
        ] );

        Rapport::create( [
            'id'=>414,
            'date'=>'2016-07-22',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b28',
            'medecin_id'=>406
        ] );

        Rapport::create( [
            'id'=>415,
            'date'=>'2016-07-22',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b59',
            'medecin_id'=>749
        ] );

        Rapport::create( [
            'id'=>416,
            'date'=>'2016-07-22',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'f39',
            'medecin_id'=>420
        ] );

        Rapport::create( [
            'id'=>417,
            'date'=>'2016-07-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'e39',
            'medecin_id'=>968
        ] );

        Rapport::create( [
            'id'=>418,
            'date'=>'2016-07-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'a55',
            'medecin_id'=>192
        ] );

        Rapport::create( [
            'id'=>419,
            'date'=>'2016-07-22',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'c3',
            'medecin_id'=>340
        ] );

        Rapport::create( [
            'id'=>420,
            'date'=>'2016-07-22',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'e52',
            'medecin_id'=>146
        ] );

        Rapport::create( [
            'id'=>421,
            'date'=>'2016-07-23',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'a17',
            'medecin_id'=>978
        ] );

        Rapport::create( [
            'id'=>422,
            'date'=>'2016-07-23',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'visiteur_id'=>'b28',
            'medecin_id'=>678
        ] );

        Rapport::create( [
            'id'=>423,
            'date'=>'2016-07-23',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'visiteur_id'=>'f39',
            'medecin_id'=>68
        ] );

        Rapport::create( [
            'id'=>424,
            'date'=>'2016-07-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'visiteur_id'=>'b59',
            'medecin_id'=>23
        ] );

        Rapport::create( [
            'id'=>425,
            'date'=>'2016-07-23',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'a55',
            'medecin_id'=>549
        ] );

        Rapport::create( [
            'id'=>426,
            'date'=>'2016-07-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'a93',
            'medecin_id'=>115
        ] );

        Rapport::create( [
            'id'=>427,
            'date'=>'2016-07-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'a131',
            'medecin_id'=>375
        ] );

        Rapport::create( [
            'id'=>428,
            'date'=>'2016-07-23',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e5',
            'medecin_id'=>100
        ] );

        Rapport::create( [
            'id'=>429,
            'date'=>'2016-07-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'f21',
            'medecin_id'=>116
        ] );

        Rapport::create( [
            'id'=>430,
            'date'=>'2016-07-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'visiteur_id'=>'e5',
            'medecin_id'=>989
        ] );

        Rapport::create( [
            'id'=>431,
            'date'=>'2016-07-23',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'c3',
            'medecin_id'=>931
        ] );

        Rapport::create( [
            'id'=>432,
            'date'=>'2016-07-23',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'visiteur_id'=>'f21',
            'medecin_id'=>159
        ] );

        Rapport::create( [
            'id'=>433,
            'date'=>'2016-07-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b13',
            'medecin_id'=>23
        ] );

        Rapport::create( [
            'id'=>434,
            'date'=>'2016-07-23',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e49',
            'medecin_id'=>43
        ] );

        Rapport::create( [
            'id'=>435,
            'date'=>'2016-07-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'a93',
            'medecin_id'=>783
        ] );

        Rapport::create( [
            'id'=>436,
            'date'=>'2016-07-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b19',
            'medecin_id'=>443
        ] );

        Rapport::create( [
            'id'=>437,
            'date'=>'2016-07-23',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b16',
            'medecin_id'=>930
        ] );

        Rapport::create( [
            'id'=>438,
            'date'=>'2016-07-23',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'a17',
            'medecin_id'=>157
        ] );

        Rapport::create( [
            'id'=>439,
            'date'=>'2016-07-23',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'a17',
            'medecin_id'=>177
        ] );

        Rapport::create( [
            'id'=>440,
            'date'=>'2016-07-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'c3',
            'medecin_id'=>831
        ] );

        Rapport::create( [
            'id'=>441,
            'date'=>'2016-07-24',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'f39',
            'medecin_id'=>881
        ] );

        Rapport::create( [
            'id'=>442,
            'date'=>'2016-07-24',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'c54',
            'medecin_id'=>519
        ] );

        Rapport::create( [
            'id'=>443,
            'date'=>'2016-07-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b16',
            'medecin_id'=>6
        ] );

        Rapport::create( [
            'id'=>444,
            'date'=>'2016-07-24',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'f39',
            'medecin_id'=>556
        ] );

        Rapport::create( [
            'id'=>445,
            'date'=>'2016-07-24',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'e24',
            'medecin_id'=>681
        ] );

        Rapport::create( [
            'id'=>446,
            'date'=>'2016-07-24',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'visiteur_id'=>'a55',
            'medecin_id'=>39
        ] );

        Rapport::create( [
            'id'=>447,
            'date'=>'2016-07-24',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'visiteur_id'=>'b4',
            'medecin_id'=>408
        ] );

        Rapport::create( [
            'id'=>448,
            'date'=>'2016-07-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e49',
            'medecin_id'=>719
        ] );

        Rapport::create( [
            'id'=>449,
            'date'=>'2016-07-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'f39',
            'medecin_id'=>148
        ] );

        Rapport::create( [
            'id'=>450,
            'date'=>'2016-07-24',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'d13',
            'medecin_id'=>330
        ] );

        Rapport::create( [
            'id'=>451,
            'date'=>'2016-07-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b50',
            'medecin_id'=>139
        ] );

        Rapport::create( [
            'id'=>452,
            'date'=>'2016-07-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'b25',
            'medecin_id'=>538
        ] );

        Rapport::create( [
            'id'=>453,
            'date'=>'2016-07-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b25',
            'medecin_id'=>99
        ] );

        Rapport::create( [
            'id'=>454,
            'date'=>'2016-07-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'a131',
            'medecin_id'=>815
        ] );

        Rapport::create( [
            'id'=>455,
            'date'=>'2016-07-24',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b4',
            'medecin_id'=>784
        ] );

        Rapport::create( [
            'id'=>456,
            'date'=>'2016-07-24',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b16',
            'medecin_id'=>813
        ] );

        Rapport::create( [
            'id'=>457,
            'date'=>'2016-07-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'c54',
            'medecin_id'=>590
        ] );

        Rapport::create( [
            'id'=>458,
            'date'=>'2016-07-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'c54',
            'medecin_id'=>495
        ] );

        Rapport::create( [
            'id'=>459,
            'date'=>'2016-07-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b4',
            'medecin_id'=>129
        ] );

        Rapport::create( [
            'id'=>460,
            'date'=>'2016-07-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e5',
            'medecin_id'=>434
        ] );

        Rapport::create( [
            'id'=>461,
            'date'=>'2016-07-25',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b25',
            'medecin_id'=>794
        ] );

        Rapport::create( [
            'id'=>462,
            'date'=>'2016-07-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b25',
            'medecin_id'=>507
        ] );

        Rapport::create( [
            'id'=>463,
            'date'=>'2016-07-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b4',
            'medecin_id'=>12
        ] );

        Rapport::create( [
            'id'=>464,
            'date'=>'2016-07-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'e5',
            'medecin_id'=>80
        ] );

        Rapport::create( [
            'id'=>465,
            'date'=>'2016-07-25',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'a17',
            'medecin_id'=>685
        ] );

        Rapport::create( [
            'id'=>466,
            'date'=>'2016-07-25',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'b4',
            'medecin_id'=>260
        ] );

        Rapport::create( [
            'id'=>467,
            'date'=>'2016-07-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'d13',
            'medecin_id'=>18
        ] );

        Rapport::create( [
            'id'=>468,
            'date'=>'2016-07-25',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b19',
            'medecin_id'=>780
        ] );

        Rapport::create( [
            'id'=>469,
            'date'=>'2016-07-25',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'a131',
            'medecin_id'=>608
        ] );

        Rapport::create( [
            'id'=>470,
            'date'=>'2016-07-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b50',
            'medecin_id'=>335
        ] );

        Rapport::create( [
            'id'=>471,
            'date'=>'2016-07-25',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b28',
            'medecin_id'=>988
        ] );

        Rapport::create( [
            'id'=>472,
            'date'=>'2016-07-25',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'c14',
            'medecin_id'=>610
        ] );

        Rapport::create( [
            'id'=>473,
            'date'=>'2016-07-25',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'d51',
            'medecin_id'=>919
        ] );

        Rapport::create( [
            'id'=>474,
            'date'=>'2016-07-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'f39',
            'medecin_id'=>63
        ] );

        Rapport::create( [
            'id'=>475,
            'date'=>'2016-07-25',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'visiteur_id'=>'e52',
            'medecin_id'=>548
        ] );

        Rapport::create( [
            'id'=>476,
            'date'=>'2016-07-25',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'a131',
            'medecin_id'=>393
        ] );

        Rapport::create( [
            'id'=>477,
            'date'=>'2016-07-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'f21',
            'medecin_id'=>16
        ] );

        Rapport::create( [
            'id'=>478,
            'date'=>'2016-07-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b16',
            'medecin_id'=>23
        ] );

        Rapport::create( [
            'id'=>479,
            'date'=>'2016-07-25',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b59',
            'medecin_id'=>333
        ] );

        Rapport::create( [
            'id'=>480,
            'date'=>'2016-07-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'e49',
            'medecin_id'=>309
        ] );

        Rapport::create( [
            'id'=>481,
            'date'=>'2016-07-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'visiteur_id'=>'b50',
            'medecin_id'=>143
        ] );

        Rapport::create( [
            'id'=>482,
            'date'=>'2016-07-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e5',
            'medecin_id'=>872
        ] );

        Rapport::create( [
            'id'=>483,
            'date'=>'2016-07-26',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b13',
            'medecin_id'=>841
        ] );

        Rapport::create( [
            'id'=>484,
            'date'=>'2016-07-26',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b16',
            'medecin_id'=>943
        ] );

        Rapport::create( [
            'id'=>485,
            'date'=>'2016-07-26',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'a55',
            'medecin_id'=>818
        ] );

        Rapport::create( [
            'id'=>486,
            'date'=>'2016-07-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'e39',
            'medecin_id'=>293
        ] );

        Rapport::create( [
            'id'=>487,
            'date'=>'2016-07-26',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e24',
            'medecin_id'=>176
        ] );

        Rapport::create( [
            'id'=>488,
            'date'=>'2016-07-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'d51',
            'medecin_id'=>31
        ] );

        Rapport::create( [
            'id'=>489,
            'date'=>'2016-07-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b19',
            'medecin_id'=>85
        ] );

        Rapport::create( [
            'id'=>490,
            'date'=>'2016-07-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b13',
            'medecin_id'=>546
        ] );

        Rapport::create( [
            'id'=>491,
            'date'=>'2016-07-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'a17',
            'medecin_id'=>841
        ] );

        Rapport::create( [
            'id'=>492,
            'date'=>'2016-07-26',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b59',
            'medecin_id'=>278
        ] );

        Rapport::create( [
            'id'=>493,
            'date'=>'2016-07-26',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b19',
            'medecin_id'=>453
        ] );

        Rapport::create( [
            'id'=>494,
            'date'=>'2016-07-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'visiteur_id'=>'d51',
            'medecin_id'=>792
        ] );

        Rapport::create( [
            'id'=>495,
            'date'=>'2016-07-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'a131',
            'medecin_id'=>566
        ] );

        Rapport::create( [
            'id'=>496,
            'date'=>'2016-07-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b13',
            'medecin_id'=>305
        ] );

        Rapport::create( [
            'id'=>497,
            'date'=>'2016-07-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'d13',
            'medecin_id'=>948
        ] );

        Rapport::create( [
            'id'=>498,
            'date'=>'2016-07-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'a93',
            'medecin_id'=>184
        ] );

        Rapport::create( [
            'id'=>499,
            'date'=>'2016-07-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'a17',
            'medecin_id'=>571
        ] );

        Rapport::create( [
            'id'=>500,
            'date'=>'2016-07-26',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b13',
            'medecin_id'=>784
        ] );

        Rapport::create( [
            'id'=>501,
            'date'=>'2016-07-27',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'d51',
            'medecin_id'=>168
        ] );

        Rapport::create( [
            'id'=>502,
            'date'=>'2016-07-27',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'e22',
            'medecin_id'=>224
        ] );

        Rapport::create( [
            'id'=>503,
            'date'=>'2016-07-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'e5',
            'medecin_id'=>627
        ] );

        Rapport::create( [
            'id'=>504,
            'date'=>'2016-07-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'f21',
            'medecin_id'=>45
        ] );

        Rapport::create( [
            'id'=>505,
            'date'=>'2016-07-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'c3',
            'medecin_id'=>967
        ] );

        Rapport::create( [
            'id'=>506,
            'date'=>'2016-07-27',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'d13',
            'medecin_id'=>358
        ] );

        Rapport::create( [
            'id'=>507,
            'date'=>'2016-07-27',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'e22',
            'medecin_id'=>758
        ] );

        Rapport::create( [
            'id'=>508,
            'date'=>'2016-07-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b28',
            'medecin_id'=>278
        ] );

        Rapport::create( [
            'id'=>509,
            'date'=>'2016-07-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b4',
            'medecin_id'=>147
        ] );

        Rapport::create( [
            'id'=>510,
            'date'=>'2016-07-27',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e52',
            'medecin_id'=>47
        ] );

        Rapport::create( [
            'id'=>511,
            'date'=>'2016-07-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'a131',
            'medecin_id'=>192
        ] );

        Rapport::create( [
            'id'=>512,
            'date'=>'2016-07-27',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b25',
            'medecin_id'=>129
        ] );

        Rapport::create( [
            'id'=>513,
            'date'=>'2016-07-27',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'d51',
            'medecin_id'=>711
        ] );

        Rapport::create( [
            'id'=>514,
            'date'=>'2016-07-27',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'a17',
            'medecin_id'=>628
        ] );

        Rapport::create( [
            'id'=>515,
            'date'=>'2016-07-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e39',
            'medecin_id'=>327
        ] );

        Rapport::create( [
            'id'=>516,
            'date'=>'2016-07-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b25',
            'medecin_id'=>831
        ] );

        Rapport::create( [
            'id'=>517,
            'date'=>'2016-07-27',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'d13',
            'medecin_id'=>664
        ] );

        Rapport::create( [
            'id'=>518,
            'date'=>'2016-07-27',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'a131',
            'medecin_id'=>914
        ] );

        Rapport::create( [
            'id'=>519,
            'date'=>'2016-07-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'c3',
            'medecin_id'=>344
        ] );

        Rapport::create( [
            'id'=>520,
            'date'=>'2016-07-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'a17',
            'medecin_id'=>873
        ] );

        Rapport::create( [
            'id'=>521,
            'date'=>'2016-07-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'a93',
            'medecin_id'=>900
        ] );

        Rapport::create( [
            'id'=>522,
            'date'=>'2016-07-28',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e5',
            'medecin_id'=>752
        ] );

        Rapport::create( [
            'id'=>523,
            'date'=>'2016-07-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b28',
            'medecin_id'=>708
        ] );

        Rapport::create( [
            'id'=>524,
            'date'=>'2016-07-28',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'c14',
            'medecin_id'=>459
        ] );

        Rapport::create( [
            'id'=>525,
            'date'=>'2016-07-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'a17',
            'medecin_id'=>709
        ] );

        Rapport::create( [
            'id'=>526,
            'date'=>'2016-07-28',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e52',
            'medecin_id'=>821
        ] );

        Rapport::create( [
            'id'=>527,
            'date'=>'2016-07-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'e5',
            'medecin_id'=>886
        ] );

        Rapport::create( [
            'id'=>528,
            'date'=>'2016-07-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'a55',
            'medecin_id'=>400
        ] );

        Rapport::create( [
            'id'=>529,
            'date'=>'2016-07-28',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'c3',
            'medecin_id'=>943
        ] );

        Rapport::create( [
            'id'=>530,
            'date'=>'2016-07-28',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b4',
            'medecin_id'=>495
        ] );

        Rapport::create( [
            'id'=>531,
            'date'=>'2016-07-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b59',
            'medecin_id'=>437
        ] );

        Rapport::create( [
            'id'=>532,
            'date'=>'2016-07-28',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e22',
            'medecin_id'=>265
        ] );

        Rapport::create( [
            'id'=>533,
            'date'=>'2016-07-28',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b19',
            'medecin_id'=>321
        ] );

        Rapport::create( [
            'id'=>534,
            'date'=>'2016-07-28',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'a131',
            'medecin_id'=>142
        ] );

        Rapport::create( [
            'id'=>535,
            'date'=>'2016-07-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e52',
            'medecin_id'=>684
        ] );

        Rapport::create( [
            'id'=>536,
            'date'=>'2016-07-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'a55',
            'medecin_id'=>471
        ] );

        Rapport::create( [
            'id'=>537,
            'date'=>'2016-07-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b50',
            'medecin_id'=>322
        ] );

        Rapport::create( [
            'id'=>538,
            'date'=>'2016-07-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'d13',
            'medecin_id'=>703
        ] );

        Rapport::create( [
            'id'=>539,
            'date'=>'2016-07-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'a131',
            'medecin_id'=>971
        ] );

        Rapport::create( [
            'id'=>540,
            'date'=>'2016-07-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b28',
            'medecin_id'=>700
        ] );

        Rapport::create( [
            'id'=>541,
            'date'=>'2016-07-29',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'e52',
            'medecin_id'=>580
        ] );

        Rapport::create( [
            'id'=>542,
            'date'=>'2016-07-29',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'a131',
            'medecin_id'=>885
        ] );

        Rapport::create( [
            'id'=>543,
            'date'=>'2016-07-29',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b25',
            'medecin_id'=>493
        ] );

        Rapport::create( [
            'id'=>544,
            'date'=>'2016-07-29',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'e24',
            'medecin_id'=>699
        ] );

        Rapport::create( [
            'id'=>545,
            'date'=>'2016-07-29',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'visiteur_id'=>'e39',
            'medecin_id'=>566
        ] );

        Rapport::create( [
            'id'=>546,
            'date'=>'2016-07-29',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b19',
            'medecin_id'=>411
        ] );

        Rapport::create( [
            'id'=>547,
            'date'=>'2016-07-29',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'c14',
            'medecin_id'=>790
        ] );

        Rapport::create( [
            'id'=>548,
            'date'=>'2016-07-29',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'visiteur_id'=>'f39',
            'medecin_id'=>184
        ] );

        Rapport::create( [
            'id'=>549,
            'date'=>'2016-07-29',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'d13',
            'medecin_id'=>152
        ] );

        Rapport::create( [
            'id'=>550,
            'date'=>'2016-07-29',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'a131',
            'medecin_id'=>865
        ] );

        Rapport::create( [
            'id'=>551,
            'date'=>'2016-07-29',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b50',
            'medecin_id'=>619
        ] );

        Rapport::create( [
            'id'=>552,
            'date'=>'2016-07-29',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b16',
            'medecin_id'=>78
        ] );

        Rapport::create( [
            'id'=>553,
            'date'=>'2016-07-29',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'a93',
            'medecin_id'=>127
        ] );

        Rapport::create( [
            'id'=>554,
            'date'=>'2016-07-29',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'e5',
            'medecin_id'=>682
        ] );

        Rapport::create( [
            'id'=>555,
            'date'=>'2016-07-29',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'a93',
            'medecin_id'=>917
        ] );

        Rapport::create( [
            'id'=>556,
            'date'=>'2016-07-29',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'c3',
            'medecin_id'=>864
        ] );

        Rapport::create( [
            'id'=>557,
            'date'=>'2016-07-29',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'c14',
            'medecin_id'=>316
        ] );

        Rapport::create( [
            'id'=>558,
            'date'=>'2016-07-29',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'c54',
            'medecin_id'=>320
        ] );

        Rapport::create( [
            'id'=>559,
            'date'=>'2016-07-29',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'d51',
            'medecin_id'=>274
        ] );

        Rapport::create( [
            'id'=>560,
            'date'=>'2016-07-29',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'a55',
            'medecin_id'=>298
        ] );

        Rapport::create( [
            'id'=>561,
            'date'=>'2016-07-30',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'f21',
            'medecin_id'=>33
        ] );

        Rapport::create( [
            'id'=>562,
            'date'=>'2016-07-30',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b59',
            'medecin_id'=>205
        ] );

        Rapport::create( [
            'id'=>563,
            'date'=>'2016-07-30',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e39',
            'medecin_id'=>611
        ] );

        Rapport::create( [
            'id'=>564,
            'date'=>'2016-07-30',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'c54',
            'medecin_id'=>635
        ] );

        Rapport::create( [
            'id'=>565,
            'date'=>'2016-07-30',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b16',
            'medecin_id'=>205
        ] );

        Rapport::create( [
            'id'=>566,
            'date'=>'2016-07-30',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'f39',
            'medecin_id'=>251
        ] );

        Rapport::create( [
            'id'=>567,
            'date'=>'2016-07-30',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'a93',
            'medecin_id'=>788
        ] );

        Rapport::create( [
            'id'=>568,
            'date'=>'2016-07-30',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'e24',
            'medecin_id'=>748
        ] );

        Rapport::create( [
            'id'=>569,
            'date'=>'2016-07-30',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'c3',
            'medecin_id'=>813
        ] );

        Rapport::create( [
            'id'=>570,
            'date'=>'2016-07-30',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'f39',
            'medecin_id'=>542
        ] );

        Rapport::create( [
            'id'=>574,
            'date'=>'2016-11-24',
            'motif'=>'installation récente',
            'bilan'=>'très positif',
            'visiteur_id'=>'a131',
            'medecin_id'=>172
        ] );

        Rapport::create( [
            'id'=>575,
            'date'=>'2016-11-22',
            'motif'=>'installation récente',
            'bilan'=>'très positif',
            'visiteur_id'=>'a131',
            'medecin_id'=>443
        ] );

        Rapport::create( [
            'id'=>576,
            'date'=>'2016-11-22',
            'motif'=>'installation récente',
            'bilan'=>'très positif',
            'visiteur_id'=>'a131',
            'medecin_id'=>521
        ] );

        Rapport::create( [
            'id'=>577,
            'date'=>'2016-11-17',
            'motif'=>'nouveau',
            'bilan'=>'positif',
            'visiteur_id'=>'a131',
            'medecin_id'=>41
        ] );

        Rapport::create( [
            'id'=>578,
            'date'=>'2016-11-09',
            'motif'=>'installation',
            'bilan'=>'positif',
            'visiteur_id'=>'a131',
            'medecin_id'=>821
        ] );

        Rapport::create( [
            'id'=>579,
            'date'=>'2016-11-09',
            'motif'=>'installation',
            'bilan'=>'positif',
            'visiteur_id'=>'a131',
            'medecin_id'=>821
        ] );

        Rapport::create( [
            'id'=>580,
            'date'=>'2016-11-09',
            'motif'=>'installation',
            'bilan'=>'positif',
            'visiteur_id'=>'a131',
            'medecin_id'=>821
        ] );

        Rapport::create( [
            'id'=>581,
            'date'=>'2016-11-09',
            'motif'=>'installation',
            'bilan'=>'positif',
            'visiteur_id'=>'a131',
            'medecin_id'=>821
        ] );

        Rapport::create( [
            'id'=>582,
            'date'=>'2016-11-09',
            'motif'=>'installation',
            'bilan'=>'positif',
            'visiteur_id'=>'a131',
            'medecin_id'=>821
        ] );

        Rapport::create( [
            'id'=>583,
            'date'=>'2016-11-09',
            'motif'=>'installation',
            'bilan'=>'positif',
            'visiteur_id'=>'a131',
            'medecin_id'=>821
        ] );

        Rapport::create( [
            'id'=>584,
            'date'=>'2016-11-09',
            'motif'=>'installation',
            'bilan'=>'positif',
            'visiteur_id'=>'a131',
            'medecin_id'=>821
        ] );

        Rapport::create( [
            'id'=>585,
            'date'=>'2016-07-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'b16',
            'medecin_id'=>14
        ] );

        Rapport::create( [
            'id'=>586,
            'date'=>'2014-08-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'a93',
            'medecin_id'=>14
        ] );

        Rapport::create( [
            'id'=>588,
            'date'=>'2015-10-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'a131',
            'medecin_id'=>14
        ] );

        Rapport::create( [
            'id'=>589,
            'date'=>'2013-09-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e49',
            'medecin_id'=>14
        ] );

        Rapport::create( [
            'id'=>590,
            'date'=>'2017-02-05',
            'motif'=>'Conseil d\'un collègue',
            'bilan'=>'Très positif',
            'visiteur_id'=>'a131',
            'medecin_id'=>28
        ] );

        Rapport::create( [
            'id'=>591,
            'date'=>'2016-07-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'b16',
            'medecin_id'=>14
        ] );

        Rapport::create( [
            'id'=>593,
            'date'=>'2015-07-09',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'a93',
            'medecin_id'=>14
        ] );

        Rapport::create( [
            'id'=>594,
            'date'=>'2015-10-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'a131',
            'medecin_id'=>14
        ] );

        Rapport::create( [
            'id'=>596,
            'date'=>'2016-11-05',
            'motif'=>'Nouveau médecin, prise de contact',
            'bilan'=>'Très positif, très intéressé, à revoir au plus vite',
            'visiteur_id'=>'a131',
            'medecin_id'=>614
        ] );

        Rapport::create( [
            'id'=>597,
            'date'=>'2016-11-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très pressé, peu ouvert mais très courtois, écoute avec intérêt. En attente de résultats',
            'visiteur_id'=>'a131',
            'medecin_id'=>87
        ] );

        Rapport::create( [
            'id'=>598,
            'date'=>'2017-02-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'Intéressée, je dois la revoir le mois prochain ou dans deux mois, prévoir un rendez-vous',
            'visiteur_id'=>'a131',
            'medecin_id'=>577
        ] );

        Rapport::create( [
            'id'=>602,
            'date'=>'2017-02-05',
            'motif'=>'Visite demandée',
            'bilan'=>'A revoir',
            'visiteur_id'=>'a131',
            'medecin_id'=>299
        ] );

        Rapport::create( [
            'id'=>603,
            'date'=>'2017-03-02',
            'motif'=>'zaza',
            'bilan'=>'zaaza',
            'visiteur_id'=>'a131',
            'medecin_id'=>14
        ] );

        Rapport::create( [
            'id'=>604,
            'date'=>'2017-03-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'Positif, à revoir dans 3 mois',
            'visiteur_id'=>'a131',
            'medecin_id'=>14
        ] );

        Rapport::create( [
            'id'=>605,
            'date'=>'2016-10-20',
            'motif'=>'Visite annuelle',
            'bilan'=>'Positif',
            'visiteur_id'=>'a131',
            'medecin_id'=>28
        ] );

        Rapport::create( [
            'id'=>607,
            'date'=>'2017-03-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Positif',
            'visiteur_id'=>'a131',
            'medecin_id'=>454
        ] );

        Rapport::create( [
            'id'=>611,
            'date'=>'2017-03-01',
            'motif'=>'aaa',
            'bilan'=>'aaaa',
            'visiteur_id'=>'a131',
            'medecin_id'=>577
        ] );

        Rapport::create( [
            'id'=>620,
            'date'=>'2016-12-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'c14',
            'medecin_id'=>1
        ] );

        Rapport::create( [
            'id'=>621,
            'date'=>'2017-02-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b13',
            'medecin_id'=>2
        ] );

        Rapport::create( [
            'id'=>622,
            'date'=>'2017-03-28',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'d51',
            'medecin_id'=>3
        ] );

        Rapport::create( [
            'id'=>623,
            'date'=>'2017-02-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'a93',
            'medecin_id'=>4
        ] );

        Rapport::create( [
            'id'=>624,
            'date'=>'2016-10-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b4',
            'medecin_id'=>5
        ] );

        Rapport::create( [
            'id'=>625,
            'date'=>'2017-03-24',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'a131',
            'medecin_id'=>6
        ] );

        Rapport::create( [
            'id'=>626,
            'date'=>'2016-11-06',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'a131',
            'medecin_id'=>7
        ] );

        Rapport::create( [
            'id'=>627,
            'date'=>'2016-12-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'b25',
            'medecin_id'=>8
        ] );

        Rapport::create( [
            'id'=>628,
            'date'=>'2017-03-29',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b13',
            'medecin_id'=>9
        ] );

        Rapport::create( [
            'id'=>629,
            'date'=>'2016-10-31',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b25',
            'medecin_id'=>10
        ] );

        Rapport::create( [
            'id'=>630,
            'date'=>'2017-02-28',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'e39',
            'medecin_id'=>11
        ] );

        Rapport::create( [
            'id'=>631,
            'date'=>'2016-10-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'c3',
            'medecin_id'=>12
        ] );

        Rapport::create( [
            'id'=>632,
            'date'=>'2017-03-08',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'c3',
            'medecin_id'=>13
        ] );

        Rapport::create( [
            'id'=>633,
            'date'=>'2017-03-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e22',
            'medecin_id'=>14
        ] );

        Rapport::create( [
            'id'=>634,
            'date'=>'2016-11-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b13',
            'medecin_id'=>15
        ] );

        Rapport::create( [
            'id'=>635,
            'date'=>'2017-02-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'a55',
            'medecin_id'=>16
        ] );

        Rapport::create( [
            'id'=>636,
            'date'=>'2017-02-12',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'c3',
            'medecin_id'=>17
        ] );

        Rapport::create( [
            'id'=>637,
            'date'=>'2017-02-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'f39',
            'medecin_id'=>18
        ] );

        Rapport::create( [
            'id'=>638,
            'date'=>'2017-02-06',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'b50',
            'medecin_id'=>19
        ] );

        Rapport::create( [
            'id'=>639,
            'date'=>'2017-03-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b25',
            'medecin_id'=>20
        ] );

        Rapport::create( [
            'id'=>640,
            'date'=>'2017-03-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b13',
            'medecin_id'=>21
        ] );

        Rapport::create( [
            'id'=>641,
            'date'=>'2016-11-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'c3',
            'medecin_id'=>22
        ] );

        Rapport::create( [
            'id'=>642,
            'date'=>'2016-11-10',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b59',
            'medecin_id'=>23
        ] );

        Rapport::create( [
            'id'=>643,
            'date'=>'2017-03-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'d13',
            'medecin_id'=>24
        ] );

        Rapport::create( [
            'id'=>644,
            'date'=>'2017-02-06',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b25',
            'medecin_id'=>25
        ] );

        Rapport::create( [
            'id'=>645,
            'date'=>'2016-10-25',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'e5',
            'medecin_id'=>26
        ] );

        Rapport::create( [
            'id'=>646,
            'date'=>'2016-11-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b34',
            'medecin_id'=>27
        ] );

        Rapport::create( [
            'id'=>647,
            'date'=>'2017-02-14',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b28',
            'medecin_id'=>28
        ] );

        Rapport::create( [
            'id'=>648,
            'date'=>'2017-02-27',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e49',
            'medecin_id'=>29
        ] );

        Rapport::create( [
            'id'=>649,
            'date'=>'2017-03-27',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'c54',
            'medecin_id'=>30
        ] );

        Rapport::create( [
            'id'=>650,
            'date'=>'2016-12-01',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'d13',
            'medecin_id'=>31
        ] );

        Rapport::create( [
            'id'=>651,
            'date'=>'2016-10-01',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'a131',
            'medecin_id'=>32
        ] );

        Rapport::create( [
            'id'=>652,
            'date'=>'2017-02-27',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'a93',
            'medecin_id'=>33
        ] );

        Rapport::create( [
            'id'=>653,
            'date'=>'2017-03-09',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'d51',
            'medecin_id'=>34
        ] );

        Rapport::create( [
            'id'=>654,
            'date'=>'2017-04-01',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'e22',
            'medecin_id'=>35
        ] );

        Rapport::create( [
            'id'=>655,
            'date'=>'2016-11-08',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'d51',
            'medecin_id'=>36
        ] );

        Rapport::create( [
            'id'=>656,
            'date'=>'2016-11-07',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'e24',
            'medecin_id'=>37
        ] );

        Rapport::create( [
            'id'=>657,
            'date'=>'2016-11-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'a131',
            'medecin_id'=>38
        ] );

        Rapport::create( [
            'id'=>658,
            'date'=>'2017-04-02',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e52',
            'medecin_id'=>39
        ] );

        Rapport::create( [
            'id'=>659,
            'date'=>'2017-03-06',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'e22',
            'medecin_id'=>40
        ] );

        Rapport::create( [
            'id'=>660,
            'date'=>'2016-12-09',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'d51',
            'medecin_id'=>41
        ] );

        Rapport::create( [
            'id'=>661,
            'date'=>'2017-02-24',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'a55',
            'medecin_id'=>42
        ] );

        Rapport::create( [
            'id'=>662,
            'date'=>'2017-03-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'c14',
            'medecin_id'=>43
        ] );

        Rapport::create( [
            'id'=>663,
            'date'=>'2017-02-13',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b13',
            'medecin_id'=>44
        ] );

        Rapport::create( [
            'id'=>664,
            'date'=>'2016-12-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b4',
            'medecin_id'=>45
        ] );

        Rapport::create( [
            'id'=>665,
            'date'=>'2017-03-09',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'f21',
            'medecin_id'=>46
        ] );

        Rapport::create( [
            'id'=>666,
            'date'=>'2016-11-24',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b19',
            'medecin_id'=>47
        ] );

        Rapport::create( [
            'id'=>667,
            'date'=>'2017-02-19',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'d51',
            'medecin_id'=>48
        ] );

        Rapport::create( [
            'id'=>668,
            'date'=>'2017-01-10',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b25',
            'medecin_id'=>49
        ] );

        Rapport::create( [
            'id'=>669,
            'date'=>'2017-01-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b59',
            'medecin_id'=>50
        ] );

        Rapport::create( [
            'id'=>670,
            'date'=>'2016-10-16',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'c3',
            'medecin_id'=>51
        ] );

        Rapport::create( [
            'id'=>671,
            'date'=>'2017-03-28',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e49',
            'medecin_id'=>52
        ] );

        Rapport::create( [
            'id'=>672,
            'date'=>'2016-11-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'a55',
            'medecin_id'=>53
        ] );

        Rapport::create( [
            'id'=>673,
            'date'=>'2017-03-02',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'e5',
            'medecin_id'=>54
        ] );

        Rapport::create( [
            'id'=>674,
            'date'=>'2016-10-30',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'f39',
            'medecin_id'=>55
        ] );

        Rapport::create( [
            'id'=>675,
            'date'=>'2017-01-08',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'d13',
            'medecin_id'=>56
        ] );

        Rapport::create( [
            'id'=>676,
            'date'=>'2017-03-11',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'visiteur_id'=>'b59',
            'medecin_id'=>57
        ] );

        Rapport::create( [
            'id'=>677,
            'date'=>'2017-02-23',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'a55',
            'medecin_id'=>58
        ] );

        Rapport::create( [
            'id'=>678,
            'date'=>'2017-02-28',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b13',
            'medecin_id'=>59
        ] );

        Rapport::create( [
            'id'=>679,
            'date'=>'2017-02-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'a17',
            'medecin_id'=>60
        ] );

        Rapport::create( [
            'id'=>680,
            'date'=>'2016-12-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'f21',
            'medecin_id'=>61
        ] );

        Rapport::create( [
            'id'=>681,
            'date'=>'2017-02-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'a17',
            'medecin_id'=>62
        ] );

        Rapport::create( [
            'id'=>682,
            'date'=>'2016-11-25',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e39',
            'medecin_id'=>63
        ] );

        Rapport::create( [
            'id'=>683,
            'date'=>'2017-03-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e39',
            'medecin_id'=>64
        ] );

        Rapport::create( [
            'id'=>684,
            'date'=>'2016-11-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'d13',
            'medecin_id'=>65
        ] );

        Rapport::create( [
            'id'=>685,
            'date'=>'2016-11-11',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'a55',
            'medecin_id'=>66
        ] );

        Rapport::create( [
            'id'=>686,
            'date'=>'2016-10-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e39',
            'medecin_id'=>67
        ] );

        Rapport::create( [
            'id'=>687,
            'date'=>'2016-10-30',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'f39',
            'medecin_id'=>68
        ] );

        Rapport::create( [
            'id'=>688,
            'date'=>'2017-02-11',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'a55',
            'medecin_id'=>69
        ] );

        Rapport::create( [
            'id'=>689,
            'date'=>'2016-11-08',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'a131',
            'medecin_id'=>70
        ] );

        Rapport::create( [
            'id'=>690,
            'date'=>'2016-12-04',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b16',
            'medecin_id'=>71
        ] );

        Rapport::create( [
            'id'=>691,
            'date'=>'2017-04-05',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e39',
            'medecin_id'=>72
        ] );

        Rapport::create( [
            'id'=>692,
            'date'=>'2016-10-03',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b4',
            'medecin_id'=>73
        ] );

        Rapport::create( [
            'id'=>693,
            'date'=>'2016-12-22',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'c14',
            'medecin_id'=>74
        ] );

        Rapport::create( [
            'id'=>694,
            'date'=>'2016-12-01',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b16',
            'medecin_id'=>75
        ] );

        Rapport::create( [
            'id'=>695,
            'date'=>'2016-12-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'c14',
            'medecin_id'=>76
        ] );

        Rapport::create( [
            'id'=>696,
            'date'=>'2016-11-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b59',
            'medecin_id'=>77
        ] );

        Rapport::create( [
            'id'=>697,
            'date'=>'2016-12-24',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'e49',
            'medecin_id'=>78
        ] );

        Rapport::create( [
            'id'=>698,
            'date'=>'2016-11-19',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b19',
            'medecin_id'=>79
        ] );

        Rapport::create( [
            'id'=>699,
            'date'=>'2017-02-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b13',
            'medecin_id'=>80
        ] );

        Rapport::create( [
            'id'=>700,
            'date'=>'2016-11-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'d13',
            'medecin_id'=>81
        ] );

        Rapport::create( [
            'id'=>701,
            'date'=>'2017-03-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b25',
            'medecin_id'=>82
        ] );

        Rapport::create( [
            'id'=>702,
            'date'=>'2017-01-08',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b13',
            'medecin_id'=>83
        ] );

        Rapport::create( [
            'id'=>703,
            'date'=>'2017-01-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b13',
            'medecin_id'=>84
        ] );

        Rapport::create( [
            'id'=>704,
            'date'=>'2016-10-17',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e24',
            'medecin_id'=>85
        ] );

        Rapport::create( [
            'id'=>705,
            'date'=>'2017-03-05',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'a93',
            'medecin_id'=>86
        ] );

        Rapport::create( [
            'id'=>706,
            'date'=>'2017-03-31',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'d51',
            'medecin_id'=>87
        ] );

        Rapport::create( [
            'id'=>707,
            'date'=>'2016-10-14',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b50',
            'medecin_id'=>88
        ] );

        Rapport::create( [
            'id'=>708,
            'date'=>'2017-03-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'e5',
            'medecin_id'=>89
        ] );

        Rapport::create( [
            'id'=>709,
            'date'=>'2016-12-16',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b4',
            'medecin_id'=>90
        ] );

        Rapport::create( [
            'id'=>710,
            'date'=>'2017-01-31',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b4',
            'medecin_id'=>91
        ] );

        Rapport::create( [
            'id'=>711,
            'date'=>'2016-10-18',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b59',
            'medecin_id'=>92
        ] );

        Rapport::create( [
            'id'=>712,
            'date'=>'2016-11-03',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'f39',
            'medecin_id'=>93
        ] );

        Rapport::create( [
            'id'=>713,
            'date'=>'2017-03-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b34',
            'medecin_id'=>94
        ] );

        Rapport::create( [
            'id'=>714,
            'date'=>'2016-11-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'e49',
            'medecin_id'=>95
        ] );

        Rapport::create( [
            'id'=>715,
            'date'=>'2017-02-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'e52',
            'medecin_id'=>96
        ] );

        Rapport::create( [
            'id'=>716,
            'date'=>'2016-11-01',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e52',
            'medecin_id'=>97
        ] );

        Rapport::create( [
            'id'=>717,
            'date'=>'2017-03-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'e49',
            'medecin_id'=>98
        ] );

        Rapport::create( [
            'id'=>718,
            'date'=>'2016-10-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'f21',
            'medecin_id'=>99
        ] );

        Rapport::create( [
            'id'=>719,
            'date'=>'2017-03-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'visiteur_id'=>'b59',
            'medecin_id'=>100
        ] );

        Rapport::create( [
            'id'=>720,
            'date'=>'2017-03-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'e52',
            'medecin_id'=>101
        ] );

        Rapport::create( [
            'id'=>721,
            'date'=>'2017-01-01',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b59',
            'medecin_id'=>102
        ] );

        Rapport::create( [
            'id'=>722,
            'date'=>'2016-11-24',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e24',
            'medecin_id'=>103
        ] );

        Rapport::create( [
            'id'=>723,
            'date'=>'2017-01-14',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'e22',
            'medecin_id'=>104
        ] );

        Rapport::create( [
            'id'=>724,
            'date'=>'2017-02-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e24',
            'medecin_id'=>105
        ] );

        Rapport::create( [
            'id'=>725,
            'date'=>'2016-10-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b59',
            'medecin_id'=>106
        ] );

        Rapport::create( [
            'id'=>726,
            'date'=>'2016-12-10',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b25',
            'medecin_id'=>107
        ] );

        Rapport::create( [
            'id'=>727,
            'date'=>'2016-11-18',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b19',
            'medecin_id'=>108
        ] );

        Rapport::create( [
            'id'=>728,
            'date'=>'2017-01-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'visiteur_id'=>'a131',
            'medecin_id'=>109
        ] );

        Rapport::create( [
            'id'=>729,
            'date'=>'2016-12-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b25',
            'medecin_id'=>110
        ] );

        Rapport::create( [
            'id'=>730,
            'date'=>'2017-03-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'a55',
            'medecin_id'=>111
        ] );

        Rapport::create( [
            'id'=>731,
            'date'=>'2016-10-03',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b25',
            'medecin_id'=>112
        ] );

        Rapport::create( [
            'id'=>732,
            'date'=>'2017-03-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e24',
            'medecin_id'=>113
        ] );

        Rapport::create( [
            'id'=>733,
            'date'=>'2017-02-17',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b59',
            'medecin_id'=>114
        ] );

        Rapport::create( [
            'id'=>734,
            'date'=>'2017-04-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'a93',
            'medecin_id'=>115
        ] );

        Rapport::create( [
            'id'=>735,
            'date'=>'2017-04-10',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'e39',
            'medecin_id'=>116
        ] );

        Rapport::create( [
            'id'=>736,
            'date'=>'2016-10-23',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b25',
            'medecin_id'=>117
        ] );

        Rapport::create( [
            'id'=>737,
            'date'=>'2017-03-01',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b28',
            'medecin_id'=>118
        ] );

        Rapport::create( [
            'id'=>738,
            'date'=>'2017-02-11',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b19',
            'medecin_id'=>119
        ] );

        Rapport::create( [
            'id'=>739,
            'date'=>'2017-02-16',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b25',
            'medecin_id'=>120
        ] );

        Rapport::create( [
            'id'=>740,
            'date'=>'2016-10-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'e39',
            'medecin_id'=>121
        ] );

        Rapport::create( [
            'id'=>741,
            'date'=>'2016-11-03',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b25',
            'medecin_id'=>122
        ] );

        Rapport::create( [
            'id'=>742,
            'date'=>'2017-03-21',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'visiteur_id'=>'b34',
            'medecin_id'=>123
        ] );

        Rapport::create( [
            'id'=>743,
            'date'=>'2017-02-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b59',
            'medecin_id'=>124
        ] );

        Rapport::create( [
            'id'=>744,
            'date'=>'2017-02-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'visiteur_id'=>'c54',
            'medecin_id'=>125
        ] );

        Rapport::create( [
            'id'=>745,
            'date'=>'2017-03-26',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b13',
            'medecin_id'=>126
        ] );

        Rapport::create( [
            'id'=>746,
            'date'=>'2016-10-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'e24',
            'medecin_id'=>127
        ] );

        Rapport::create( [
            'id'=>747,
            'date'=>'2016-12-03',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b4',
            'medecin_id'=>128
        ] );

        Rapport::create( [
            'id'=>748,
            'date'=>'2017-01-21',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b34',
            'medecin_id'=>129
        ] );

        Rapport::create( [
            'id'=>749,
            'date'=>'2017-03-21',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'b28',
            'medecin_id'=>130
        ] );

        Rapport::create( [
            'id'=>750,
            'date'=>'2017-03-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b16',
            'medecin_id'=>131
        ] );

        Rapport::create( [
            'id'=>751,
            'date'=>'2017-02-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b34',
            'medecin_id'=>132
        ] );

        Rapport::create( [
            'id'=>752,
            'date'=>'2017-02-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'e5',
            'medecin_id'=>133
        ] );

        Rapport::create( [
            'id'=>753,
            'date'=>'2017-01-26',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'a131',
            'medecin_id'=>134
        ] );

        Rapport::create( [
            'id'=>754,
            'date'=>'2016-10-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'b16',
            'medecin_id'=>135
        ] );

        Rapport::create( [
            'id'=>755,
            'date'=>'2017-02-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e22',
            'medecin_id'=>136
        ] );

        Rapport::create( [
            'id'=>756,
            'date'=>'2017-03-01',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b59',
            'medecin_id'=>137
        ] );

        Rapport::create( [
            'id'=>757,
            'date'=>'2016-11-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'b16',
            'medecin_id'=>138
        ] );

        Rapport::create( [
            'id'=>758,
            'date'=>'2016-11-09',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'a131',
            'medecin_id'=>139
        ] );

        Rapport::create( [
            'id'=>759,
            'date'=>'2017-01-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b13',
            'medecin_id'=>140
        ] );

        Rapport::create( [
            'id'=>760,
            'date'=>'2016-12-11',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'e49',
            'medecin_id'=>141
        ] );

        Rapport::create( [
            'id'=>761,
            'date'=>'2017-01-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'d51',
            'medecin_id'=>142
        ] );

        Rapport::create( [
            'id'=>762,
            'date'=>'2017-03-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'c54',
            'medecin_id'=>143
        ] );

        Rapport::create( [
            'id'=>763,
            'date'=>'2017-02-26',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'a17',
            'medecin_id'=>144
        ] );

        Rapport::create( [
            'id'=>764,
            'date'=>'2017-03-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'a17',
            'medecin_id'=>145
        ] );

        Rapport::create( [
            'id'=>765,
            'date'=>'2016-10-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'d51',
            'medecin_id'=>146
        ] );

        Rapport::create( [
            'id'=>766,
            'date'=>'2017-03-20',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e52',
            'medecin_id'=>147
        ] );

        Rapport::create( [
            'id'=>767,
            'date'=>'2016-11-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'e22',
            'medecin_id'=>148
        ] );

        Rapport::create( [
            'id'=>768,
            'date'=>'2017-03-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'a131',
            'medecin_id'=>149
        ] );

        Rapport::create( [
            'id'=>769,
            'date'=>'2017-02-21',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e49',
            'medecin_id'=>150
        ] );

        Rapport::create( [
            'id'=>770,
            'date'=>'2017-03-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'a17',
            'medecin_id'=>151
        ] );

        Rapport::create( [
            'id'=>771,
            'date'=>'2017-02-14',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'e24',
            'medecin_id'=>152
        ] );

        Rapport::create( [
            'id'=>772,
            'date'=>'2016-10-20',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'e5',
            'medecin_id'=>153
        ] );

        Rapport::create( [
            'id'=>773,
            'date'=>'2017-03-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b16',
            'medecin_id'=>154
        ] );

        Rapport::create( [
            'id'=>774,
            'date'=>'2017-01-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'a93',
            'medecin_id'=>155
        ] );

        Rapport::create( [
            'id'=>775,
            'date'=>'2016-11-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b50',
            'medecin_id'=>156
        ] );

        Rapport::create( [
            'id'=>776,
            'date'=>'2017-02-16',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b19',
            'medecin_id'=>157
        ] );

        Rapport::create( [
            'id'=>777,
            'date'=>'2017-01-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e24',
            'medecin_id'=>158
        ] );

        Rapport::create( [
            'id'=>778,
            'date'=>'2017-01-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'f39',
            'medecin_id'=>159
        ] );

        Rapport::create( [
            'id'=>779,
            'date'=>'2017-01-10',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e49',
            'medecin_id'=>160
        ] );

        Rapport::create( [
            'id'=>780,
            'date'=>'2017-04-06',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'c14',
            'medecin_id'=>161
        ] );

        Rapport::create( [
            'id'=>781,
            'date'=>'2016-11-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b34',
            'medecin_id'=>162
        ] );

        Rapport::create( [
            'id'=>782,
            'date'=>'2016-12-23',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b25',
            'medecin_id'=>163
        ] );

        Rapport::create( [
            'id'=>783,
            'date'=>'2016-11-03',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'f21',
            'medecin_id'=>164
        ] );

        Rapport::create( [
            'id'=>784,
            'date'=>'2017-02-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'a55',
            'medecin_id'=>165
        ] );


        Rapport::create( [
            'id'=>785,
            'date'=>'2016-11-11',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'c3',
            'medecin_id'=>166
        ] );

        Rapport::create( [
            'id'=>786,
            'date'=>'2016-11-30',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b19',
            'medecin_id'=>167
        ] );

        Rapport::create( [
            'id'=>787,
            'date'=>'2016-11-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b28',
            'medecin_id'=>168
        ] );

        Rapport::create( [
            'id'=>788,
            'date'=>'2017-01-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b34',
            'medecin_id'=>169
        ] );

        Rapport::create( [
            'id'=>789,
            'date'=>'2016-10-19',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'a93',
            'medecin_id'=>170
        ] );

        Rapport::create( [
            'id'=>790,
            'date'=>'2017-02-19',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'f39',
            'medecin_id'=>171
        ] );

        Rapport::create( [
            'id'=>791,
            'date'=>'2017-04-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'c3',
            'medecin_id'=>172
        ] );

        Rapport::create( [
            'id'=>792,
            'date'=>'2016-10-16',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b28',
            'medecin_id'=>173
        ] );

        Rapport::create( [
            'id'=>793,
            'date'=>'2017-03-11',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'e22',
            'medecin_id'=>174
        ] );

        Rapport::create( [
            'id'=>794,
            'date'=>'2017-02-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'e52',
            'medecin_id'=>175
        ] );

        Rapport::create( [
            'id'=>795,
            'date'=>'2016-11-24',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b28',
            'medecin_id'=>176
        ] );

        Rapport::create( [
            'id'=>796,
            'date'=>'2017-04-01',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'a131',
            'medecin_id'=>177
        ] );

        Rapport::create( [
            'id'=>797,
            'date'=>'2017-03-13',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'d51',
            'medecin_id'=>178
        ] );

        Rapport::create( [
            'id'=>798,
            'date'=>'2016-10-10',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'e24',
            'medecin_id'=>179
        ] );

        Rapport::create( [
            'id'=>799,
            'date'=>'2016-12-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b19',
            'medecin_id'=>180
        ] );

        Rapport::create( [
            'id'=>800,
            'date'=>'2017-03-08',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e5',
            'medecin_id'=>181
        ] );

        Rapport::create( [
            'id'=>801,
            'date'=>'2017-02-28',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'c54',
            'medecin_id'=>182
        ] );

        Rapport::create( [
            'id'=>802,
            'date'=>'2017-01-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e49',
            'medecin_id'=>183
        ] );

        Rapport::create( [
            'id'=>803,
            'date'=>'2017-02-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'a55',
            'medecin_id'=>184
        ] );

        Rapport::create( [
            'id'=>804,
            'date'=>'2016-11-25',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'visiteur_id'=>'e24',
            'medecin_id'=>185
        ] );

        Rapport::create( [
            'id'=>805,
            'date'=>'2016-11-22',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'e52',
            'medecin_id'=>186
        ] );

        Rapport::create( [
            'id'=>806,
            'date'=>'2017-01-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'c3',
            'medecin_id'=>187
        ] );

        Rapport::create( [
            'id'=>807,
            'date'=>'2016-12-31',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'c14',
            'medecin_id'=>188
        ] );

        Rapport::create( [
            'id'=>808,
            'date'=>'2017-02-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'c14',
            'medecin_id'=>189
        ] );

        Rapport::create( [
            'id'=>809,
            'date'=>'2017-01-01',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'c14',
            'medecin_id'=>190
        ] );

        Rapport::create( [
            'id'=>810,
            'date'=>'2017-02-27',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b28',
            'medecin_id'=>191
        ] );

        Rapport::create( [
            'id'=>811,
            'date'=>'2017-01-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'e49',
            'medecin_id'=>192
        ] );

        Rapport::create( [
            'id'=>812,
            'date'=>'2016-12-16',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'e5',
            'medecin_id'=>193
        ] );

        Rapport::create( [
            'id'=>813,
            'date'=>'2016-10-28',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b16',
            'medecin_id'=>194
        ] );

        Rapport::create( [
            'id'=>814,
            'date'=>'2016-10-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'a17',
            'medecin_id'=>195
        ] );

        Rapport::create( [
            'id'=>815,
            'date'=>'2016-10-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'d51',
            'medecin_id'=>196
        ] );

        Rapport::create( [
            'id'=>816,
            'date'=>'2016-10-31',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e22',
            'medecin_id'=>197
        ] );

        Rapport::create( [
            'id'=>817,
            'date'=>'2016-10-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'f39',
            'medecin_id'=>198
        ] );

        Rapport::create( [
            'id'=>818,
            'date'=>'2017-04-06',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'a17',
            'medecin_id'=>199
        ] );

        Rapport::create( [
            'id'=>819,
            'date'=>'2016-10-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b59',
            'medecin_id'=>200
        ] );

        Rapport::create( [
            'id'=>820,
            'date'=>'2017-02-26',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'a93',
            'medecin_id'=>201
        ] );

        Rapport::create( [
            'id'=>821,
            'date'=>'2016-12-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'e5',
            'medecin_id'=>202
        ] );

        Rapport::create( [
            'id'=>822,
            'date'=>'2016-10-08',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b16',
            'medecin_id'=>203
        ] );

        Rapport::create( [
            'id'=>823,
            'date'=>'2017-03-28',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'e49',
            'medecin_id'=>204
        ] );

        Rapport::create( [
            'id'=>824,
            'date'=>'2016-10-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b50',
            'medecin_id'=>205
        ] );

        Rapport::create( [
            'id'=>825,
            'date'=>'2017-03-21',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'a17',
            'medecin_id'=>206
        ] );

        Rapport::create( [
            'id'=>826,
            'date'=>'2017-02-15',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'c54',
            'medecin_id'=>207
        ] );

        Rapport::create( [
            'id'=>827,
            'date'=>'2017-03-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'d13',
            'medecin_id'=>208
        ] );

        Rapport::create( [
            'id'=>828,
            'date'=>'2017-04-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'d51',
            'medecin_id'=>209
        ] );

        Rapport::create( [
            'id'=>829,
            'date'=>'2017-02-26',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e22',
            'medecin_id'=>210
        ] );

        Rapport::create( [
            'id'=>830,
            'date'=>'2017-02-19',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b16',
            'medecin_id'=>211
        ] );

        Rapport::create( [
            'id'=>831,
            'date'=>'2017-03-19',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b50',
            'medecin_id'=>212
        ] );

        Rapport::create( [
            'id'=>832,
            'date'=>'2016-11-03',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'b28',
            'medecin_id'=>213
        ] );

        Rapport::create( [
            'id'=>833,
            'date'=>'2016-11-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'c14',
            'medecin_id'=>214
        ] );

        Rapport::create( [
            'id'=>834,
            'date'=>'2017-02-27',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'e52',
            'medecin_id'=>215
        ] );

        Rapport::create( [
            'id'=>835,
            'date'=>'2017-01-11',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'visiteur_id'=>'a93',
            'medecin_id'=>216
        ] );

        Rapport::create( [
            'id'=>836,
            'date'=>'2017-03-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'f21',
            'medecin_id'=>217
        ] );

        Rapport::create( [
            'id'=>837,
            'date'=>'2016-11-04',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'a131',
            'medecin_id'=>218
        ] );

        Rapport::create( [
            'id'=>838,
            'date'=>'2017-01-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'c54',
            'medecin_id'=>219
        ] );

        Rapport::create( [
            'id'=>839,
            'date'=>'2017-01-11',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b19',
            'medecin_id'=>220
        ] );

        Rapport::create( [
            'id'=>840,
            'date'=>'2016-12-22',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'d51',
            'medecin_id'=>221
        ] );

        Rapport::create( [
            'id'=>841,
            'date'=>'2017-03-25',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'a131',
            'medecin_id'=>222
        ] );

        Rapport::create( [
            'id'=>842,
            'date'=>'2016-12-03',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'c54',
            'medecin_id'=>223
        ] );

        Rapport::create( [
            'id'=>843,
            'date'=>'2017-01-21',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e52',
            'medecin_id'=>224
        ] );

        Rapport::create( [
            'id'=>844,
            'date'=>'2016-11-10',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'a131',
            'medecin_id'=>225
        ] );

        Rapport::create( [
            'id'=>845,
            'date'=>'2016-10-31',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b59',
            'medecin_id'=>226
        ] );

        Rapport::create( [
            'id'=>846,
            'date'=>'2016-10-19',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'e22',
            'medecin_id'=>227
        ] );

        Rapport::create( [
            'id'=>847,
            'date'=>'2016-11-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'b19',
            'medecin_id'=>228
        ] );

        Rapport::create( [
            'id'=>848,
            'date'=>'2017-04-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'a131',
            'medecin_id'=>229
        ] );

        Rapport::create( [
            'id'=>849,
            'date'=>'2016-12-16',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'a17',
            'medecin_id'=>230
        ] );

        Rapport::create( [
            'id'=>850,
            'date'=>'2016-12-18',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'b34',
            'medecin_id'=>231
        ] );

        Rapport::create( [
            'id'=>851,
            'date'=>'2017-03-03',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'a55',
            'medecin_id'=>232
        ] );

        Rapport::create( [
            'id'=>852,
            'date'=>'2016-12-01',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'f21',
            'medecin_id'=>233
        ] );

        Rapport::create( [
            'id'=>853,
            'date'=>'2016-10-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b25',
            'medecin_id'=>234
        ] );

        Rapport::create( [
            'id'=>854,
            'date'=>'2016-11-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'e52',
            'medecin_id'=>235
        ] );

        Rapport::create( [
            'id'=>855,
            'date'=>'2017-03-29',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b25',
            'medecin_id'=>236
        ] );

        Rapport::create( [
            'id'=>856,
            'date'=>'2017-03-03',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'b34',
            'medecin_id'=>237
        ] );

        Rapport::create( [
            'id'=>857,
            'date'=>'2017-03-30',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'e39',
            'medecin_id'=>238
        ] );

        Rapport::create( [
            'id'=>858,
            'date'=>'2016-11-30',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'e52',
            'medecin_id'=>239
        ] );

        Rapport::create( [
            'id'=>859,
            'date'=>'2017-01-05',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'d13',
            'medecin_id'=>240
        ] );

        Rapport::create( [
            'id'=>860,
            'date'=>'2017-01-11',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b28',
            'medecin_id'=>241
        ] );

        Rapport::create( [
            'id'=>861,
            'date'=>'2017-02-01',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e24',
            'medecin_id'=>242
        ] );

        Rapport::create( [
            'id'=>862,
            'date'=>'2016-10-18',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b50',
            'medecin_id'=>243
        ] );

        Rapport::create( [
            'id'=>863,
            'date'=>'2017-03-18',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'d51',
            'medecin_id'=>244
        ] );

        Rapport::create( [
            'id'=>864,
            'date'=>'2016-12-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'a55',
            'medecin_id'=>245
        ] );

        Rapport::create( [
            'id'=>865,
            'date'=>'2017-03-10',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'a93',
            'medecin_id'=>246
        ] );

        Rapport::create( [
            'id'=>866,
            'date'=>'2016-12-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e24',
            'medecin_id'=>247
        ] );

        Rapport::create( [
            'id'=>867,
            'date'=>'2017-01-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b34',
            'medecin_id'=>248
        ] );

        Rapport::create( [
            'id'=>868,
            'date'=>'2016-11-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'a93',
            'medecin_id'=>249
        ] );

        Rapport::create( [
            'id'=>869,
            'date'=>'2016-12-06',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e22',
            'medecin_id'=>250
        ] );

        Rapport::create( [
            'id'=>870,
            'date'=>'2017-01-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e22',
            'medecin_id'=>251
        ] );

        Rapport::create( [
            'id'=>871,
            'date'=>'2016-12-20',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'f21',
            'medecin_id'=>252
        ] );

        Rapport::create( [
            'id'=>872,
            'date'=>'2016-11-13',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'a93',
            'medecin_id'=>253
        ] );

        Rapport::create( [
            'id'=>873,
            'date'=>'2016-11-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b4',
            'medecin_id'=>254
        ] );

        Rapport::create( [
            'id'=>874,
            'date'=>'2017-01-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'a131',
            'medecin_id'=>255
        ] );

        Rapport::create( [
            'id'=>875,
            'date'=>'2016-12-23',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e5',
            'medecin_id'=>256
        ] );

        Rapport::create( [
            'id'=>876,
            'date'=>'2016-12-16',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e52',
            'medecin_id'=>257
        ] );

        Rapport::create( [
            'id'=>877,
            'date'=>'2017-04-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e5',
            'medecin_id'=>258
        ] );

        Rapport::create( [
            'id'=>878,
            'date'=>'2017-02-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'e5',
            'medecin_id'=>259
        ] );

        Rapport::create( [
            'id'=>879,
            'date'=>'2017-03-14',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b19',
            'medecin_id'=>260
        ] );

        Rapport::create( [
            'id'=>880,
            'date'=>'2017-02-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'d13',
            'medecin_id'=>261
        ] );

        Rapport::create( [
            'id'=>881,
            'date'=>'2017-02-19',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'d51',
            'medecin_id'=>262
        ] );

        Rapport::create( [
            'id'=>882,
            'date'=>'2016-10-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'a17',
            'medecin_id'=>263
        ] );

        Rapport::create( [
            'id'=>883,
            'date'=>'2017-01-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'a55',
            'medecin_id'=>264
        ] );

        Rapport::create( [
            'id'=>884,
            'date'=>'2017-03-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'f39',
            'medecin_id'=>265
        ] );

        Rapport::create( [
            'id'=>885,
            'date'=>'2017-04-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b16',
            'medecin_id'=>266
        ] );

        Rapport::create( [
            'id'=>886,
            'date'=>'2017-02-03',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b34',
            'medecin_id'=>267
        ] );

        Rapport::create( [
            'id'=>887,
            'date'=>'2016-10-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'a55',
            'medecin_id'=>268
        ] );

        Rapport::create( [
            'id'=>888,
            'date'=>'2017-01-14',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'e22',
            'medecin_id'=>269
        ] );

        Rapport::create( [
            'id'=>889,
            'date'=>'2017-03-31',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e22',
            'medecin_id'=>270
        ] );

        Rapport::create( [
            'id'=>890,
            'date'=>'2016-12-09',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'a131',
            'medecin_id'=>271
        ] );

        Rapport::create( [
            'id'=>891,
            'date'=>'2017-01-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'f39',
            'medecin_id'=>272
        ] );

        Rapport::create( [
            'id'=>892,
            'date'=>'2017-02-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b50',
            'medecin_id'=>273
        ] );

        Rapport::create( [
            'id'=>893,
            'date'=>'2016-10-30',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'c54',
            'medecin_id'=>274
        ] );

        Rapport::create( [
            'id'=>894,
            'date'=>'2017-03-03',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'a17',
            'medecin_id'=>275
        ] );

        Rapport::create( [
            'id'=>895,
            'date'=>'2016-11-04',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b13',
            'medecin_id'=>276
        ] );

        Rapport::create( [
            'id'=>896,
            'date'=>'2016-12-16',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'e39',
            'medecin_id'=>277
        ] );

        Rapport::create( [
            'id'=>897,
            'date'=>'2016-11-27',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b19',
            'medecin_id'=>278
        ] );

        Rapport::create( [
            'id'=>898,
            'date'=>'2016-11-14',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'b50',
            'medecin_id'=>279
        ] );

        Rapport::create( [
            'id'=>899,
            'date'=>'2016-11-26',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b34',
            'medecin_id'=>280
        ] );

        Rapport::create( [
            'id'=>900,
            'date'=>'2016-12-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'c54',
            'medecin_id'=>281
        ] );

        Rapport::create( [
            'id'=>901,
            'date'=>'2017-03-21',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e39',
            'medecin_id'=>282
        ] );

        Rapport::create( [
            'id'=>902,
            'date'=>'2016-12-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'c54',
            'medecin_id'=>283
        ] );

        Rapport::create( [
            'id'=>903,
            'date'=>'2017-01-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'d13',
            'medecin_id'=>284
        ] );

        Rapport::create( [
            'id'=>904,
            'date'=>'2017-03-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'a131',
            'medecin_id'=>285
        ] );

        Rapport::create( [
            'id'=>905,
            'date'=>'2017-02-22',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'a17',
            'medecin_id'=>286
        ] );

        Rapport::create( [
            'id'=>906,
            'date'=>'2016-11-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'c14',
            'medecin_id'=>287
        ] );

        Rapport::create( [
            'id'=>907,
            'date'=>'2016-10-24',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e5',
            'medecin_id'=>288
        ] );

        Rapport::create( [
            'id'=>908,
            'date'=>'2017-01-29',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'d51',
            'medecin_id'=>289
        ] );

        Rapport::create( [
            'id'=>909,
            'date'=>'2017-04-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b16',
            'medecin_id'=>290
        ] );

        Rapport::create( [
            'id'=>910,
            'date'=>'2017-01-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b59',
            'medecin_id'=>291
        ] );

        Rapport::create( [
            'id'=>911,
            'date'=>'2017-02-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'a93',
            'medecin_id'=>292
        ] );

        Rapport::create( [
            'id'=>912,
            'date'=>'2016-10-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'d51',
            'medecin_id'=>293
        ] );

        Rapport::create( [
            'id'=>913,
            'date'=>'2016-11-25',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e49',
            'medecin_id'=>294
        ] );

        Rapport::create( [
            'id'=>914,
            'date'=>'2017-03-14',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'a131',
            'medecin_id'=>295
        ] );

        Rapport::create( [
            'id'=>915,
            'date'=>'2017-04-09',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'c3',
            'medecin_id'=>296
        ] );

        Rapport::create( [
            'id'=>916,
            'date'=>'2017-01-10',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e52',
            'medecin_id'=>297
        ] );

        Rapport::create( [
            'id'=>917,
            'date'=>'2016-12-09',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e5',
            'medecin_id'=>298
        ] );

        Rapport::create( [
            'id'=>918,
            'date'=>'2016-11-26',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'f21',
            'medecin_id'=>299
        ] );

        Rapport::create( [
            'id'=>919,
            'date'=>'2016-10-31',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'d13',
            'medecin_id'=>300
        ] );

        Rapport::create( [
            'id'=>920,
            'date'=>'2016-10-27',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'a93',
            'medecin_id'=>301
        ] );

        Rapport::create( [
            'id'=>921,
            'date'=>'2016-12-07',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'e52',
            'medecin_id'=>302
        ] );

        Rapport::create( [
            'id'=>922,
            'date'=>'2017-04-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b25',
            'medecin_id'=>303
        ] );

        Rapport::create( [
            'id'=>923,
            'date'=>'2017-02-15',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'a17',
            'medecin_id'=>304
        ] );

        Rapport::create( [
            'id'=>924,
            'date'=>'2016-10-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'c3',
            'medecin_id'=>305
        ] );

        Rapport::create( [
            'id'=>925,
            'date'=>'2017-02-04',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b13',
            'medecin_id'=>306
        ] );

        Rapport::create( [
            'id'=>926,
            'date'=>'2016-12-01',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'e5',
            'medecin_id'=>307
        ] );

        Rapport::create( [
            'id'=>927,
            'date'=>'2016-10-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'d13',
            'medecin_id'=>308
        ] );

        Rapport::create( [
            'id'=>928,
            'date'=>'2016-11-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'e5',
            'medecin_id'=>309
        ] );

        Rapport::create( [
            'id'=>929,
            'date'=>'2017-04-09',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'e52',
            'medecin_id'=>310
        ] );

        Rapport::create( [
            'id'=>930,
            'date'=>'2017-01-12',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b4',
            'medecin_id'=>311
        ] );

        Rapport::create( [
            'id'=>931,
            'date'=>'2016-10-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'f39',
            'medecin_id'=>312
        ] );

        Rapport::create( [
            'id'=>932,
            'date'=>'2016-10-30',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b34',
            'medecin_id'=>313
        ] );

        Rapport::create( [
            'id'=>933,
            'date'=>'2016-11-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'visiteur_id'=>'b28',
            'medecin_id'=>314
        ] );

        Rapport::create( [
            'id'=>934,
            'date'=>'2016-12-01',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'d51',
            'medecin_id'=>315
        ] );

        Rapport::create( [
            'id'=>935,
            'date'=>'2016-11-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b25',
            'medecin_id'=>316
        ] );

        Rapport::create( [
            'id'=>936,
            'date'=>'2016-11-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'visiteur_id'=>'a131',
            'medecin_id'=>317
        ] );

        Rapport::create( [
            'id'=>937,
            'date'=>'2016-12-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'c54',
            'medecin_id'=>318
        ] );

        Rapport::create( [
            'id'=>938,
            'date'=>'2017-01-25',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'c3',
            'medecin_id'=>319
        ] );

        Rapport::create( [
            'id'=>939,
            'date'=>'2017-03-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e52',
            'medecin_id'=>320
        ] );

        Rapport::create( [
            'id'=>940,
            'date'=>'2017-01-06',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'d13',
            'medecin_id'=>321
        ] );

        Rapport::create( [
            'id'=>941,
            'date'=>'2017-03-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b4',
            'medecin_id'=>322
        ] );

        Rapport::create( [
            'id'=>942,
            'date'=>'2017-02-11',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'d51',
            'medecin_id'=>323
        ] );

        Rapport::create( [
            'id'=>943,
            'date'=>'2017-02-20',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e49',
            'medecin_id'=>324
        ] );

        Rapport::create( [
            'id'=>944,
            'date'=>'2016-11-23',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'e49',
            'medecin_id'=>325
        ] );

        Rapport::create( [
            'id'=>945,
            'date'=>'2016-12-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'e24',
            'medecin_id'=>326
        ] );

        Rapport::create( [
            'id'=>946,
            'date'=>'2016-12-17',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'a93',
            'medecin_id'=>327
        ] );

        Rapport::create( [
            'id'=>947,
            'date'=>'2017-03-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'f21',
            'medecin_id'=>328
        ] );

        Rapport::create( [
            'id'=>948,
            'date'=>'2016-11-01',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e39',
            'medecin_id'=>329
        ] );

        Rapport::create( [
            'id'=>949,
            'date'=>'2016-10-01',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'f39',
            'medecin_id'=>330
        ] );

        Rapport::create( [
            'id'=>950,
            'date'=>'2017-03-14',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e5',
            'medecin_id'=>331
        ] );

        Rapport::create( [
            'id'=>951,
            'date'=>'2017-03-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'a131',
            'medecin_id'=>332
        ] );

        Rapport::create( [
            'id'=>952,
            'date'=>'2016-12-21',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b19',
            'medecin_id'=>333
        ] );

        Rapport::create( [
            'id'=>953,
            'date'=>'2016-11-18',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b28',
            'medecin_id'=>334
        ] );

        Rapport::create( [
            'id'=>954,
            'date'=>'2017-03-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'c54',
            'medecin_id'=>335
        ] );

        Rapport::create( [
            'id'=>955,
            'date'=>'2017-01-18',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b16',
            'medecin_id'=>336
        ] );

        Rapport::create( [
            'id'=>956,
            'date'=>'2016-10-22',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'e39',
            'medecin_id'=>337
        ] );

        Rapport::create( [
            'id'=>957,
            'date'=>'2016-12-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'a55',
            'medecin_id'=>338
        ] );

        Rapport::create( [
            'id'=>958,
            'date'=>'2016-11-07',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'e24',
            'medecin_id'=>339
        ] );

        Rapport::create( [
            'id'=>959,
            'date'=>'2017-03-17',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'f21',
            'medecin_id'=>340
        ] );

        Rapport::create( [
            'id'=>960,
            'date'=>'2016-12-15',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'d13',
            'medecin_id'=>341
        ] );

        Rapport::create( [
            'id'=>961,
            'date'=>'2016-10-30',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'e5',
            'medecin_id'=>342
        ] );

        Rapport::create( [
            'id'=>962,
            'date'=>'2016-12-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'a17',
            'medecin_id'=>343
        ] );

        Rapport::create( [
            'id'=>963,
            'date'=>'2017-04-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'c3',
            'medecin_id'=>344
        ] );

        Rapport::create( [
            'id'=>964,
            'date'=>'2016-10-20',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b16',
            'medecin_id'=>345
        ] );

        Rapport::create( [
            'id'=>965,
            'date'=>'2017-04-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'c14',
            'medecin_id'=>346
        ] );

        Rapport::create( [
            'id'=>966,
            'date'=>'2016-12-22',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'a55',
            'medecin_id'=>347
        ] );

        Rapport::create( [
            'id'=>967,
            'date'=>'2016-11-24',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b13',
            'medecin_id'=>348
        ] );

        Rapport::create( [
            'id'=>968,
            'date'=>'2016-10-10',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'e49',
            'medecin_id'=>349
        ] );

        Rapport::create( [
            'id'=>969,
            'date'=>'2017-01-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'e52',
            'medecin_id'=>350
        ] );

        Rapport::create( [
            'id'=>970,
            'date'=>'2017-04-01',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'c14',
            'medecin_id'=>351
        ] );

        Rapport::create( [
            'id'=>971,
            'date'=>'2017-04-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b28',
            'medecin_id'=>352
        ] );

        Rapport::create( [
            'id'=>972,
            'date'=>'2017-02-23',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e22',
            'medecin_id'=>353
        ] );

        Rapport::create( [
            'id'=>973,
            'date'=>'2017-04-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'b25',
            'medecin_id'=>354
        ] );

        Rapport::create( [
            'id'=>974,
            'date'=>'2016-10-14',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'f21',
            'medecin_id'=>355
        ] );

        Rapport::create( [
            'id'=>975,
            'date'=>'2016-10-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'c54',
            'medecin_id'=>356
        ] );

        Rapport::create( [
            'id'=>976,
            'date'=>'2016-12-17',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'c54',
            'medecin_id'=>357
        ] );

        Rapport::create( [
            'id'=>977,
            'date'=>'2017-02-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'b13',
            'medecin_id'=>358
        ] );

        Rapport::create( [
            'id'=>978,
            'date'=>'2016-10-09',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b25',
            'medecin_id'=>359
        ] );

        Rapport::create( [
            'id'=>979,
            'date'=>'2017-02-08',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'d13',
            'medecin_id'=>360
        ] );

        Rapport::create( [
            'id'=>980,
            'date'=>'2016-10-01',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e49',
            'medecin_id'=>361
        ] );

        Rapport::create( [
            'id'=>981,
            'date'=>'2016-10-30',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b34',
            'medecin_id'=>362
        ] );

        Rapport::create( [
            'id'=>982,
            'date'=>'2016-11-30',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b28',
            'medecin_id'=>363
        ] );

        Rapport::create( [
            'id'=>983,
            'date'=>'2017-02-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b25',
            'medecin_id'=>364
        ] );

        Rapport::create( [
            'id'=>984,
            'date'=>'2016-10-08',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b16',
            'medecin_id'=>365
        ] );

        Rapport::create( [
            'id'=>985,
            'date'=>'2017-03-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'a93',
            'medecin_id'=>366
        ] );

        Rapport::create( [
            'id'=>986,
            'date'=>'2016-12-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'a55',
            'medecin_id'=>367
        ] );

        Rapport::create( [
            'id'=>987,
            'date'=>'2016-12-15',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e52',
            'medecin_id'=>368
        ] );

        Rapport::create( [
            'id'=>988,
            'date'=>'2017-02-09',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b4',
            'medecin_id'=>369
        ] );

        Rapport::create( [
            'id'=>989,
            'date'=>'2016-11-20',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'d13',
            'medecin_id'=>370
        ] );

        Rapport::create( [
            'id'=>990,
            'date'=>'2017-01-11',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e22',
            'medecin_id'=>371
        ] );

        Rapport::create( [
            'id'=>991,
            'date'=>'2017-03-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'e52',
            'medecin_id'=>372
        ] );

        Rapport::create( [
            'id'=>992,
            'date'=>'2016-10-18',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e49',
            'medecin_id'=>373
        ] );

        Rapport::create( [
            'id'=>993,
            'date'=>'2016-10-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b50',
            'medecin_id'=>374
        ] );

        Rapport::create( [
            'id'=>994,
            'date'=>'2017-04-18',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'d51',
            'medecin_id'=>375
        ] );

        Rapport::create( [
            'id'=>995,
            'date'=>'2016-10-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'c54',
            'medecin_id'=>376
        ] );

        Rapport::create( [
            'id'=>996,
            'date'=>'2016-11-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'a93',
            'medecin_id'=>377
        ] );

        Rapport::create( [
            'id'=>997,
            'date'=>'2016-11-03',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'visiteur_id'=>'b19',
            'medecin_id'=>378
        ] );

        Rapport::create( [
            'id'=>998,
            'date'=>'2016-12-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'a93',
            'medecin_id'=>379
        ] );

        Rapport::create( [
            'id'=>999,
            'date'=>'2016-11-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e24',
            'medecin_id'=>380
        ] );

        Rapport::create( [
            'id'=>1000,
            'date'=>'2017-04-16',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b34',
            'medecin_id'=>381
        ] );

        Rapport::create( [
            'id'=>1001,
            'date'=>'2016-12-26',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b28',
            'medecin_id'=>382
        ] );

        Rapport::create( [
            'id'=>1002,
            'date'=>'2017-02-14',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'a131',
            'medecin_id'=>383
        ] );

        Rapport::create( [
            'id'=>1003,
            'date'=>'2016-12-22',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b34',
            'medecin_id'=>384
        ] );

        Rapport::create( [
            'id'=>1004,
            'date'=>'2017-02-07',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'a131',
            'medecin_id'=>385
        ] );

        Rapport::create( [
            'id'=>1005,
            'date'=>'2016-10-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'e24',
            'medecin_id'=>386
        ] );

        Rapport::create( [
            'id'=>1006,
            'date'=>'2017-04-13',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'c3',
            'medecin_id'=>387
        ] );

        Rapport::create( [
            'id'=>1007,
            'date'=>'2017-02-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'f39',
            'medecin_id'=>388
        ] );

        Rapport::create( [
            'id'=>1008,
            'date'=>'2017-04-16',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b28',
            'medecin_id'=>389
        ] );

        Rapport::create( [
            'id'=>1009,
            'date'=>'2016-11-03',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b50',
            'medecin_id'=>390
        ] );

        Rapport::create( [
            'id'=>1010,
            'date'=>'2017-04-08',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'d13',
            'medecin_id'=>391
        ] );

        Rapport::create( [
            'id'=>1011,
            'date'=>'2017-04-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'d13',
            'medecin_id'=>392
        ] );

        Rapport::create( [
            'id'=>1012,
            'date'=>'2017-04-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'c3',
            'medecin_id'=>393
        ] );

        Rapport::create( [
            'id'=>1013,
            'date'=>'2017-01-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'d51',
            'medecin_id'=>394
        ] );

        Rapport::create( [
            'id'=>1014,
            'date'=>'2016-10-02',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b4',
            'medecin_id'=>395
        ] );

        Rapport::create( [
            'id'=>1015,
            'date'=>'2016-12-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'f21',
            'medecin_id'=>396
        ] );

        Rapport::create( [
            'id'=>1016,
            'date'=>'2016-12-14',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'visiteur_id'=>'e39',
            'medecin_id'=>397
        ] );

        Rapport::create( [
            'id'=>1017,
            'date'=>'2016-10-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'a131',
            'medecin_id'=>398
        ] );

        Rapport::create( [
            'id'=>1018,
            'date'=>'2017-01-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'d51',
            'medecin_id'=>399
        ] );

        Rapport::create( [
            'id'=>1019,
            'date'=>'2017-03-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'f21',
            'medecin_id'=>400
        ] );

        Rapport::create( [
            'id'=>1020,
            'date'=>'2016-11-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b25',
            'medecin_id'=>401
        ] );

        Rapport::create( [
            'id'=>1021,
            'date'=>'2016-11-20',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'e24',
            'medecin_id'=>402
        ] );

        Rapport::create( [
            'id'=>1022,
            'date'=>'2017-04-03',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e52',
            'medecin_id'=>403
        ] );

        Rapport::create( [
            'id'=>1023,
            'date'=>'2016-11-17',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'c54',
            'medecin_id'=>404
        ] );

        Rapport::create( [
            'id'=>1024,
            'date'=>'2017-02-12',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b59',
            'medecin_id'=>405
        ] );

        Rapport::create( [
            'id'=>1025,
            'date'=>'2016-10-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'d51',
            'medecin_id'=>406
        ] );

        Rapport::create( [
            'id'=>1026,
            'date'=>'2016-11-01',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'visiteur_id'=>'c54',
            'medecin_id'=>407
        ] );

        Rapport::create( [
            'id'=>1027,
            'date'=>'2016-10-31',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'e52',
            'medecin_id'=>408
        ] );

        Rapport::create( [
            'id'=>1028,
            'date'=>'2016-12-28',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'c54',
            'medecin_id'=>409
        ] );

        Rapport::create( [
            'id'=>1029,
            'date'=>'2017-02-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'e39',
            'medecin_id'=>410
        ] );

        Rapport::create( [
            'id'=>1030,
            'date'=>'2016-10-11',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'a131',
            'medecin_id'=>411
        ] );

        Rapport::create( [
            'id'=>1031,
            'date'=>'2017-04-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'e24',
            'medecin_id'=>412
        ] );

        Rapport::create( [
            'id'=>1032,
            'date'=>'2017-04-10',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b34',
            'medecin_id'=>413
        ] );

        Rapport::create( [
            'id'=>1033,
            'date'=>'2017-03-18',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'a93',
            'medecin_id'=>414
        ] );

        Rapport::create( [
            'id'=>1034,
            'date'=>'2016-11-11',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e39',
            'medecin_id'=>415
        ] );

        Rapport::create( [
            'id'=>1035,
            'date'=>'2017-01-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'e5',
            'medecin_id'=>416
        ] );

        Rapport::create( [
            'id'=>1036,
            'date'=>'2016-11-21',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'e39',
            'medecin_id'=>417
        ] );

        Rapport::create( [
            'id'=>1037,
            'date'=>'2017-01-14',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b25',
            'medecin_id'=>418
        ] );

        Rapport::create( [
            'id'=>1038,
            'date'=>'2017-03-14',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'e24',
            'medecin_id'=>419
        ] );

        Rapport::create( [
            'id'=>1039,
            'date'=>'2016-11-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'e5',
            'medecin_id'=>420
        ] );

        Rapport::create( [
            'id'=>1040,
            'date'=>'2017-02-14',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'d51',
            'medecin_id'=>421
        ] );

        Rapport::create( [
            'id'=>1041,
            'date'=>'2016-10-09',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'visiteur_id'=>'a93',
            'medecin_id'=>422
        ] );

        Rapport::create( [
            'id'=>1042,
            'date'=>'2017-01-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'e39',
            'medecin_id'=>423
        ] );

        Rapport::create( [
            'id'=>1043,
            'date'=>'2016-11-19',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b19',
            'medecin_id'=>424
        ] );

        Rapport::create( [
            'id'=>1044,
            'date'=>'2017-02-12',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'c14',
            'medecin_id'=>425
        ] );

        Rapport::create( [
            'id'=>1045,
            'date'=>'2017-03-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'c14',
            'medecin_id'=>426
        ] );

        Rapport::create( [
            'id'=>1046,
            'date'=>'2017-01-31',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b34',
            'medecin_id'=>427
        ] );

        Rapport::create( [
            'id'=>1047,
            'date'=>'2017-03-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'d13',
            'medecin_id'=>428
        ] );

        Rapport::create( [
            'id'=>1048,
            'date'=>'2016-11-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b19',
            'medecin_id'=>429
        ] );

        Rapport::create( [
            'id'=>1049,
            'date'=>'2016-11-04',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'e49',
            'medecin_id'=>430
        ] );

        Rapport::create( [
            'id'=>1050,
            'date'=>'2016-12-13',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b4',
            'medecin_id'=>431
        ] );

        Rapport::create( [
            'id'=>1051,
            'date'=>'2016-10-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'e52',
            'medecin_id'=>432
        ] );

        Rapport::create( [
            'id'=>1052,
            'date'=>'2016-11-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b19',
            'medecin_id'=>433
        ] );

        Rapport::create( [
            'id'=>1053,
            'date'=>'2017-03-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'d51',
            'medecin_id'=>434
        ] );

        Rapport::create( [
            'id'=>1054,
            'date'=>'2016-10-08',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'b28',
            'medecin_id'=>435
        ] );

        Rapport::create( [
            'id'=>1055,
            'date'=>'2017-03-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b34',
            'medecin_id'=>436
        ] );

        Rapport::create( [
            'id'=>1056,
            'date'=>'2016-11-11',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'f39',
            'medecin_id'=>437
        ] );

        Rapport::create( [
            'id'=>1057,
            'date'=>'2017-03-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'e24',
            'medecin_id'=>438
        ] );

        Rapport::create( [
            'id'=>1058,
            'date'=>'2016-10-29',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b50',
            'medecin_id'=>439
        ] );

        Rapport::create( [
            'id'=>1059,
            'date'=>'2017-03-04',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'c3',
            'medecin_id'=>440
        ] );

        Rapport::create( [
            'id'=>1060,
            'date'=>'2017-02-11',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'e22',
            'medecin_id'=>441
        ] );

        Rapport::create( [
            'id'=>1061,
            'date'=>'2016-10-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'f39',
            'medecin_id'=>442
        ] );

        Rapport::create( [
            'id'=>1062,
            'date'=>'2016-11-06',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'a17',
            'medecin_id'=>443
        ] );

        Rapport::create( [
            'id'=>1063,
            'date'=>'2017-03-23',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'d51',
            'medecin_id'=>444
        ] );

        Rapport::create( [
            'id'=>1064,
            'date'=>'2016-10-26',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b19',
            'medecin_id'=>445
        ] );

        Rapport::create( [
            'id'=>1065,
            'date'=>'2016-12-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b25',
            'medecin_id'=>446
        ] );

        Rapport::create( [
            'id'=>1066,
            'date'=>'2016-10-22',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'e52',
            'medecin_id'=>447
        ] );

        Rapport::create( [
            'id'=>1067,
            'date'=>'2016-10-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b16',
            'medecin_id'=>448
        ] );

        Rapport::create( [
            'id'=>1068,
            'date'=>'2017-01-26',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'b19',
            'medecin_id'=>449
        ] );

        Rapport::create( [
            'id'=>1069,
            'date'=>'2017-01-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'c14',
            'medecin_id'=>450
        ] );

        Rapport::create( [
            'id'=>1070,
            'date'=>'2017-04-08',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b34',
            'medecin_id'=>451
        ] );

        Rapport::create( [
            'id'=>1071,
            'date'=>'2017-02-26',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'d13',
            'medecin_id'=>452
        ] );

        Rapport::create( [
            'id'=>1072,
            'date'=>'2017-04-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e52',
            'medecin_id'=>453
        ] );

        Rapport::create( [
            'id'=>1073,
            'date'=>'2017-02-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'c54',
            'medecin_id'=>454
        ] );

        Rapport::create( [
            'id'=>1074,
            'date'=>'2017-01-09',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'e24',
            'medecin_id'=>455
        ] );

        Rapport::create( [
            'id'=>1075,
            'date'=>'2017-01-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'c3',
            'medecin_id'=>456
        ] );

        Rapport::create( [
            'id'=>1076,
            'date'=>'2017-01-14',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b34',
            'medecin_id'=>457
        ] );

        Rapport::create( [
            'id'=>1077,
            'date'=>'2017-03-17',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'c54',
            'medecin_id'=>458
        ] );

        Rapport::create( [
            'id'=>1078,
            'date'=>'2017-01-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e39',
            'medecin_id'=>459
        ] );

        Rapport::create( [
            'id'=>1079,
            'date'=>'2016-11-20',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'a55',
            'medecin_id'=>460
        ] );

        Rapport::create( [
            'id'=>1080,
            'date'=>'2016-12-31',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'c3',
            'medecin_id'=>461
        ] );

        Rapport::create( [
            'id'=>1081,
            'date'=>'2016-11-28',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b28',
            'medecin_id'=>462
        ] );

        Rapport::create( [
            'id'=>1082,
            'date'=>'2016-12-20',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'e24',
            'medecin_id'=>463
        ] );

        Rapport::create( [
            'id'=>1083,
            'date'=>'2017-04-01',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'a131',
            'medecin_id'=>464
        ] );

        Rapport::create( [
            'id'=>1084,
            'date'=>'2017-02-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'e22',
            'medecin_id'=>465
        ] );

        Rapport::create( [
            'id'=>1085,
            'date'=>'2017-01-10',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b25',
            'medecin_id'=>466
        ] );

        Rapport::create( [
            'id'=>1086,
            'date'=>'2016-12-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'f39',
            'medecin_id'=>467
        ] );

        Rapport::create( [
            'id'=>1087,
            'date'=>'2017-04-09',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e24',
            'medecin_id'=>468
        ] );

        Rapport::create( [
            'id'=>1088,
            'date'=>'2016-12-01',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'a93',
            'medecin_id'=>469
        ] );

        Rapport::create( [
            'id'=>1089,
            'date'=>'2017-04-16',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'c3',
            'medecin_id'=>470
        ] );

        Rapport::create( [
            'id'=>1090,
            'date'=>'2016-12-30',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e39',
            'medecin_id'=>471
        ] );

        Rapport::create( [
            'id'=>1091,
            'date'=>'2017-04-03',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'a131',
            'medecin_id'=>472
        ] );

        Rapport::create( [
            'id'=>1092,
            'date'=>'2017-02-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'a131',
            'medecin_id'=>473
        ] );

        Rapport::create( [
            'id'=>1093,
            'date'=>'2017-03-30',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'f21',
            'medecin_id'=>474
        ] );

        Rapport::create( [
            'id'=>1094,
            'date'=>'2017-02-07',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'c54',
            'medecin_id'=>475
        ] );

        Rapport::create( [
            'id'=>1095,
            'date'=>'2017-02-04',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'a55',
            'medecin_id'=>476
        ] );

        Rapport::create( [
            'id'=>1096,
            'date'=>'2017-02-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b4',
            'medecin_id'=>477
        ] );

        Rapport::create( [
            'id'=>1097,
            'date'=>'2016-11-19',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'visiteur_id'=>'b34',
            'medecin_id'=>478
        ] );

        Rapport::create( [
            'id'=>1098,
            'date'=>'2017-04-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b34',
            'medecin_id'=>479
        ] );

        Rapport::create( [
            'id'=>1099,
            'date'=>'2017-01-22',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'a131',
            'medecin_id'=>480
        ] );

        Rapport::create( [
            'id'=>1100,
            'date'=>'2016-10-02',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'d51',
            'medecin_id'=>481
        ] );

        Rapport::create( [
            'id'=>1101,
            'date'=>'2016-11-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b59',
            'medecin_id'=>482
        ] );

        Rapport::create( [
            'id'=>1102,
            'date'=>'2017-03-28',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b28',
            'medecin_id'=>483
        ] );

        Rapport::create( [
            'id'=>1103,
            'date'=>'2016-11-08',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'e5',
            'medecin_id'=>484
        ] );

        Rapport::create( [
            'id'=>1104,
            'date'=>'2017-03-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'e52',
            'medecin_id'=>485
        ] );

        Rapport::create( [
            'id'=>1105,
            'date'=>'2017-04-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'e52',
            'medecin_id'=>486
        ] );

        Rapport::create( [
            'id'=>1106,
            'date'=>'2016-11-19',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'c54',
            'medecin_id'=>487
        ] );

        Rapport::create( [
            'id'=>1107,
            'date'=>'2017-01-19',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'d13',
            'medecin_id'=>488
        ] );

        Rapport::create( [
            'id'=>1108,
            'date'=>'2016-12-01',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b25',
            'medecin_id'=>489
        ] );

        Rapport::create( [
            'id'=>1109,
            'date'=>'2016-12-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b34',
            'medecin_id'=>490
        ] );

        Rapport::create( [
            'id'=>1110,
            'date'=>'2016-10-30',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'e52',
            'medecin_id'=>491
        ] );

        Rapport::create( [
            'id'=>1111,
            'date'=>'2016-12-07',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b25',
            'medecin_id'=>492
        ] );

        Rapport::create( [
            'id'=>1112,
            'date'=>'2016-12-17',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'e22',
            'medecin_id'=>493
        ] );

        Rapport::create( [
            'id'=>1113,
            'date'=>'2017-04-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'e22',
            'medecin_id'=>494
        ] );

        Rapport::create( [
            'id'=>1114,
            'date'=>'2017-01-22',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b59',
            'medecin_id'=>495
        ] );

        Rapport::create( [
            'id'=>1115,
            'date'=>'2016-11-29',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'d13',
            'medecin_id'=>496
        ] );

        Rapport::create( [
            'id'=>1116,
            'date'=>'2017-04-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'visiteur_id'=>'a17',
            'medecin_id'=>497
        ] );

        Rapport::create( [
            'id'=>1117,
            'date'=>'2016-10-23',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'a55',
            'medecin_id'=>498
        ] );

        Rapport::create( [
            'id'=>1118,
            'date'=>'2017-04-11',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'f39',
            'medecin_id'=>499
        ] );

        Rapport::create( [
            'id'=>1119,
            'date'=>'2017-03-01',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'c3',
            'medecin_id'=>500
        ] );

        Rapport::create( [
            'id'=>1120,
            'date'=>'2017-01-25',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'a93',
            'medecin_id'=>501
        ] );

        Rapport::create( [
            'id'=>1121,
            'date'=>'2017-02-16',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'e5',
            'medecin_id'=>502
        ] );

        Rapport::create( [
            'id'=>1122,
            'date'=>'2016-10-06',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'f39',
            'medecin_id'=>503
        ] );

        Rapport::create( [
            'id'=>1123,
            'date'=>'2016-11-26',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'visiteur_id'=>'e52',
            'medecin_id'=>504
        ] );

        Rapport::create( [
            'id'=>1124,
            'date'=>'2017-04-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b59',
            'medecin_id'=>505
        ] );

        Rapport::create( [
            'id'=>1125,
            'date'=>'2017-02-12',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e24',
            'medecin_id'=>506
        ] );

        Rapport::create( [
            'id'=>1126,
            'date'=>'2017-04-02',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b13',
            'medecin_id'=>507
        ] );

        Rapport::create( [
            'id'=>1127,
            'date'=>'2017-02-09',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'d51',
            'medecin_id'=>508
        ] );

        Rapport::create( [
            'id'=>1128,
            'date'=>'2017-03-12',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'c14',
            'medecin_id'=>509
        ] );

        Rapport::create( [
            'id'=>1129,
            'date'=>'2016-10-08',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b34',
            'medecin_id'=>510
        ] );

        Rapport::create( [
            'id'=>1130,
            'date'=>'2016-11-01',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'b19',
            'medecin_id'=>511
        ] );

        Rapport::create( [
            'id'=>1131,
            'date'=>'2017-03-28',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'c3',
            'medecin_id'=>512
        ] );

        Rapport::create( [
            'id'=>1132,
            'date'=>'2017-02-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e5',
            'medecin_id'=>513
        ] );

        Rapport::create( [
            'id'=>1133,
            'date'=>'2017-04-18',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b59',
            'medecin_id'=>514
        ] );

        Rapport::create( [
            'id'=>1134,
            'date'=>'2017-01-27',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b16',
            'medecin_id'=>515
        ] );

        Rapport::create( [
            'id'=>1135,
            'date'=>'2017-03-28',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'e52',
            'medecin_id'=>516
        ] );

        Rapport::create( [
            'id'=>1136,
            'date'=>'2017-03-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b4',
            'medecin_id'=>517
        ] );

        Rapport::create( [
            'id'=>1137,
            'date'=>'2017-01-13',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b13',
            'medecin_id'=>518
        ] );

        Rapport::create( [
            'id'=>1138,
            'date'=>'2017-04-08',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'c14',
            'medecin_id'=>519
        ] );

        Rapport::create( [
            'id'=>1139,
            'date'=>'2016-10-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b4',
            'medecin_id'=>520
        ] );

        Rapport::create( [
            'id'=>1140,
            'date'=>'2017-02-13',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'e39',
            'medecin_id'=>521
        ] );

        Rapport::create( [
            'id'=>1141,
            'date'=>'2016-10-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e24',
            'medecin_id'=>522
        ] );

        Rapport::create( [
            'id'=>1142,
            'date'=>'2016-10-01',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'c54',
            'medecin_id'=>523
        ] );

        Rapport::create( [
            'id'=>1143,
            'date'=>'2017-01-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'d13',
            'medecin_id'=>524
        ] );

        Rapport::create( [
            'id'=>1144,
            'date'=>'2017-04-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e49',
            'medecin_id'=>525
        ] );

        Rapport::create( [
            'id'=>1145,
            'date'=>'2016-12-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'visiteur_id'=>'b13',
            'medecin_id'=>526
        ] );

        Rapport::create( [
            'id'=>1146,
            'date'=>'2016-10-06',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b59',
            'medecin_id'=>527
        ] );

        Rapport::create( [
            'id'=>1147,
            'date'=>'2017-03-01',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'d51',
            'medecin_id'=>528
        ] );

        Rapport::create( [
            'id'=>1148,
            'date'=>'2017-01-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'d51',
            'medecin_id'=>529
        ] );

        Rapport::create( [
            'id'=>1149,
            'date'=>'2016-10-07',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'e39',
            'medecin_id'=>530
        ] );

        Rapport::create( [
            'id'=>1150,
            'date'=>'2016-12-13',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'a55',
            'medecin_id'=>531
        ] );

        Rapport::create( [
            'id'=>1151,
            'date'=>'2017-01-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b16',
            'medecin_id'=>532
        ] );

        Rapport::create( [
            'id'=>1152,
            'date'=>'2016-10-15',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'f21',
            'medecin_id'=>533
        ] );

        Rapport::create( [
            'id'=>1153,
            'date'=>'2017-01-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b25',
            'medecin_id'=>534
        ] );

        Rapport::create( [
            'id'=>1154,
            'date'=>'2016-11-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b28',
            'medecin_id'=>535
        ] );

        Rapport::create( [
            'id'=>1155,
            'date'=>'2016-11-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'d13',
            'medecin_id'=>536
        ] );

        Rapport::create( [
            'id'=>1156,
            'date'=>'2016-10-01',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'visiteur_id'=>'e39',
            'medecin_id'=>537
        ] );

        Rapport::create( [
            'id'=>1157,
            'date'=>'2016-11-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b59',
            'medecin_id'=>538
        ] );

        Rapport::create( [
            'id'=>1158,
            'date'=>'2016-12-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'e52',
            'medecin_id'=>539
        ] );

        Rapport::create( [
            'id'=>1159,
            'date'=>'2017-04-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'e24',
            'medecin_id'=>540
        ] );

        Rapport::create( [
            'id'=>1160,
            'date'=>'2016-11-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'a55',
            'medecin_id'=>541
        ] );

        Rapport::create( [
            'id'=>1161,
            'date'=>'2017-03-01',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'c14',
            'medecin_id'=>542
        ] );

        Rapport::create( [
            'id'=>1162,
            'date'=>'2017-02-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'e24',
            'medecin_id'=>543
        ] );

        Rapport::create( [
            'id'=>1163,
            'date'=>'2017-02-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'a93',
            'medecin_id'=>544
        ] );

        Rapport::create( [
            'id'=>1164,
            'date'=>'2016-12-31',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b28',
            'medecin_id'=>545
        ] );

        Rapport::create( [
            'id'=>1165,
            'date'=>'2016-11-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'visiteur_id'=>'b25',
            'medecin_id'=>546
        ] );

        Rapport::create( [
            'id'=>1166,
            'date'=>'2016-10-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'f39',
            'medecin_id'=>547
        ] );

        Rapport::create( [
            'id'=>1167,
            'date'=>'2017-01-21',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b19',
            'medecin_id'=>548
        ] );

        Rapport::create( [
            'id'=>1168,
            'date'=>'2017-02-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b50',
            'medecin_id'=>549
        ] );

        Rapport::create( [
            'id'=>1169,
            'date'=>'2017-03-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'c3',
            'medecin_id'=>550
        ] );

        Rapport::create( [
            'id'=>1170,
            'date'=>'2016-10-26',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'visiteur_id'=>'f21',
            'medecin_id'=>551
        ] );

        Rapport::create( [
            'id'=>1171,
            'date'=>'2016-11-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'e49',
            'medecin_id'=>552
        ] );

        Rapport::create( [
            'id'=>1172,
            'date'=>'2017-04-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b16',
            'medecin_id'=>553
        ] );

        Rapport::create( [
            'id'=>1173,
            'date'=>'2017-03-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b4',
            'medecin_id'=>554
        ] );

        Rapport::create( [
            'id'=>1174,
            'date'=>'2017-02-18',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'d51',
            'medecin_id'=>555
        ] );

        Rapport::create( [
            'id'=>1175,
            'date'=>'2017-03-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'c3',
            'medecin_id'=>556
        ] );

        Rapport::create( [
            'id'=>1176,
            'date'=>'2017-04-09',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'visiteur_id'=>'e22',
            'medecin_id'=>557
        ] );

        Rapport::create( [
            'id'=>1177,
            'date'=>'2016-12-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'c3',
            'medecin_id'=>558
        ] );

        Rapport::create( [
            'id'=>1178,
            'date'=>'2017-03-23',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'e24',
            'medecin_id'=>559
        ] );

        Rapport::create( [
            'id'=>1179,
            'date'=>'2017-03-07',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'b16',
            'medecin_id'=>560
        ] );

        Rapport::create( [
            'id'=>1180,
            'date'=>'2016-12-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'b19',
            'medecin_id'=>561
        ] );

        Rapport::create( [
            'id'=>1181,
            'date'=>'2017-02-22',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b4',
            'medecin_id'=>562
        ] );

        Rapport::create( [
            'id'=>1182,
            'date'=>'2016-12-29',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'e22',
            'medecin_id'=>563
        ] );

        Rapport::create( [
            'id'=>1183,
            'date'=>'2017-03-28',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'f39',
            'medecin_id'=>564
        ] );

        Rapport::create( [
            'id'=>1184,
            'date'=>'2017-01-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'a131',
            'medecin_id'=>565
        ] );

        Rapport::create( [
            'id'=>1185,
            'date'=>'2017-03-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'e24',
            'medecin_id'=>566
        ] );

        Rapport::create( [
            'id'=>1186,
            'date'=>'2016-10-01',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b19',
            'medecin_id'=>567
        ] );

        Rapport::create( [
            'id'=>1187,
            'date'=>'2016-10-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'d13',
            'medecin_id'=>568
        ] );

        Rapport::create( [
            'id'=>1188,
            'date'=>'2016-10-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'a17',
            'medecin_id'=>569
        ] );

        Rapport::create( [
            'id'=>1189,
            'date'=>'2016-10-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'e52',
            'medecin_id'=>570
        ] );

        Rapport::create( [
            'id'=>1190,
            'date'=>'2017-03-13',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'d51',
            'medecin_id'=>571
        ] );

        Rapport::create( [
            'id'=>1191,
            'date'=>'2016-12-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'d13',
            'medecin_id'=>572
        ] );

        Rapport::create( [
            'id'=>1192,
            'date'=>'2017-03-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b28',
            'medecin_id'=>573
        ] );

        Rapport::create( [
            'id'=>1193,
            'date'=>'2016-10-14',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b19',
            'medecin_id'=>574
        ] );

        Rapport::create( [
            'id'=>1194,
            'date'=>'2016-12-06',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'e49',
            'medecin_id'=>575
        ] );

        Rapport::create( [
            'id'=>1195,
            'date'=>'2017-02-18',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'d51',
            'medecin_id'=>576
        ] );

        Rapport::create( [
            'id'=>1196,
            'date'=>'2016-10-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'a55',
            'medecin_id'=>577
        ] );

        Rapport::create( [
            'id'=>1197,
            'date'=>'2017-03-29',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'e39',
            'medecin_id'=>578
        ] );

        Rapport::create( [
            'id'=>1198,
            'date'=>'2017-01-29',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b16',
            'medecin_id'=>579
        ] );

        Rapport::create( [
            'id'=>1199,
            'date'=>'2017-03-09',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b4',
            'medecin_id'=>580
        ] );

        Rapport::create( [
            'id'=>1200,
            'date'=>'2016-11-16',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'e52',
            'medecin_id'=>581
        ] );

        Rapport::create( [
            'id'=>1201,
            'date'=>'2017-01-15',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'a17',
            'medecin_id'=>582
        ] );

        Rapport::create( [
            'id'=>1202,
            'date'=>'2016-12-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'e39',
            'medecin_id'=>583
        ] );

        Rapport::create( [
            'id'=>1203,
            'date'=>'2017-01-10',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'d13',
            'medecin_id'=>584
        ] );

        Rapport::create( [
            'id'=>1204,
            'date'=>'2016-12-07',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b25',
            'medecin_id'=>585
        ] );

        Rapport::create( [
            'id'=>1205,
            'date'=>'2017-04-09',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b13',
            'medecin_id'=>586
        ] );

        Rapport::create( [
            'id'=>1206,
            'date'=>'2016-11-29',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'f21',
            'medecin_id'=>587
        ] );

        Rapport::create( [
            'id'=>1207,
            'date'=>'2017-03-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'c3',
            'medecin_id'=>588
        ] );

        Rapport::create( [
            'id'=>1208,
            'date'=>'2017-04-04',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'f39',
            'medecin_id'=>589
        ] );

        Rapport::create( [
            'id'=>1209,
            'date'=>'2017-03-09',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e49',
            'medecin_id'=>590
        ] );

        Rapport::create( [
            'id'=>1210,
            'date'=>'2017-01-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e39',
            'medecin_id'=>591
        ] );

        Rapport::create( [
            'id'=>1211,
            'date'=>'2017-04-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'c54',
            'medecin_id'=>592
        ] );

        Rapport::create( [
            'id'=>1212,
            'date'=>'2017-04-02',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b16',
            'medecin_id'=>593
        ] );

        Rapport::create( [
            'id'=>1213,
            'date'=>'2016-11-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'d51',
            'medecin_id'=>594
        ] );

        Rapport::create( [
            'id'=>1214,
            'date'=>'2016-10-01',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'a17',
            'medecin_id'=>595
        ] );

        Rapport::create( [
            'id'=>1215,
            'date'=>'2017-01-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b25',
            'medecin_id'=>596
        ] );

        Rapport::create( [
            'id'=>1216,
            'date'=>'2017-02-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'d51',
            'medecin_id'=>597
        ] );

        Rapport::create( [
            'id'=>1217,
            'date'=>'2016-12-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'f21',
            'medecin_id'=>598
        ] );

        Rapport::create( [
            'id'=>1218,
            'date'=>'2016-12-30',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b34',
            'medecin_id'=>599
        ] );

        Rapport::create( [
            'id'=>1219,
            'date'=>'2017-04-06',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b16',
            'medecin_id'=>600
        ] );

        Rapport::create( [
            'id'=>1220,
            'date'=>'2016-11-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'b25',
            'medecin_id'=>601
        ] );

        Rapport::create( [
            'id'=>1221,
            'date'=>'2016-12-03',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'e5',
            'medecin_id'=>602
        ] );

        Rapport::create( [
            'id'=>1222,
            'date'=>'2016-12-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'c54',
            'medecin_id'=>603
        ] );

        Rapport::create( [
            'id'=>1223,
            'date'=>'2017-03-09',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'f21',
            'medecin_id'=>604
        ] );

        Rapport::create( [
            'id'=>1224,
            'date'=>'2016-12-15',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e49',
            'medecin_id'=>605
        ] );

        Rapport::create( [
            'id'=>1225,
            'date'=>'2016-11-16',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e22',
            'medecin_id'=>606
        ] );

        Rapport::create( [
            'id'=>1226,
            'date'=>'2017-02-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b4',
            'medecin_id'=>607
        ] );

        Rapport::create( [
            'id'=>1227,
            'date'=>'2016-12-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'a17',
            'medecin_id'=>608
        ] );

        Rapport::create( [
            'id'=>1228,
            'date'=>'2017-04-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b4',
            'medecin_id'=>609
        ] );

        Rapport::create( [
            'id'=>1229,
            'date'=>'2017-01-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b4',
            'medecin_id'=>610
        ] );

        Rapport::create( [
            'id'=>1230,
            'date'=>'2017-02-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b59',
            'medecin_id'=>611
        ] );

        Rapport::create( [
            'id'=>1231,
            'date'=>'2016-11-22',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b34',
            'medecin_id'=>612
        ] );

        Rapport::create( [
            'id'=>1232,
            'date'=>'2017-01-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'c3',
            'medecin_id'=>613
        ] );

        Rapport::create( [
            'id'=>1233,
            'date'=>'2017-03-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'c54',
            'medecin_id'=>614
        ] );

        Rapport::create( [
            'id'=>1234,
            'date'=>'2017-04-14',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b4',
            'medecin_id'=>615
        ] );

        Rapport::create( [
            'id'=>1235,
            'date'=>'2017-01-10',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b25',
            'medecin_id'=>616
        ] );

        Rapport::create( [
            'id'=>1236,
            'date'=>'2016-11-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b4',
            'medecin_id'=>617
        ] );

        Rapport::create( [
            'id'=>1237,
            'date'=>'2016-11-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b50',
            'medecin_id'=>618
        ] );

        Rapport::create( [
            'id'=>1238,
            'date'=>'2016-12-23',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'b16',
            'medecin_id'=>619
        ] );

        Rapport::create( [
            'id'=>1239,
            'date'=>'2016-12-01',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b59',
            'medecin_id'=>620
        ] );

        Rapport::create( [
            'id'=>1240,
            'date'=>'2017-03-06',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'c14',
            'medecin_id'=>621
        ] );

        Rapport::create( [
            'id'=>1241,
            'date'=>'2016-10-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'c54',
            'medecin_id'=>622
        ] );

        Rapport::create( [
            'id'=>1242,
            'date'=>'2016-12-29',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b19',
            'medecin_id'=>623
        ] );

        Rapport::create( [
            'id'=>1243,
            'date'=>'2016-12-19',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'e24',
            'medecin_id'=>624
        ] );

        Rapport::create( [
            'id'=>1244,
            'date'=>'2017-01-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b34',
            'medecin_id'=>625
        ] );

        Rapport::create( [
            'id'=>1245,
            'date'=>'2017-02-09',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e22',
            'medecin_id'=>626
        ] );

        Rapport::create( [
            'id'=>1246,
            'date'=>'2016-12-28',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'a131',
            'medecin_id'=>627
        ] );

        Rapport::create( [
            'id'=>1247,
            'date'=>'2016-12-08',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b25',
            'medecin_id'=>628
        ] );

        Rapport::create( [
            'id'=>1248,
            'date'=>'2017-04-01',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'a93',
            'medecin_id'=>629
        ] );

        Rapport::create( [
            'id'=>1249,
            'date'=>'2016-10-30',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'a17',
            'medecin_id'=>630
        ] );

        Rapport::create( [
            'id'=>1250,
            'date'=>'2017-01-26',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'f39',
            'medecin_id'=>631
        ] );

        Rapport::create( [
            'id'=>1251,
            'date'=>'2016-12-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'e5',
            'medecin_id'=>632
        ] );

        Rapport::create( [
            'id'=>1252,
            'date'=>'2017-03-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b28',
            'medecin_id'=>633
        ] );

        Rapport::create( [
            'id'=>1253,
            'date'=>'2016-12-27',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'a131',
            'medecin_id'=>634
        ] );

        Rapport::create( [
            'id'=>1254,
            'date'=>'2016-11-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'c54',
            'medecin_id'=>635
        ] );

        Rapport::create( [
            'id'=>1255,
            'date'=>'2016-10-02',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'e22',
            'medecin_id'=>636
        ] );

        Rapport::create( [
            'id'=>1256,
            'date'=>'2017-04-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b28',
            'medecin_id'=>637
        ] );

        Rapport::create( [
            'id'=>1257,
            'date'=>'2017-04-07',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b59',
            'medecin_id'=>638
        ] );

        Rapport::create( [
            'id'=>1258,
            'date'=>'2017-03-14',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'d51',
            'medecin_id'=>639
        ] );

        Rapport::create( [
            'id'=>1259,
            'date'=>'2017-03-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b28',
            'medecin_id'=>640
        ] );

        Rapport::create( [
            'id'=>1260,
            'date'=>'2017-01-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'a131',
            'medecin_id'=>641
        ] );

        Rapport::create( [
            'id'=>1261,
            'date'=>'2016-10-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'e5',
            'medecin_id'=>642
        ] );

        Rapport::create( [
            'id'=>1262,
            'date'=>'2016-11-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'f39',
            'medecin_id'=>643
        ] );

        Rapport::create( [
            'id'=>1263,
            'date'=>'2017-03-30',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b25',
            'medecin_id'=>644
        ] );

        Rapport::create( [
            'id'=>1264,
            'date'=>'2017-02-28',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'visiteur_id'=>'b19',
            'medecin_id'=>645
        ] );

        Rapport::create( [
            'id'=>1265,
            'date'=>'2017-03-11',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'a93',
            'medecin_id'=>646
        ] );

        Rapport::create( [
            'id'=>1266,
            'date'=>'2017-02-17',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b19',
            'medecin_id'=>647
        ] );

        Rapport::create( [
            'id'=>1267,
            'date'=>'2016-11-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'a55',
            'medecin_id'=>648
        ] );

        Rapport::create( [
            'id'=>1268,
            'date'=>'2017-03-15',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'e22',
            'medecin_id'=>649
        ] );

        Rapport::create( [
            'id'=>1269,
            'date'=>'2016-11-03',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'f21',
            'medecin_id'=>650
        ] );

        Rapport::create( [
            'id'=>1270,
            'date'=>'2016-11-29',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b34',
            'medecin_id'=>651
        ] );

        Rapport::create( [
            'id'=>1271,
            'date'=>'2017-03-19',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b16',
            'medecin_id'=>652
        ] );

        Rapport::create( [
            'id'=>1272,
            'date'=>'2016-10-21',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'c54',
            'medecin_id'=>653
        ] );

        Rapport::create( [
            'id'=>1273,
            'date'=>'2016-10-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'e39',
            'medecin_id'=>654
        ] );

        Rapport::create( [
            'id'=>1274,
            'date'=>'2016-12-12',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e39',
            'medecin_id'=>655
        ] );

        Rapport::create( [
            'id'=>1275,
            'date'=>'2017-01-10',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'a17',
            'medecin_id'=>656
        ] );

        Rapport::create( [
            'id'=>1276,
            'date'=>'2016-12-11',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'a93',
            'medecin_id'=>657
        ] );

        Rapport::create( [
            'id'=>1277,
            'date'=>'2017-01-10',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'c3',
            'medecin_id'=>658
        ] );

        Rapport::create( [
            'id'=>1278,
            'date'=>'2017-01-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b28',
            'medecin_id'=>659
        ] );

        Rapport::create( [
            'id'=>1279,
            'date'=>'2017-02-01',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'a55',
            'medecin_id'=>660
        ] );

        Rapport::create( [
            'id'=>1280,
            'date'=>'2017-02-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e39',
            'medecin_id'=>661
        ] );

        Rapport::create( [
            'id'=>1281,
            'date'=>'2016-11-20',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'e24',
            'medecin_id'=>662
        ] );

        Rapport::create( [
            'id'=>1282,
            'date'=>'2016-11-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b13',
            'medecin_id'=>663
        ] );

        Rapport::create( [
            'id'=>1283,
            'date'=>'2017-03-24',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'e22',
            'medecin_id'=>664
        ] );

        Rapport::create( [
            'id'=>1284,
            'date'=>'2017-03-27',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'a17',
            'medecin_id'=>665
        ] );

        Rapport::create( [
            'id'=>1285,
            'date'=>'2016-12-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'e24',
            'medecin_id'=>666
        ] );

        Rapport::create( [
            'id'=>1286,
            'date'=>'2016-12-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'visiteur_id'=>'f21',
            'medecin_id'=>667
        ] );

        Rapport::create( [
            'id'=>1287,
            'date'=>'2016-11-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e39',
            'medecin_id'=>668
        ] );

        Rapport::create( [
            'id'=>1288,
            'date'=>'2017-02-16',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b19',
            'medecin_id'=>669
        ] );

        Rapport::create( [
            'id'=>1289,
            'date'=>'2016-12-24',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'e22',
            'medecin_id'=>670
        ] );

        Rapport::create( [
            'id'=>1290,
            'date'=>'2017-03-09',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b16',
            'medecin_id'=>671
        ] );

        Rapport::create( [
            'id'=>1291,
            'date'=>'2017-04-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'c54',
            'medecin_id'=>672
        ] );

        Rapport::create( [
            'id'=>1292,
            'date'=>'2017-02-17',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'c54',
            'medecin_id'=>673
        ] );

        Rapport::create( [
            'id'=>1293,
            'date'=>'2017-01-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'b13',
            'medecin_id'=>674
        ] );

        Rapport::create( [
            'id'=>1294,
            'date'=>'2017-01-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'e5',
            'medecin_id'=>675
        ] );

        Rapport::create( [
            'id'=>1295,
            'date'=>'2017-01-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'a55',
            'medecin_id'=>676
        ] );

        Rapport::create( [
            'id'=>1296,
            'date'=>'2016-10-28',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'d13',
            'medecin_id'=>677
        ] );

        Rapport::create( [
            'id'=>1297,
            'date'=>'2017-03-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'a55',
            'medecin_id'=>678
        ] );

        Rapport::create( [
            'id'=>1298,
            'date'=>'2016-11-08',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'f39',
            'medecin_id'=>679
        ] );

        Rapport::create( [
            'id'=>1299,
            'date'=>'2017-01-30',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b4',
            'medecin_id'=>680
        ] );

        Rapport::create( [
            'id'=>1300,
            'date'=>'2017-02-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'f21',
            'medecin_id'=>681
        ] );

        Rapport::create( [
            'id'=>1301,
            'date'=>'2017-02-19',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b50',
            'medecin_id'=>682
        ] );

        Rapport::create( [
            'id'=>1302,
            'date'=>'2017-01-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'a131',
            'medecin_id'=>683
        ] );

        Rapport::create( [
            'id'=>1303,
            'date'=>'2016-12-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'e24',
            'medecin_id'=>684
        ] );

        Rapport::create( [
            'id'=>1304,
            'date'=>'2017-03-23',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b50',
            'medecin_id'=>685
        ] );

        Rapport::create( [
            'id'=>1305,
            'date'=>'2016-12-31',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'c14',
            'medecin_id'=>686
        ] );

        Rapport::create( [
            'id'=>1306,
            'date'=>'2017-04-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b25',
            'medecin_id'=>687
        ] );

        Rapport::create( [
            'id'=>1307,
            'date'=>'2016-10-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'a131',
            'medecin_id'=>688
        ] );

        Rapport::create( [
            'id'=>1308,
            'date'=>'2017-02-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b13',
            'medecin_id'=>689
        ] );

        Rapport::create( [
            'id'=>1309,
            'date'=>'2017-03-08',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'c3',
            'medecin_id'=>690
        ] );

        Rapport::create( [
            'id'=>1310,
            'date'=>'2016-12-03',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'e39',
            'medecin_id'=>691
        ] );

        Rapport::create( [
            'id'=>1311,
            'date'=>'2017-01-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b19',
            'medecin_id'=>692
        ] );

        Rapport::create( [
            'id'=>1312,
            'date'=>'2016-11-03',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e5',
            'medecin_id'=>693
        ] );

        Rapport::create( [
            'id'=>1313,
            'date'=>'2016-12-31',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'d51',
            'medecin_id'=>694
        ] );

        Rapport::create( [
            'id'=>1314,
            'date'=>'2017-01-29',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'b28',
            'medecin_id'=>695
        ] );

        Rapport::create( [
            'id'=>1315,
            'date'=>'2016-11-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'f21',
            'medecin_id'=>696
        ] );

        Rapport::create( [
            'id'=>1316,
            'date'=>'2016-12-22',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b34',
            'medecin_id'=>697
        ] );

        Rapport::create( [
            'id'=>1317,
            'date'=>'2017-03-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b19',
            'medecin_id'=>698
        ] );

        Rapport::create( [
            'id'=>1318,
            'date'=>'2016-12-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b4',
            'medecin_id'=>699
        ] );

        Rapport::create( [
            'id'=>1319,
            'date'=>'2016-10-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'d51',
            'medecin_id'=>700
        ] );

        Rapport::create( [
            'id'=>1320,
            'date'=>'2017-02-08',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'c14',
            'medecin_id'=>701
        ] );

        Rapport::create( [
            'id'=>1321,
            'date'=>'2017-01-13',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b25',
            'medecin_id'=>702
        ] );

        Rapport::create( [
            'id'=>1322,
            'date'=>'2016-10-10',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'a17',
            'medecin_id'=>703
        ] );

        Rapport::create( [
            'id'=>1323,
            'date'=>'2017-02-01',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b34',
            'medecin_id'=>704
        ] );

        Rapport::create( [
            'id'=>1324,
            'date'=>'2017-01-31',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'e39',
            'medecin_id'=>705
        ] );

        Rapport::create( [
            'id'=>1325,
            'date'=>'2017-03-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b16',
            'medecin_id'=>706
        ] );

        Rapport::create( [
            'id'=>1326,
            'date'=>'2017-01-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'f21',
            'medecin_id'=>707
        ] );

        Rapport::create( [
            'id'=>1327,
            'date'=>'2016-11-19',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'c3',
            'medecin_id'=>708
        ] );

        Rapport::create( [
            'id'=>1328,
            'date'=>'2017-02-19',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'a131',
            'medecin_id'=>709
        ] );

        Rapport::create( [
            'id'=>1329,
            'date'=>'2017-03-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'e22',
            'medecin_id'=>710
        ] );

        Rapport::create( [
            'id'=>1330,
            'date'=>'2016-10-25',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b19',
            'medecin_id'=>711
        ] );

        Rapport::create( [
            'id'=>1331,
            'date'=>'2016-12-19',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b25',
            'medecin_id'=>712
        ] );

        Rapport::create( [
            'id'=>1332,
            'date'=>'2016-10-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'e52',
            'medecin_id'=>713
        ] );

        Rapport::create( [
            'id'=>1333,
            'date'=>'2017-02-06',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b28',
            'medecin_id'=>714
        ] );

        Rapport::create( [
            'id'=>1334,
            'date'=>'2017-02-13',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'d13',
            'medecin_id'=>715
        ] );

        Rapport::create( [
            'id'=>1335,
            'date'=>'2016-11-13',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'b59',
            'medecin_id'=>716
        ] );

        Rapport::create( [
            'id'=>1336,
            'date'=>'2017-03-21',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b19',
            'medecin_id'=>717
        ] );

        Rapport::create( [
            'id'=>1337,
            'date'=>'2016-12-13',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'e22',
            'medecin_id'=>718
        ] );

        Rapport::create( [
            'id'=>1338,
            'date'=>'2017-02-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e39',
            'medecin_id'=>719
        ] );

        Rapport::create( [
            'id'=>1339,
            'date'=>'2016-10-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'d13',
            'medecin_id'=>720
        ] );

        Rapport::create( [
            'id'=>1340,
            'date'=>'2016-11-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b59',
            'medecin_id'=>721
        ] );

        Rapport::create( [
            'id'=>1341,
            'date'=>'2017-03-01',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b59',
            'medecin_id'=>722
        ] );

        Rapport::create( [
            'id'=>1342,
            'date'=>'2017-01-22',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'f39',
            'medecin_id'=>723
        ] );

        Rapport::create( [
            'id'=>1343,
            'date'=>'2017-04-06',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'c14',
            'medecin_id'=>724
        ] );

        Rapport::create( [
            'id'=>1344,
            'date'=>'2016-10-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b4',
            'medecin_id'=>725
        ] );

        Rapport::create( [
            'id'=>1345,
            'date'=>'2017-01-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'d51',
            'medecin_id'=>726
        ] );

        Rapport::create( [
            'id'=>1346,
            'date'=>'2016-11-22',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'f21',
            'medecin_id'=>727
        ] );

        Rapport::create( [
            'id'=>1347,
            'date'=>'2017-01-21',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b50',
            'medecin_id'=>728
        ] );

        Rapport::create( [
            'id'=>1348,
            'date'=>'2016-10-16',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'a131',
            'medecin_id'=>729
        ] );

        Rapport::create( [
            'id'=>1349,
            'date'=>'2017-02-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'a93',
            'medecin_id'=>730
        ] );

        Rapport::create( [
            'id'=>1350,
            'date'=>'2016-10-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'f39',
            'medecin_id'=>731
        ] );

        Rapport::create( [
            'id'=>1351,
            'date'=>'2016-10-15',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'e52',
            'medecin_id'=>732
        ] );

        Rapport::create( [
            'id'=>1352,
            'date'=>'2016-11-09',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b13',
            'medecin_id'=>733
        ] );

        Rapport::create( [
            'id'=>1353,
            'date'=>'2017-03-17',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'visiteur_id'=>'e52',
            'medecin_id'=>734
        ] );

        Rapport::create( [
            'id'=>1354,
            'date'=>'2016-11-20',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'d51',
            'medecin_id'=>735
        ] );

        Rapport::create( [
            'id'=>1355,
            'date'=>'2017-01-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'c3',
            'medecin_id'=>736
        ] );

        Rapport::create( [
            'id'=>1356,
            'date'=>'2016-10-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'c54',
            'medecin_id'=>737
        ] );

        Rapport::create( [
            'id'=>1357,
            'date'=>'2016-12-25',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'c14',
            'medecin_id'=>738
        ] );

        Rapport::create( [
            'id'=>1358,
            'date'=>'2016-10-19',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e22',
            'medecin_id'=>739
        ] );

        Rapport::create( [
            'id'=>1359,
            'date'=>'2017-02-09',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'e24',
            'medecin_id'=>740
        ] );

        Rapport::create( [
            'id'=>1360,
            'date'=>'2016-12-06',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b4',
            'medecin_id'=>741
        ] );

        Rapport::create( [
            'id'=>1361,
            'date'=>'2016-12-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'d51',
            'medecin_id'=>742
        ] );

        Rapport::create( [
            'id'=>1362,
            'date'=>'2016-11-30',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'c3',
            'medecin_id'=>743
        ] );

        Rapport::create( [
            'id'=>1363,
            'date'=>'2016-12-01',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'a17',
            'medecin_id'=>744
        ] );

        Rapport::create( [
            'id'=>1364,
            'date'=>'2017-04-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b16',
            'medecin_id'=>745
        ] );

        Rapport::create( [
            'id'=>1365,
            'date'=>'2017-02-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'e24',
            'medecin_id'=>746
        ] );

        Rapport::create( [
            'id'=>1366,
            'date'=>'2016-12-13',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'c3',
            'medecin_id'=>747
        ] );

        Rapport::create( [
            'id'=>1367,
            'date'=>'2016-10-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b28',
            'medecin_id'=>748
        ] );

        Rapport::create( [
            'id'=>1368,
            'date'=>'2017-01-23',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'a93',
            'medecin_id'=>749
        ] );

        Rapport::create( [
            'id'=>1369,
            'date'=>'2016-11-13',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'f39',
            'medecin_id'=>750
        ] );

        Rapport::create( [
            'id'=>1370,
            'date'=>'2016-11-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'f39',
            'medecin_id'=>751
        ] );

        Rapport::create( [
            'id'=>1371,
            'date'=>'2017-02-15',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'a131',
            'medecin_id'=>752
        ] );

        Rapport::create( [
            'id'=>1372,
            'date'=>'2017-02-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'c14',
            'medecin_id'=>753
        ] );

        Rapport::create( [
            'id'=>1373,
            'date'=>'2016-10-07',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'a93',
            'medecin_id'=>754
        ] );

        Rapport::create( [
            'id'=>1374,
            'date'=>'2017-03-29',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'a93',
            'medecin_id'=>755
        ] );

        Rapport::create( [
            'id'=>1375,
            'date'=>'2016-10-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'f21',
            'medecin_id'=>756
        ] );

        Rapport::create( [
            'id'=>1376,
            'date'=>'2016-11-07',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e49',
            'medecin_id'=>757
        ] );

        Rapport::create( [
            'id'=>1377,
            'date'=>'2017-02-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b59',
            'medecin_id'=>758
        ] );

        Rapport::create( [
            'id'=>1378,
            'date'=>'2017-03-29',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b50',
            'medecin_id'=>759
        ] );

        Rapport::create( [
            'id'=>1379,
            'date'=>'2017-03-30',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'visiteur_id'=>'a93',
            'medecin_id'=>760
        ] );

        Rapport::create( [
            'id'=>1380,
            'date'=>'2017-04-08',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'e24',
            'medecin_id'=>761
        ] );

        Rapport::create( [
            'id'=>1381,
            'date'=>'2017-01-30',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b13',
            'medecin_id'=>762
        ] );

        Rapport::create( [
            'id'=>1382,
            'date'=>'2016-12-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b16',
            'medecin_id'=>763
        ] );

        Rapport::create( [
            'id'=>1383,
            'date'=>'2017-01-01',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b16',
            'medecin_id'=>764
        ] );

        Rapport::create( [
            'id'=>1384,
            'date'=>'2017-01-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b16',
            'medecin_id'=>765
        ] );

        Rapport::create( [
            'id'=>1385,
            'date'=>'2016-11-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'a93',
            'medecin_id'=>766
        ] );

        Rapport::create( [
            'id'=>1386,
            'date'=>'2016-12-28',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'a55',
            'medecin_id'=>767
        ] );

        Rapport::create( [
            'id'=>1387,
            'date'=>'2017-01-08',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b4',
            'medecin_id'=>768
        ] );

        Rapport::create( [
            'id'=>1388,
            'date'=>'2017-04-12',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'f21',
            'medecin_id'=>769
        ] );

        Rapport::create( [
            'id'=>1389,
            'date'=>'2016-10-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b50',
            'medecin_id'=>770
        ] );

        Rapport::create( [
            'id'=>1390,
            'date'=>'2016-11-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'c3',
            'medecin_id'=>771
        ] );

        Rapport::create( [
            'id'=>1391,
            'date'=>'2016-11-22',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'e39',
            'medecin_id'=>772
        ] );

        Rapport::create( [
            'id'=>1392,
            'date'=>'2017-04-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'c54',
            'medecin_id'=>773
        ] );

        Rapport::create( [
            'id'=>1393,
            'date'=>'2017-02-13',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'c3',
            'medecin_id'=>774
        ] );

        Rapport::create( [
            'id'=>1394,
            'date'=>'2017-03-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b28',
            'medecin_id'=>775
        ] );

        Rapport::create( [
            'id'=>1395,
            'date'=>'2016-10-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e22',
            'medecin_id'=>776
        ] );

        Rapport::create( [
            'id'=>1396,
            'date'=>'2017-04-04',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'c3',
            'medecin_id'=>777
        ] );

        Rapport::create( [
            'id'=>1397,
            'date'=>'2017-03-29',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'d13',
            'medecin_id'=>778
        ] );

        Rapport::create( [
            'id'=>1398,
            'date'=>'2017-04-15',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'visiteur_id'=>'b50',
            'medecin_id'=>779
        ] );

        Rapport::create( [
            'id'=>1399,
            'date'=>'2017-04-15',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'e39',
            'medecin_id'=>780
        ] );

        Rapport::create( [
            'id'=>1400,
            'date'=>'2016-11-24',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'e39',
            'medecin_id'=>781
        ] );

        Rapport::create( [
            'id'=>1401,
            'date'=>'2017-03-11',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'a93',
            'medecin_id'=>782
        ] );

        Rapport::create( [
            'id'=>1402,
            'date'=>'2016-10-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b28',
            'medecin_id'=>783
        ] );

        Rapport::create( [
            'id'=>1403,
            'date'=>'2017-02-03',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'a131',
            'medecin_id'=>784
        ] );

        Rapport::create( [
            'id'=>1404,
            'date'=>'2016-11-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'b50',
            'medecin_id'=>785
        ] );

        Rapport::create( [
            'id'=>1405,
            'date'=>'2016-12-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'e52',
            'medecin_id'=>786
        ] );

        Rapport::create( [
            'id'=>1406,
            'date'=>'2017-01-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b28',
            'medecin_id'=>787
        ] );

        Rapport::create( [
            'id'=>1407,
            'date'=>'2017-03-10',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'a55',
            'medecin_id'=>788
        ] );

        Rapport::create( [
            'id'=>1408,
            'date'=>'2017-04-02',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b25',
            'medecin_id'=>789
        ] );

        Rapport::create( [
            'id'=>1409,
            'date'=>'2016-10-11',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b19',
            'medecin_id'=>790
        ] );

        Rapport::create( [
            'id'=>1410,
            'date'=>'2016-10-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b19',
            'medecin_id'=>791
        ] );

        Rapport::create( [
            'id'=>1411,
            'date'=>'2017-04-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'f39',
            'medecin_id'=>792
        ] );

        Rapport::create( [
            'id'=>1412,
            'date'=>'2016-10-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b19',
            'medecin_id'=>793
        ] );

        Rapport::create( [
            'id'=>1413,
            'date'=>'2016-10-10',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e49',
            'medecin_id'=>794
        ] );

        Rapport::create( [
            'id'=>1414,
            'date'=>'2017-04-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'c3',
            'medecin_id'=>795
        ] );

        Rapport::create( [
            'id'=>1415,
            'date'=>'2016-10-14',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'d13',
            'medecin_id'=>796
        ] );

        Rapport::create( [
            'id'=>1416,
            'date'=>'2016-10-21',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'a93',
            'medecin_id'=>797
        ] );

        Rapport::create( [
            'id'=>1417,
            'date'=>'2017-04-08',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b28',
            'medecin_id'=>798
        ] );

        Rapport::create( [
            'id'=>1418,
            'date'=>'2017-03-13',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b28',
            'medecin_id'=>799
        ] );

        Rapport::create( [
            'id'=>1419,
            'date'=>'2017-04-11',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'e39',
            'medecin_id'=>800
        ] );

        Rapport::create( [
            'id'=>1420,
            'date'=>'2016-11-14',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e39',
            'medecin_id'=>801
        ] );

        Rapport::create( [
            'id'=>1421,
            'date'=>'2016-10-22',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b59',
            'medecin_id'=>802
        ] );

        Rapport::create( [
            'id'=>1422,
            'date'=>'2016-10-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e5',
            'medecin_id'=>803
        ] );

        Rapport::create( [
            'id'=>1423,
            'date'=>'2017-02-02',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'d51',
            'medecin_id'=>804
        ] );

        Rapport::create( [
            'id'=>1424,
            'date'=>'2017-03-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'f21',
            'medecin_id'=>805
        ] );

        Rapport::create( [
            'id'=>1425,
            'date'=>'2016-12-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'visiteur_id'=>'f39',
            'medecin_id'=>806
        ] );

        Rapport::create( [
            'id'=>1426,
            'date'=>'2016-10-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'d51',
            'medecin_id'=>807
        ] );

        Rapport::create( [
            'id'=>1427,
            'date'=>'2016-10-14',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b19',
            'medecin_id'=>808
        ] );

        Rapport::create( [
            'id'=>1428,
            'date'=>'2016-11-13',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b50',
            'medecin_id'=>809
        ] );

        Rapport::create( [
            'id'=>1429,
            'date'=>'2016-10-20',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'e39',
            'medecin_id'=>810
        ] );

        Rapport::create( [
            'id'=>1430,
            'date'=>'2017-04-05',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'visiteur_id'=>'e22',
            'medecin_id'=>811
        ] );

        Rapport::create( [
            'id'=>1431,
            'date'=>'2017-02-13',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'b59',
            'medecin_id'=>812
        ] );

        Rapport::create( [
            'id'=>1432,
            'date'=>'2016-11-09',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'a93',
            'medecin_id'=>813
        ] );

        Rapport::create( [
            'id'=>1433,
            'date'=>'2017-01-13',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b28',
            'medecin_id'=>814
        ] );

        Rapport::create( [
            'id'=>1434,
            'date'=>'2017-01-29',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'a93',
            'medecin_id'=>815
        ] );

        Rapport::create( [
            'id'=>1435,
            'date'=>'2017-03-20',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'a55',
            'medecin_id'=>816
        ] );

        Rapport::create( [
            'id'=>1436,
            'date'=>'2016-12-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'b13',
            'medecin_id'=>817
        ] );

        Rapport::create( [
            'id'=>1437,
            'date'=>'2017-04-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b16',
            'medecin_id'=>818
        ] );

        Rapport::create( [
            'id'=>1438,
            'date'=>'2016-11-29',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b59',
            'medecin_id'=>819
        ] );

        Rapport::create( [
            'id'=>1439,
            'date'=>'2017-03-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'f39',
            'medecin_id'=>820
        ] );

        Rapport::create( [
            'id'=>1440,
            'date'=>'2016-11-29',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b34',
            'medecin_id'=>821
        ] );

        Rapport::create( [
            'id'=>1441,
            'date'=>'2017-01-03',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b13',
            'medecin_id'=>822
        ] );

        Rapport::create( [
            'id'=>1442,
            'date'=>'2016-10-12',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'e24',
            'medecin_id'=>823
        ] );

        Rapport::create( [
            'id'=>1443,
            'date'=>'2017-03-20',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'c14',
            'medecin_id'=>824
        ] );

        Rapport::create( [
            'id'=>1444,
            'date'=>'2017-01-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'c54',
            'medecin_id'=>825
        ] );

        Rapport::create( [
            'id'=>1445,
            'date'=>'2017-01-03',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b50',
            'medecin_id'=>826
        ] );

        Rapport::create( [
            'id'=>1446,
            'date'=>'2016-10-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b13',
            'medecin_id'=>827
        ] );

        Rapport::create( [
            'id'=>1447,
            'date'=>'2016-10-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b25',
            'medecin_id'=>828
        ] );

        Rapport::create( [
            'id'=>1448,
            'date'=>'2016-10-08',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'e52',
            'medecin_id'=>829
        ] );

        Rapport::create( [
            'id'=>1449,
            'date'=>'2017-04-08',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'d51',
            'medecin_id'=>830
        ] );

        Rapport::create( [
            'id'=>1450,
            'date'=>'2016-12-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'f21',
            'medecin_id'=>831
        ] );

        Rapport::create( [
            'id'=>1451,
            'date'=>'2017-04-01',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e5',
            'medecin_id'=>832
        ] );

        Rapport::create( [
            'id'=>1452,
            'date'=>'2016-12-15',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'f39',
            'medecin_id'=>833
        ] );

        Rapport::create( [
            'id'=>1453,
            'date'=>'2016-10-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'e39',
            'medecin_id'=>834
        ] );

        Rapport::create( [
            'id'=>1454,
            'date'=>'2016-12-23',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'a55',
            'medecin_id'=>835
        ] );

        Rapport::create( [
            'id'=>1455,
            'date'=>'2017-03-30',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'a93',
            'medecin_id'=>836
        ] );

        Rapport::create( [
            'id'=>1456,
            'date'=>'2017-01-22',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'a93',
            'medecin_id'=>837
        ] );

        Rapport::create( [
            'id'=>1457,
            'date'=>'2017-01-27',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b50',
            'medecin_id'=>838
        ] );

        Rapport::create( [
            'id'=>1458,
            'date'=>'2016-11-30',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'f39',
            'medecin_id'=>839
        ] );

        Rapport::create( [
            'id'=>1459,
            'date'=>'2016-12-18',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b25',
            'medecin_id'=>840
        ] );

        Rapport::create( [
            'id'=>1460,
            'date'=>'2016-10-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'c54',
            'medecin_id'=>841
        ] );

        Rapport::create( [
            'id'=>1461,
            'date'=>'2017-04-03',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b28',
            'medecin_id'=>842
        ] );

        Rapport::create( [
            'id'=>1462,
            'date'=>'2016-11-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'f21',
            'medecin_id'=>843
        ] );

        Rapport::create( [
            'id'=>1463,
            'date'=>'2017-03-08',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'e39',
            'medecin_id'=>844
        ] );

        Rapport::create( [
            'id'=>1464,
            'date'=>'2016-12-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b34',
            'medecin_id'=>845
        ] );

        Rapport::create( [
            'id'=>1465,
            'date'=>'2016-10-21',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b28',
            'medecin_id'=>846
        ] );

        Rapport::create( [
            'id'=>1466,
            'date'=>'2017-03-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'b34',
            'medecin_id'=>847
        ] );

        Rapport::create( [
            'id'=>1467,
            'date'=>'2017-01-08',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'e49',
            'medecin_id'=>848
        ] );

        Rapport::create( [
            'id'=>1468,
            'date'=>'2017-01-04',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'f21',
            'medecin_id'=>849
        ] );

        Rapport::create( [
            'id'=>1469,
            'date'=>'2017-02-26',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'a55',
            'medecin_id'=>850
        ] );

        Rapport::create( [
            'id'=>1470,
            'date'=>'2016-11-30',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'c3',
            'medecin_id'=>851
        ] );

        Rapport::create( [
            'id'=>1471,
            'date'=>'2017-01-22',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e39',
            'medecin_id'=>852
        ] );

        Rapport::create( [
            'id'=>1472,
            'date'=>'2017-03-25',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b50',
            'medecin_id'=>853
        ] );

        Rapport::create( [
            'id'=>1473,
            'date'=>'2016-11-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'e39',
            'medecin_id'=>854
        ] );

        Rapport::create( [
            'id'=>1474,
            'date'=>'2017-02-10',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b34',
            'medecin_id'=>855
        ] );

        Rapport::create( [
            'id'=>1475,
            'date'=>'2017-03-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'e22',
            'medecin_id'=>856
        ] );

        Rapport::create( [
            'id'=>1476,
            'date'=>'2017-02-08',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'e49',
            'medecin_id'=>857
        ] );

        Rapport::create( [
            'id'=>1477,
            'date'=>'2016-12-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'visiteur_id'=>'e52',
            'medecin_id'=>858
        ] );

        Rapport::create( [
            'id'=>1478,
            'date'=>'2017-02-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'visiteur_id'=>'e22',
            'medecin_id'=>859
        ] );

        Rapport::create( [
            'id'=>1479,
            'date'=>'2016-12-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'b19',
            'medecin_id'=>860
        ] );

        Rapport::create( [
            'id'=>1480,
            'date'=>'2017-03-28',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'a55',
            'medecin_id'=>861
        ] );

        Rapport::create( [
            'id'=>1481,
            'date'=>'2017-03-26',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'b25',
            'medecin_id'=>862
        ] );

        Rapport::create( [
            'id'=>1482,
            'date'=>'2017-03-01',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b19',
            'medecin_id'=>863
        ] );

        Rapport::create( [
            'id'=>1483,
            'date'=>'2017-03-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b50',
            'medecin_id'=>864
        ] );

        Rapport::create( [
            'id'=>1484,
            'date'=>'2017-01-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'e52',
            'medecin_id'=>865
        ] );

        Rapport::create( [
            'id'=>1485,
            'date'=>'2016-11-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'a17',
            'medecin_id'=>866
        ] );

        Rapport::create( [
            'id'=>1486,
            'date'=>'2016-12-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e52',
            'medecin_id'=>867
        ] );

        Rapport::create( [
            'id'=>1487,
            'date'=>'2016-10-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'f21',
            'medecin_id'=>868
        ] );

        Rapport::create( [
            'id'=>1488,
            'date'=>'2017-02-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'f21',
            'medecin_id'=>869
        ] );

        Rapport::create( [
            'id'=>1489,
            'date'=>'2016-12-13',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'d51',
            'medecin_id'=>870
        ] );

        Rapport::create( [
            'id'=>1490,
            'date'=>'2016-10-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'a17',
            'medecin_id'=>871
        ] );

        Rapport::create( [
            'id'=>1491,
            'date'=>'2017-01-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'e52',
            'medecin_id'=>872
        ] );

        Rapport::create( [
            'id'=>1492,
            'date'=>'2016-10-08',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b13',
            'medecin_id'=>873
        ] );

        Rapport::create( [
            'id'=>1493,
            'date'=>'2017-03-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'visiteur_id'=>'a17',
            'medecin_id'=>874
        ] );

        Rapport::create( [
            'id'=>1494,
            'date'=>'2016-12-29',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'a93',
            'medecin_id'=>875
        ] );

        Rapport::create( [
            'id'=>1495,
            'date'=>'2016-11-25',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b19',
            'medecin_id'=>876
        ] );

        Rapport::create( [
            'id'=>1496,
            'date'=>'2017-03-22',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b28',
            'medecin_id'=>877
        ] );

        Rapport::create( [
            'id'=>1497,
            'date'=>'2016-12-11',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'visiteur_id'=>'e49',
            'medecin_id'=>878
        ] );

        Rapport::create( [
            'id'=>1498,
            'date'=>'2016-12-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'a131',
            'medecin_id'=>879
        ] );

        Rapport::create( [
            'id'=>1499,
            'date'=>'2017-02-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'c3',
            'medecin_id'=>880
        ] );

        Rapport::create( [
            'id'=>1500,
            'date'=>'2017-02-03',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'c14',
            'medecin_id'=>881
        ] );

        Rapport::create( [
            'id'=>1501,
            'date'=>'2016-12-13',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'e52',
            'medecin_id'=>882
        ] );

        Rapport::create( [
            'id'=>1502,
            'date'=>'2016-12-22',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'f21',
            'medecin_id'=>883
        ] );

        Rapport::create( [
            'id'=>1503,
            'date'=>'2016-10-06',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b25',
            'medecin_id'=>884
        ] );

        Rapport::create( [
            'id'=>1504,
            'date'=>'2017-04-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'a93',
            'medecin_id'=>885
        ] );

        Rapport::create( [
            'id'=>1505,
            'date'=>'2016-11-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'e24',
            'medecin_id'=>886
        ] );

        Rapport::create( [
            'id'=>1506,
            'date'=>'2017-01-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'d13',
            'medecin_id'=>887
        ] );

        Rapport::create( [
            'id'=>1507,
            'date'=>'2017-04-07',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'a55',
            'medecin_id'=>888
        ] );

        Rapport::create( [
            'id'=>1508,
            'date'=>'2017-03-22',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b59',
            'medecin_id'=>889
        ] );

        Rapport::create( [
            'id'=>1509,
            'date'=>'2017-03-19',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'c3',
            'medecin_id'=>890
        ] );

        Rapport::create( [
            'id'=>1510,
            'date'=>'2016-11-27',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'f21',
            'medecin_id'=>891
        ] );

        Rapport::create( [
            'id'=>1511,
            'date'=>'2017-03-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'d13',
            'medecin_id'=>892
        ] );

        Rapport::create( [
            'id'=>1512,
            'date'=>'2017-03-11',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'visiteur_id'=>'f21',
            'medecin_id'=>893
        ] );

        Rapport::create( [
            'id'=>1513,
            'date'=>'2016-10-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e5',
            'medecin_id'=>894
        ] );

        Rapport::create( [
            'id'=>1514,
            'date'=>'2016-11-22',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'a55',
            'medecin_id'=>895
        ] );

        Rapport::create( [
            'id'=>1515,
            'date'=>'2017-01-02',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b4',
            'medecin_id'=>896
        ] );

        Rapport::create( [
            'id'=>1516,
            'date'=>'2016-10-16',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'e5',
            'medecin_id'=>897
        ] );

        Rapport::create( [
            'id'=>1517,
            'date'=>'2016-11-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b34',
            'medecin_id'=>898
        ] );

        Rapport::create( [
            'id'=>1518,
            'date'=>'2017-04-01',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'d51',
            'medecin_id'=>899
        ] );

        Rapport::create( [
            'id'=>1519,
            'date'=>'2017-03-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b50',
            'medecin_id'=>900
        ] );

        Rapport::create( [
            'id'=>1520,
            'date'=>'2017-01-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b34',
            'medecin_id'=>901
        ] );

        Rapport::create( [
            'id'=>1521,
            'date'=>'2016-10-01',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b50',
            'medecin_id'=>902
        ] );

        Rapport::create( [
            'id'=>1522,
            'date'=>'2017-03-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'e22',
            'medecin_id'=>903
        ] );

        Rapport::create( [
            'id'=>1523,
            'date'=>'2017-02-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'e49',
            'medecin_id'=>904
        ] );

        Rapport::create( [
            'id'=>1524,
            'date'=>'2017-02-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b34',
            'medecin_id'=>905
        ] );

        Rapport::create( [
            'id'=>1525,
            'date'=>'2016-10-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'e52',
            'medecin_id'=>906
        ] );

        Rapport::create( [
            'id'=>1526,
            'date'=>'2016-10-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'b59',
            'medecin_id'=>907
        ] );

        Rapport::create( [
            'id'=>1527,
            'date'=>'2017-01-24',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'d51',
            'medecin_id'=>908
        ] );

        Rapport::create( [
            'id'=>1528,
            'date'=>'2016-11-07',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b25',
            'medecin_id'=>909
        ] );

        Rapport::create( [
            'id'=>1529,
            'date'=>'2017-02-03',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'d51',
            'medecin_id'=>910
        ] );

        Rapport::create( [
            'id'=>1530,
            'date'=>'2016-12-27',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b59',
            'medecin_id'=>911
        ] );

        Rapport::create( [
            'id'=>1531,
            'date'=>'2017-02-17',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'a55',
            'medecin_id'=>912
        ] );

        Rapport::create( [
            'id'=>1532,
            'date'=>'2017-01-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b34',
            'medecin_id'=>913
        ] );

        Rapport::create( [
            'id'=>1533,
            'date'=>'2017-02-21',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'c3',
            'medecin_id'=>914
        ] );

        Rapport::create( [
            'id'=>1534,
            'date'=>'2017-02-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b28',
            'medecin_id'=>915
        ] );

        Rapport::create( [
            'id'=>1535,
            'date'=>'2016-12-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b19',
            'medecin_id'=>916
        ] );

        Rapport::create( [
            'id'=>1536,
            'date'=>'2017-02-18',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b13',
            'medecin_id'=>917
        ] );

        Rapport::create( [
            'id'=>1537,
            'date'=>'2016-11-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'a17',
            'medecin_id'=>918
        ] );

        Rapport::create( [
            'id'=>1538,
            'date'=>'2016-10-28',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b4',
            'medecin_id'=>919
        ] );

        Rapport::create( [
            'id'=>1539,
            'date'=>'2017-04-08',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'b4',
            'medecin_id'=>920
        ] );

        Rapport::create( [
            'id'=>1540,
            'date'=>'2016-10-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'c3',
            'medecin_id'=>921
        ] );

        Rapport::create( [
            'id'=>1541,
            'date'=>'2017-02-01',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'c54',
            'medecin_id'=>922
        ] );

        Rapport::create( [
            'id'=>1542,
            'date'=>'2016-10-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'d51',
            'medecin_id'=>923
        ] );

        Rapport::create( [
            'id'=>1543,
            'date'=>'2016-12-20',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'f21',
            'medecin_id'=>924
        ] );

        Rapport::create( [
            'id'=>1544,
            'date'=>'2017-03-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'a93',
            'medecin_id'=>925
        ] );

        Rapport::create( [
            'id'=>1545,
            'date'=>'2016-11-15',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'e22',
            'medecin_id'=>926
        ] );

        Rapport::create( [
            'id'=>1546,
            'date'=>'2017-03-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'c14',
            'medecin_id'=>927
        ] );

        Rapport::create( [
            'id'=>1547,
            'date'=>'2017-02-05',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'e24',
            'medecin_id'=>928
        ] );

        Rapport::create( [
            'id'=>1548,
            'date'=>'2017-02-28',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b59',
            'medecin_id'=>929
        ] );

        Rapport::create( [
            'id'=>1549,
            'date'=>'2017-01-15',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'a55',
            'medecin_id'=>930
        ] );

        Rapport::create( [
            'id'=>1550,
            'date'=>'2017-01-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'visiteur_id'=>'b13',
            'medecin_id'=>931
        ] );

        Rapport::create( [
            'id'=>1551,
            'date'=>'2016-11-23',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'a55',
            'medecin_id'=>932
        ] );

        Rapport::create( [
            'id'=>1552,
            'date'=>'2017-04-06',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'b16',
            'medecin_id'=>933
        ] );

        Rapport::create( [
            'id'=>1553,
            'date'=>'2016-11-09',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b59',
            'medecin_id'=>934
        ] );

        Rapport::create( [
            'id'=>1554,
            'date'=>'2016-10-13',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'d51',
            'medecin_id'=>935
        ] );

        Rapport::create( [
            'id'=>1555,
            'date'=>'2016-12-21',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'b13',
            'medecin_id'=>936
        ] );

        Rapport::create( [
            'id'=>1556,
            'date'=>'2017-01-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'c54',
            'medecin_id'=>937
        ] );

        Rapport::create( [
            'id'=>1557,
            'date'=>'2017-02-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b59',
            'medecin_id'=>938
        ] );

        Rapport::create( [
            'id'=>1558,
            'date'=>'2016-10-15',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'b28',
            'medecin_id'=>939
        ] );

        Rapport::create( [
            'id'=>1559,
            'date'=>'2017-01-07',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b25',
            'medecin_id'=>940
        ] );

        Rapport::create( [
            'id'=>1560,
            'date'=>'2016-11-26',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'d51',
            'medecin_id'=>941
        ] );

        Rapport::create( [
            'id'=>1561,
            'date'=>'2016-12-10',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'e22',
            'medecin_id'=>942
        ] );

        Rapport::create( [
            'id'=>1562,
            'date'=>'2017-02-09',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b25',
            'medecin_id'=>943
        ] );

        Rapport::create( [
            'id'=>1563,
            'date'=>'2017-01-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'a93',
            'medecin_id'=>944
        ] );

        Rapport::create( [
            'id'=>1564,
            'date'=>'2017-04-05',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b50',
            'medecin_id'=>945
        ] );

        Rapport::create( [
            'id'=>1565,
            'date'=>'2017-01-26',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'a93',
            'medecin_id'=>946
        ] );

        Rapport::create( [
            'id'=>1566,
            'date'=>'2017-01-18',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b59',
            'medecin_id'=>947
        ] );

        Rapport::create( [
            'id'=>1567,
            'date'=>'2017-01-06',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'visiteur_id'=>'b34',
            'medecin_id'=>948
        ] );

        Rapport::create( [
            'id'=>1568,
            'date'=>'2017-03-03',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b25',
            'medecin_id'=>949
        ] );

        Rapport::create( [
            'id'=>1569,
            'date'=>'2017-03-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'visiteur_id'=>'a55',
            'medecin_id'=>950
        ] );

        Rapport::create( [
            'id'=>1570,
            'date'=>'2016-11-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'e52',
            'medecin_id'=>951
        ] );

        Rapport::create( [
            'id'=>1571,
            'date'=>'2016-12-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'visiteur_id'=>'a55',
            'medecin_id'=>952
        ] );

        Rapport::create( [
            'id'=>1572,
            'date'=>'2016-10-07',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'d13',
            'medecin_id'=>953
        ] );

        Rapport::create( [
            'id'=>1573,
            'date'=>'2016-10-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b16',
            'medecin_id'=>954
        ] );

        Rapport::create( [
            'id'=>1574,
            'date'=>'2017-03-09',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b16',
            'medecin_id'=>955
        ] );

        Rapport::create( [
            'id'=>1575,
            'date'=>'2016-11-14',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'visiteur_id'=>'e49',
            'medecin_id'=>956
        ] );

        Rapport::create( [
            'id'=>1576,
            'date'=>'2017-03-13',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'a17',
            'medecin_id'=>957
        ] );

        Rapport::create( [
            'id'=>1577,
            'date'=>'2017-01-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'d13',
            'medecin_id'=>958
        ] );

        Rapport::create( [
            'id'=>1578,
            'date'=>'2016-10-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'visiteur_id'=>'b34',
            'medecin_id'=>959
        ] );

        Rapport::create( [
            'id'=>1579,
            'date'=>'2016-10-30',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b50',
            'medecin_id'=>960
        ] );

        Rapport::create( [
            'id'=>1580,
            'date'=>'2016-11-10',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'a17',
            'medecin_id'=>961
        ] );

        Rapport::create( [
            'id'=>1581,
            'date'=>'2016-12-31',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'e24',
            'medecin_id'=>962
        ] );

        Rapport::create( [
            'id'=>1582,
            'date'=>'2017-03-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'b50',
            'medecin_id'=>963
        ] );

        Rapport::create( [
            'id'=>1583,
            'date'=>'2016-11-09',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b19',
            'medecin_id'=>964
        ] );

        Rapport::create( [
            'id'=>1584,
            'date'=>'2016-10-01',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'visiteur_id'=>'b34',
            'medecin_id'=>965
        ] );

        Rapport::create( [
            'id'=>1585,
            'date'=>'2017-01-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'visiteur_id'=>'d13',
            'medecin_id'=>966
        ] );

        Rapport::create( [
            'id'=>1586,
            'date'=>'2016-10-31',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'visiteur_id'=>'b4',
            'medecin_id'=>967
        ] );

        Rapport::create( [
            'id'=>1587,
            'date'=>'2017-03-17',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'visiteur_id'=>'b34',
            'medecin_id'=>968
        ] );

        Rapport::create( [
            'id'=>1588,
            'date'=>'2017-02-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'b13',
            'medecin_id'=>969
        ] );

        Rapport::create( [
            'id'=>1589,
            'date'=>'2017-01-25',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'b50',
            'medecin_id'=>970
        ] );

        Rapport::create( [
            'id'=>1590,
            'date'=>'2017-02-16',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'b34',
            'medecin_id'=>971
        ] );

        Rapport::create( [
            'id'=>1591,
            'date'=>'2017-04-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'visiteur_id'=>'b50',
            'medecin_id'=>972
        ] );

        Rapport::create( [
            'id'=>1592,
            'date'=>'2017-02-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'a131',
            'medecin_id'=>973
        ] );

        Rapport::create( [
            'id'=>1593,
            'date'=>'2016-12-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'b28',
            'medecin_id'=>974
        ] );

        Rapport::create( [
            'id'=>1594,
            'date'=>'2017-01-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'e22',
            'medecin_id'=>975
        ] );

        Rapport::create( [
            'id'=>1595,
            'date'=>'2017-03-08',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'visiteur_id'=>'b50',
            'medecin_id'=>976
        ] );

        Rapport::create( [
            'id'=>1596,
            'date'=>'2016-10-26',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'c14',
            'medecin_id'=>977
        ] );

        Rapport::create( [
            'id'=>1597,
            'date'=>'2017-01-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e5',
            'medecin_id'=>978
        ] );

        Rapport::create( [
            'id'=>1598,
            'date'=>'2017-03-01',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e39',
            'medecin_id'=>979
        ] );

        Rapport::create( [
            'id'=>1599,
            'date'=>'2017-01-29',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b28',
            'medecin_id'=>980
        ] );

        Rapport::create( [
            'id'=>1600,
            'date'=>'2016-12-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e52',
            'medecin_id'=>981
        ] );

        Rapport::create( [
            'id'=>1601,
            'date'=>'2017-04-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'visiteur_id'=>'b28',
            'medecin_id'=>982
        ] );

        Rapport::create( [
            'id'=>1602,
            'date'=>'2017-03-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e24',
            'medecin_id'=>983
        ] );

        Rapport::create( [
            'id'=>1603,
            'date'=>'2016-11-17',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e24',
            'medecin_id'=>984
        ] );

        Rapport::create( [
            'id'=>1604,
            'date'=>'2017-03-20',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'e49',
            'medecin_id'=>985
        ] );

        Rapport::create( [
            'id'=>1605,
            'date'=>'2016-10-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'visiteur_id'=>'a131',
            'medecin_id'=>986
        ] );

        Rapport::create( [
            'id'=>1606,
            'date'=>'2016-11-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'visiteur_id'=>'d51',
            'medecin_id'=>987
        ] );

        Rapport::create( [
            'id'=>1607,
            'date'=>'2017-02-20',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'visiteur_id'=>'b34',
            'medecin_id'=>988
        ] );

        Rapport::create( [
            'id'=>1608,
            'date'=>'2016-10-25',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'visiteur_id'=>'d51',
            'medecin_id'=>989
        ] );

        Rapport::create( [
            'id'=>1609,
            'date'=>'2016-11-21',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'visiteur_id'=>'a55',
            'medecin_id'=>990
        ] );

        Rapport::create( [
            'id'=>1610,
            'date'=>'2016-10-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'visiteur_id'=>'e52',
            'medecin_id'=>991
        ] );
    }
}
