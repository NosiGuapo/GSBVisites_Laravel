@extends('master')

@section('title')
    Gérer mes médecins - GSB
@endsection

@section('content')
    <div class="max-w-l mx-auto mt-16 text-center font-bold">
        <h1 class="text-2xl mb-10">
            Portefeuille de Médecins -
            <span class="boldgreen">
        {{ auth()->user()->prenom }} {{auth()->user()->nom}}
        </span>
        </h1>
    </div>
    <div class="medecins-searchbar formbox">
        <form method="GET" action="#">
            @error('empty')
            <p class="form-error bg-red-50 px-3 py-4 mb-6 text-red-500 rounded text-xs mt-1">
                {{ $message }}
            </p>
            @enderror
            <div class="input-login mb-6">
                <label for="medecin-query" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Rechercher (Nom ou prénom)
                </label>
                <input type="text" name="medecin-query" class="border border-gray-400 p-2 w-full mb-10">
                <div class="query-submit mb-6">
                    <button type="submit" class="loginbutton text-white rounded py-2 px-4">
                        Rechercher
                    </button>
                </div>
            </div>
        </form>
    </div>

    @if(isset($msq))
        <div class="query-results">
            @if($msq->isEmpty())
                <h1>Aucun résultat trouvé.</h1>
            @else
                <h1 class="font-bold mb-10 text-2xl ml-1.5">{{count($msq)}} Résultats</h1>
                <?php $current = 0 ?>
                <table class="query-table border-collapse mb-15 mx-1.5 min-w-400 text-base overflow-hidden">
                    <thead>
                    <tr class="text-white text-left bold">
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Spécialité</th>
                        <th>N° Téléphone</th>
                        <th>Adresse</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($msq as $mq)
                        <div class="visit-table medecin-{{ $current+=1 }}">
                            <tr>
                                <td>{{ $mq->prenom }}</td>
                                <td>{{ $mq->nom }}</td>
                                <td>{{ $mq->specialitecomplementaire }}</td>
                                <td><a href="tel:+33{{$mq->tel}}">{{ $mq->tel }}</a></td>
                                <td>{{ $mq->adresse }}</td>
                                <td>
                                    <a href="/medecin/rapports/{{$mq->id}}">
                                        <button type="submit"
                                                class="bg-green-400 text-white rounded py-2 px-4 hover:bg-green-500">
                                            Voir rapports
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <a href="/medecin/modifier/{{$mq->id}}">
                                        <button type="submit"
                                                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                                            Modifier
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    @endif
@endsection
