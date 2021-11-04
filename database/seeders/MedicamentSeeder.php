<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Medicament;


class MedicamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medicament::create( [
            'id'=>'3MYC7',
            'nomCommercial'=>'TRIMYCINE',
            'famille_id'=>'CRT',
            'composition'=>'Triamcinolone acétonide + Néomycine + Nystatine',
            'effets'=>'Ce médicament est un corticoïde à  activité forte ou très forte associé à  un antibiotique et un ant',
            'contreIndications'=>'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants  d infections de la peau'
        ] );

        Medicament::create( [
            'id'=>'ADIMOL9',
            'nomCommercial'=>'ADIMOL',
            'famille_id'=>'ABP',
            'composition'=>'Amoxicilline + Acide clavulanique',
            'effets'=>'Ce médicament  plus puissant que les pénicillines simples  est utilisé pour traiter des infections b',
            'contreIndications'=>'Ce médicament est contre-indiqué en cas d allergie aux pénicillines ou aux céphalosporines.'
        ] );

        Medicament::create( [
            'id'=>'AMOPIL7',
            'nomCommercial'=>'AMOPIL',
            'famille_id'=>'ABP',
            'composition'=>'Amoxicilline',
            'effets'=>'Ce médicament  plus puissant que les pénicillines simples  est utilisé pour traiter des infections b',
            'contreIndications'=>'Ce médicament est contre-indiqué en cas d allergie aux pénicillines. Il doit être administré avec pr'
        ] );

        Medicament::create( [
            'id'=>'AMOX45',
            'nomCommercial'=>'AMOXAR',
            'famille_id'=>'ABP',
            'composition'=>'Amoxicilline',
            'effets'=>'Ce médicament  plus puissant que les pénicillines simples  est utilisé pour traiter des infections b',
            'contreIndications'=>'La prise de ce médicament peut rendre positifs les tests de dépistage du dopage.'
        ] );

        Medicament::create( [
            'id'=>'AMOXIG12',
            'nomCommercial'=>'AMOXI Gé',
            'famille_id'=>'ABP',
            'composition'=>'Amoxicilline',
            'effets'=>'Ce médicament  plus puissant que les pénicillines simples  est utilisé pour traiter des infections b',
            'contreIndications'=>'Ce médicament est contre-indiqué en cas d allergie aux pénicillines. Il doit être administré avec pr'
        ] );

        Medicament::create( [
            'id'=>'APATOUX22',
            'nomCommercial'=>'APATOUX Vitamine C',
            'famille_id'=>'ALO',
            'composition'=>'Tyrothricine + Tétracaïne + Acide ascorbique (Vitamine C)',
            'effets'=>'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.',
            'contreIndications'=>'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants  en cas de phénylcétonur'
        ] );

        Medicament::create( [
            'id'=>'BACTIG10',
            'nomCommercial'=>'BACTIGEL',
            'famille_id'=>'ABC',
            'composition'=>'Erythromycine',
            'effets'=>'Ce médicament est utilisé en application locale pour traiter l acné et les infections cutanées bacté',
            'contreIndications'=>'Ce médicament est contre-indiqué en cas d allergie aux antibiotiques de la famille des macrolides ou'
        ] );

        Medicament::create( [
            'id'=>'BACTIV13',
            'nomCommercial'=>'BACTIVIL',
            'famille_id'=>'AFM',
            'composition'=>'Erythromycine',
            'effets'=>'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.',
            'contreIndications'=>'Ce médicament est contre-indiqué en cas d allergie aux macrolides (dont le chef de file est l érythr'
        ] );

        Medicament::create( [
            'id'=>'BITALV',
            'nomCommercial'=>'BIVALIC',
            'famille_id'=>'AAA',
            'composition'=>'Dextropropoxyphène + Paracétamol',
            'effets'=>'Ce médicament est utilisé pour traiter les douleurs d intensité modérée ou intense.',
            'contreIndications'=>'Ce médicament est contre-indiqué en cas d allergie aux médicaments de cette famille  d insuffisance '
        ] );

        Medicament::create( [
            'id'=>'CARTION6',
            'nomCommercial'=>'CARTION',
            'famille_id'=>'AAA',
            'composition'=>'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol',
            'effets'=>'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.',
            'contreIndications'=>'Ce médicament est contre-indiqué en cas de troubles de la coagulation (tendances aux hémorragies)  d'
        ] );

        Medicament::create( [
            'id'=>'CLAZER6',
            'nomCommercial'=>'CLAZER',
            'famille_id'=>'AFM',
            'composition'=>'Clarithromycine',
            'effets'=>'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques. Il est également uti',
            'contreIndications'=>'Ce médicament est contre-indiqué en cas d allergie aux macrolides (dont le chef de file est l érythr'
        ] );

        Medicament::create( [
            'id'=>'DEPRIL9',
            'nomCommercial'=>'DEPRAMIL',
            'famille_id'=>'AIM',
            'composition'=>'Clomipramine',
            'effets'=>'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères  certaines douleurs rebelles ',
            'contreIndications'=>'Ce médicament est contre-indiqué en cas de glaucome ou d adénome de la prostate  d infarctus récent '
        ] );

        Medicament::create( [
            'id'=>'DIMIRTAM6',
            'nomCommercial'=>'DIMIRTAM',
            'famille_id'=>'AAC',
            'composition'=>'Mirtazapine',
            'effets'=>'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères.',
            'contreIndications'=>'La prise de ce produit est contre-indiquée en cas de d allergie à  l un des constituants.'
        ] );

        Medicament::create( [
            'id'=>'DOLRIL7',
            'nomCommercial'=>'DOLORIL',
            'famille_id'=>'AAA',
            'composition'=>'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol',
            'effets'=>'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.',
            'contreIndications'=>'Ce médicament est contre-indiqué en cas d allergie au paracétamol ou aux salicylates.'
        ] );

        Medicament::create( [
            'id'=>'DORNOM8',
            'nomCommercial'=>'NORMADOR',
            'famille_id'=>'HYP',
            'composition'=>'Doxylamine',
            'effets'=>'Ce médicament est utilisé pour traiter l insomnie chez l adulte.',
            'contreIndications'=>'Ce médicament est contre-indiqué en cas de glaucome  de certains troubles urinaires (rétention urina'
        ] );

        Medicament::create( [
            'id'=>'EQUILARX6',
            'nomCommercial'=>'EQUILAR',
            'famille_id'=>'AAH',
            'composition'=>'Méclozine',
            'effets'=>'Ce médicament est utilisé pour traiter les vertiges et pour prévenir le mal des transports.',
            'contreIndications'=>'Ce médicament ne doit pas être utilisé en cas d allergie au produit  en cas de glaucome ou de rétent'
        ] );

        Medicament::create( [
            'id'=>'EVILR7',
            'nomCommercial'=>'EVEILLOR',
            'famille_id'=>'PSA',
            'composition'=>'Adrafinil',
            'effets'=>'Ce médicament est utilisé pour traiter les troubles de la vigilance et certains symptomes neurologiq',
            'contreIndications'=>'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants.'
        ] );

        Medicament::create( [
            'id'=>'INSXT5',
            'nomCommercial'=>'INSECTIL',
            'famille_id'=>'AH',
            'composition'=>'Diphénydramine',
            'effets'=>'Ce médicament est utilisé en application locale sur les piqûres d insecte et l urticaire.',
            'contreIndications'=>'Ce médicament est contre-indiqué en cas d allergie aux antihistaminiques.'
        ] );

        Medicament::create( [
            'id'=>'JOVAI8',
            'nomCommercial'=>'JOVENIL',
            'famille_id'=>'AFM',
            'composition'=>'Josamycine',
            'effets'=>'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.',
            'contreIndications'=>'Ce médicament est contre-indiqué en cas d allergie aux macrolides (dont le chef de file est l érythr'
        ] );

        Medicament::create( [
            'id'=>'LIDOXY23',
            'nomCommercial'=>'LIDOXYTRACINE',
            'famille_id'=>'AFC',
            'composition'=>'Oxytétracycline +Lidocaïne',
            'effets'=>'Ce médicament est utilisé en injection intramusculaire pour traiter certaines infections spécifiques',
            'contreIndications'=>'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants. Il ne doit pas être ass'
        ] );

        Medicament::create( [
            'id'=>'LITHOR12',
            'nomCommercial'=>'LITHORINE',
            'famille_id'=>'AP',
            'composition'=>'Lithium',
            'effets'=>'Ce médicament est indiqué dans la prévention des psychoses maniaco-dépressives ou pour traiter les é',
            'contreIndications'=>'Ce médicament ne doit pas être utilisé si vous êtes allergique au lithium. Avant de prendre ce trait'
        ] );

        Medicament::create( [
            'id'=>'PARMOL16',
            'nomCommercial'=>'PARMOCODEINE',
            'famille_id'=>'AA',
            'composition'=>'Codéine + Paracétamol',
            'effets'=>'Ce médicament est utilisé pour le traitement des douleurs lorsque des antalgiques simples ne sont pa',
            'contreIndications'=>'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants  chez l enfant de moins '
        ] );

        Medicament::create( [
            'id'=>'PHYSOI8',
            'nomCommercial'=>'PHYSICOR',
            'famille_id'=>'PSA',
            'composition'=>'Sulbutiamine',
            'effets'=>'Ce médicament est utilisé pour traiter les baisses d activité physique ou psychique  souvent dans un',
            'contreIndications'=>'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants.'
        ] );

        Medicament::create( [
            'id'=>'PIRIZ8',
            'nomCommercial'=>'PIRIZAN',
            'famille_id'=>'ABA',
            'composition'=>'Pyrazinamide',
            'effets'=>'Ce médicament est utilisé  en association à  d autres antibiotiques  pour traiter la tuberculose.',
            'contreIndications'=>'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants  d insuffisance rénale o'
        ] );

        Medicament::create( [
            'id'=>'POMDI20',
            'nomCommercial'=>'POMADINE',
            'famille_id'=>'AO',
            'composition'=>'Bacitracine',
            'effets'=>'Ce médicament est utilisé pour traiter les infections oculaires de la surface de l oeil.',
            'contreIndications'=>'Ce médicament est contre-indiqué en cas d allergie aux antibiotiques appliqués localement.'
        ] );

        Medicament::create( [
            'id'=>'TROXT21',
            'nomCommercial'=>'TROXADET',
            'famille_id'=>'AIN',
            'composition'=>'Paroxétine',
            'effets'=>'Ce médicament est utilisé pour traiter la dépression et les troubles obsessionnels compulsifs. Il pe',
            'contreIndications'=>'Ce médicament est contre-indiqué en cas d allergie au produit.'
        ] );

        Medicament::create( [
            'id'=>'TXISOL22',
            'nomCommercial'=>'TOUXISOL',
            'famille_id'=>'ALO',
            'composition'=>'Tyrothricine + Acide ascorbique (Vitamine C)',
            'effets'=>'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.',
            'contreIndications'=>'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants et chez l enfant de moin'
        ] );

        Medicament::create( [
            'id'=>'URIEG6',
            'nomCommercial'=>'URIREGUL',
            'famille_id'=>'AUM',
            'composition'=>'Fosfomycine trométamol',
            'effets'=>'Ce médicament est utilisé pour traiter les infections urinaires simples chez la femme de moins de 65',
            'contreIndications'=>'La prise de ce médicament est contre-indiquée en cas d allergie à l un des constituants et d insuffi'
        ] );
    }
}
