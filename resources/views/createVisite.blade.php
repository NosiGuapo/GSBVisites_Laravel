@extends('master')

@section('title')
    Ajouter une visite - GSB
@endsection

@section('content')
    <script>
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
        let maxCompteur = medicId.length;
        /* Un champ d'offrirs est déja présent par défaut dans le code HTML, on commence donc à 1 */
        let compteur = 1;

        function ajouterInput(){
            /* L'opération d'ajout de champs n'est possible que si la limite est strictement supérieure au nombre actuel */
            if (compteur < maxCompteur){
                /* Augmenter le compteur à chaque création d'inputs */
                compteur += 1;
                let beginPoint = document.getElementById("newInputsBeginPoint");
                let elementRow = document.createElement("div");

                let fixQuantite = document.createElement("div");
                let fixDrug = document.createElement("div");

                let drugSelect = document.createElement("select");
                let quantiteInput = document.createElement("input");
                /* elementRow div */
                elementRow.setAttribute('class', 'offrir-inputs flex flex-1 flex-row');
                elementRow.setAttribute('id', 'offrir-inputs')
                beginPoint.appendChild(elementRow);

                /* fixDrug div */
                fixDrug.setAttribute('class', 'alignfix');
                elementRow.appendChild(fixDrug);

                /* fixQuantite div */
                fixQuantite.setAttribute('class', 'pl-5 input-login mb-6');
                fixQuantite.setAttribute('id', 'medicAmount');
                elementRow.appendChild(fixQuantite);

                /* Médicament Select */
                drugSelect.setAttribute('name', 'drug['+compteur+']');
                drugSelect.setAttribute('class', 'border border-gray-400 p-2 w-full mb-7 outline-none');
                fixDrug.appendChild(drugSelect);

                //
                // alert(medicamentMap);
                // console.log(medicamentMap[1]);

                for (var i = 0; i < maxCompteur; i++){
                    const opt = document.createElement('option');

                    /* Valeur de l'option (id du médicament) */
                    opt.value = medicId[i];
                    /* Texte affiché (nom du médicament) */
                    opt.innerHTML = medicName[i];
                    drugSelect.appendChild(opt);
                }

                /* Quantité input */
                quantiteInput.setAttribute('type','text');
                quantiteInput.setAttribute('name','amount['+compteur+']');
                quantiteInput.setAttribute('class','border border-gray-400 p-2 w-full outline-none');
                quantiteInput.setAttribute('placeholder','');
                fixQuantite.appendChild(quantiteInput);
            } else {
                var errormsg = document.getElementById("msg-alert");
                errormsg.classList.remove('hidden');
            }
        }

        function supprimerVisite(){
            /* Compter le nombre de champs offrirs */
            var inputsCateg = document.getElementById('newInputsBeginPoint');
            var removeCateg = document.getElementById('offrir-inputs');
            var inputs = inputsCateg.getElementsByTagName('input');

            /* Si deux champs ou plus sont présents, on supprime le dernier */
            if(inputs.length >= 2) {
                var errormsg = document.getElementById("msg-alert");

                errormsg.classList.add('hidden');
                /* Une entrée est supprimée, on décrémente le compteur */
                compteur-=1;
                removeCateg.remove();
            }
        }
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
                    <input type="date" name="date" class="border border-gray-400 p-2 w-full"
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
                <select name="doctor" class="border border-gray-400 p-2 w-full mb-7">
                    @foreach($medecins as $medecin)
                        <option value="{{$medecin->id}}">
                            {{$medecin->prenom }} {{$medecin->nom}}
                        </option>
                    @endforeach
                </select>
                @error('doctor')
                <p class="form-error bg-red-50 px-3 py-4 mb-6 text-red-500 rounded text-xs mt-1">
                    {{ $message }}
                </p>
                @enderror

                <div class="offrirs-inputs flex flex-col" id="newInputsBeginPoint">

                    <div class="ofrrirs-labels flex flex-row justify-between">
                        <label for="drug[1]" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            Médicament
                        </label>
                        <label for="amount[1]" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            Quantité
                        </label>
                    </div>
                    <div class="offrir-inputs flex flex-row" id="offrir-inputs">
                        <div class="alignfix">
                            <select name="drug[1]" class="border border-gray-400 p-2 w-full mb-7 outline-none">
                                @foreach($medicaments as $medicament)
                                    <option value="{{$medicament->id}}" class="max-w-full">
                                        {{$medicament->nomCommercial}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="pl-5 input-login mb-6" id="medicAmount">
                            <input type="text" name="amount[1]" class="border border-gray-400 p-2 w-full outline-none"
                                   value="{{ old('amount[1]') }}">
                        </div>
                    </div>
                    @error('amount.*')
                    <p class="form-error bg-red-50 px-3 py-4 mb-6 text-red-500 rounded text-xs mt-1">
                        {{ $message }}
                    </p>
                    @enderror
{{--                    @if($errors->isEmpty())--}}
{{--                        @foreach($errors as $error)--}}
{{--                            --}}
{{--                        @endforeach--}}
{{--                    @endif--}}
                </div>

                <p class="text-red-500 text-xs -mt-2 mb-7 hidden" id="msg-alert">Le nombre maximal de médicaments est atteint.</p>
                <div class="offrirs-manage text-white mb-7 font-bold text-xs">
                    <button type="button" onclick="ajouterInput()" class="mr-3 bg-blue-500 rounded text-left outline-none hover:bg-blue-600 duration-300" id="addFields">
                        <i class="far fa-plus p-3"></i>
                    </button>
                    <button type="button" onclick="supprimerVisite()" class="bg-red-500 rounded text-left outline-none hover:bg-red-600 duration-300" id="removeFields">
                        <i class="far fa-times p-3"></i>
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
@endsection

