@extends('master')

@section('title')
    @if($type == 'v')
        Visites de {{ auth()->user()->prenom." ".auth()->user()->nom }} - GSB
    @else
        Rapports pour {{$leMedecin->prenom." ".$leMedecin->nom}} - GSB
    @endif
@endsection

@section('content')
    <div class="max-w-l mx-auto mt-20 text-center font-bold">
        <h1 class="text-2xl mb-10">
            @if($type == 'v')
                Visites de
                <span class="boldgreen">
                    {{ auth()->user()->prenom." ".auth()->user()->nom }}
                </span>
            @else
                @if(count($visites) > 1)
                    Rapports
                @else
                    Rapport
                @endif
                pour le médecin
                <span class="boldgreen">
                    {{ $leMedecin->prenom." ".$leMedecin->nom }}
                </span>
            @endif
        </h1>
    </div>

    @if($type != 'm')
        <div class="max-w-screen-lg mx-auto text-center my-10 flex flex-row justify-center items-center">
            <button
                class="main-links outline-none mb-6 text-white rounded py-2 px-4 mr-5 loginbutton transition duration-300">
                <a href="ajouter-visite" class="">Ajouter une visite</a>
            </button>
            <div class="medecins-searchbar">
                <form method="GET" action="#">
                    @error('empty')
                    <p class="form-error bg-red-50 px-3 py-4 mb-6 text-red-500 rounded text-xs mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                    <div class="input-login mb-6 flex flex-col items-start">
                        <label for="rapport-query" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            Rechercher (Date)
                        </label>
                        <div class="flex flex-row">
                            <input type="date" name="rapport-query"
                                   class="border outline-none border-gray-400 h-10 p-2 w-full">
                            <div class="query-submit mb-6">
                                <button type="submit"
                                        class="bg-blue-500 text-white outline-none rounded py-2 px-4 hover:bg-blue-600 duration-300">
                                    Rechercher
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endif

    <?php $current = 0; ?>

    @if(isset($visites))
        @if(count($visites) > 0)
            <div class="visits-table">
                <table class="border-collapse mt-24 mx-1.5 min-w-400 text-base overflow-hidden">
                    <thead>
                    <tr class="text-white text-left bold">
                        <th>N° Visite</th>
                        <th>Motif de visite</th>
                        <th>Effectué le</th>

                        @if($type == 'v')
                            <th class="visits-categ-1">Médecin</th>
                        @endif

                        <th class="visits-categ-2">Médicaments offerts</th>
                        <th class="visits-categ-2">Quantité</th>

                        <th>Bilan</th>
                        @if($type == 'v')
                            <th></th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($visites as $visite)
                        <div class="visit-table visite-{{ $current+=1 }}">
                            <tr>
                                <td>{{ $current }}</td>
                                <td>{{ $visite->motif }}</td>
                                <td>{{ $visite->date }}</td>
                                @if($type == 'v')
                                    <td class="visits-categ-1">{{ $visite->medecin->prenom." ".$visite->medecin->nom }}</td>
                                @endif
                                <td class="visits-categ-2">
                                    @foreach($visite->offrirs as $offrir )
                                        {{$offrir->medicament->nomCommercial}}<br>
                                    @endforeach
                                </td>
                                <td class="visits-categ-2">
                                    @foreach($visite->offrirs as $offrir )
                                        {{$offrir->quantite}}<br>
                                    @endforeach
                                </td>
                                <td>{{ $visite->bilan }}</td>
                                @if($type == 'v')
                                <td>
                                    <a href="modifier-visite/{{$visite->id}}">
                                        <button type="submit"
                                                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                                            Modifier
                                        </button>
                                    </a>
                                </td>
                                @endif
                            </tr>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="w-fit my-5 mx-auto">
                Vous n'avez effectué aucune visite cette date.
            </div>
        @endif
    @endif
@endsection
