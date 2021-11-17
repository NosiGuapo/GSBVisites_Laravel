@extends('master')

@section('title')
    Ajouter une visite - GSB
@endsection

@section('content')
    <script>
        /* Ajouts d'offrirs */
        let medicId = [
            @foreach($medicaments as $medicament)
                "{{ $medicament->id }}",
            @endforeach
        ];
        let medicName = [
            @foreach($medicaments as $medicament)
                "{{ $medicament->nomCommercial }}",
            @endforeach
        ];
        let maxMedicCompteur = medicId.length;
        let maxCompteur = 5;
        /* Aucun champ d'offrirs est présent par défaut dans le code HTML, on commence donc à 0 */
        let compteur = 0;

        /* Partie input du médecin */
        let doctorPossibilities = [
            @foreach($medecins as $medecin)
                    "{{$medecin->prenom }} {{$medecin->nom}}",
            @endforeach
        ];
    </script>
    <section class="px-6 py-8 max-w-md mx-auto">
        <main class="bg-white border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center text-xl font-bold">Ajout d'une visite</h1>
            <form method="POST" action="ajouter-visite" class="form-login mt-10">
                @csrf

                <div class="mb-6">
                    <label for="motive" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Motif
                    </label>
{{--                    <select name="motive" va class="border border-gray-400 p-2 w-full mb-7 outline-none">
                        @foreach($motifs as $motif)
                            <option>{{$motif->motif}}</option>
                        @endforeach
                    </select>--}}
                    <input type="text" name="motive" class="border border-gray-400 p-2 w-full"
                           value="{{ old('motive') }}">
                </div>
                @error('motive')
                <p class="form-error bg-red-50 px-3 py-4 mb-6 text-red-500 rounded text-xs mt-1">
                    {{ $message }}
                </p>
                @enderror

                <div class="mb-6">
                    <label for="date" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Date
                    </label>
                    <input type="date" name="date" class="border border-gray-400 p-2 w-full outline-none"
                           value="{{ old('date') }}">
                </div>
                @error('date')
                <p class="form-error bg-red-50 px-3 py-4 mb-6 text-red-500 rounded text-xs mt-1">
                    {{ $message }}
                </p>
                @enderror

                <label for="doctor" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Médecin
                </label>
                <div class="doctor-input">
                    <input type="text" name="doctor" class="border border-gray-400 p-2 w-full outline-none" placeholder="Alice UNTEL">
                    <div class="mb-5 bg-gray-50">
                        <ul class="autocom-box">
{{--                            Les résultats de recherche iront ici--}}
                        </ul>
                    </div>
                </div>
{{--                <select name="doctor" class="border border-gray-400 p-2 w-full mb-7 outline-none">--}}
{{--                    @foreach($medecins as $medecin)--}}
{{--                        <option value="{{$medecin->id}}">--}}
{{--                            {{$medecin->prenom }} {{$medecin->nom}}--}}
{{--                        </option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
                @error('doctor')
                <p class="form-error bg-red-50 px-3 py-4 mb-6 text-red-500 rounded text-xs mt-1">
                    {{ $message }}
                </p>
                @enderror

                <div class="offrirs-inputs flex flex-col" id="newInputsBeginPoint">

                    <div class="ofrrirs-labels flex flex-row justify-between">
                        <label for="drug[1]" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            Médicaments (Max: 5)
                        </label>
                        <label for="amount[1]" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            Quantité
                        </label>
                    </div>
                </div>
                @error('amount.*')
                <p class="form-error bg-red-50 px-3 py-4 mb-6 text-red-500 rounded text-xs mt-1">
                    {{ $message }}
                </p>
                @enderror

                <p class="text-red-500 text-xs -mt-2 mb-7 hidden" id="msg-alert">Le nombre maximal de médicaments est
                    atteint.</p>
                <div class="offrirs-manage text-white mb-7 font-bold text-xs">
                    <button type="button" onclick="ajouterInput()"
                            class="mr-3 bg-blue-500 rounded text-left outline-none hover:bg-blue-600 duration-300"
                            id="addFields">
                        <i class="far fa-plus p-3"></i>
                    </button>
                </div>


                <div class="input-login mb-6">
                    <label for="balance-sheet" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Bilan
                    </label>
                    <input type="text" name="balance-sheet" class="border border-gray-400 p-2 w-full"
                           value="{{ old('balance-sheet') }}">
                </div>
                @error('balance-sheet')
                <p class="form-error bg-red-50 px-3 py-4 mb-6 text-red-500 rounded text-xs mt-1">
                    {{ $message }}
                </p>
                @enderror

                <div class="login-submit mb-6">
                    <button type="submit" class="bg-green-400 text-white rounded py-2 px-4 hover:bg-green-500">
                        Enregistrer
                    </button>
                </div>
            </form>
        </main>
    </section>
    <script src="js/visiteDynamicScript.js"></script>
    <script src="js/visiteDoctorScript.js"></script>
@endsection

