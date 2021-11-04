@extends('master')

@section('title')
    Modifier un médecin - GSB
@endsection

@section('content')
    <section class="px-6 py-8">
        <main class="formbox border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center text-xl font-bold">Modifier un médecin</h1>
            <p class="text-center text-l">Médecin: {{$medecin->prenom." ".$medecin->nom}}</p>
            <form method="POST" action="/medecin/modifier/{{$medecin->id}}" class="form mt-10">
                @csrf

                <div class="input-login mb-6">
                    <label for="fname" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Prénom
                    </label>
                    <input type="text" name="fname" class="border border-gray-400 p-2 w-full" value="{{$medecin->prenom}}">
                </div>
                @error('fname')
                    <p class="text-red-500 text-sm mb-6">{{$message}}</p>
                @enderror

                <div class="input-login mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Nom
                    </label>
                    <input type="text" name="name" class="border border-gray-400 p-2 w-full" value="{{$medecin->nom}}">
                </div>
                @error('name')
                <p class="text-red-500 text-sm mb-6">{{$message}}</p>
                @enderror

                <div class="input-login mb-6">
                    <label for="adress" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Adresse
                    </label>
                    <input type="text" name="adress" class="border border-gray-400 p-2 w-full" value="{{$medecin->adresse}}">
                </div>
                @error('adress')
                <p class="text-red-500 text-sm mb-6">{{$message}}</p>
                @enderror

                <div class="input-login mb-6">
                    <label for="department" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Département
                    </label>
                    <input type="text" name="department" class="border border-gray-400 p-2 w-full" value="{{$medecin->departement}}">
                </div>
                @error('department')
                <p class="text-red-500 text-sm mb-6">{{$message}}</p>
                @enderror

                <div class="input-login mb-6">
                    <label for="phone" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        N° de téléphone
                    </label>
                    <input type="tel" name="phone" class="border border-gray-400 p-2 w-full" value="{{$medecin->tel}}">
                </div>
                @error('phone')
                <p class="text-red-500 text-sm mb-6">{{$message}}</p>
                @enderror

                <div class="input-login mb-6">
                    <label for="spe" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Spécialité
                    </label>
                    <input type="text" name="spe" class="border border-gray-400 p-2 w-full" value="{{$medecin->specialitecomplementaire}}">
                </div>
                @error('spe')
                <p class="text-red-500 text-sm mb-6">{{$message}}</p>
                @enderror

{{--                @error('pass')--}}
{{--                <p class="form-error bg-red-50 px-3 py-4 mb-6 text-red-500 rounded text-xs mt-1">--}}
{{--                    {{ $message }}--}}
{{--                </p>--}}
{{--                @enderror--}}
                <div class="form-submit mb-6">
                    <button type="submit" class="bg-green-400 text-white rounded py-2 px-4 hover:bg-green-500">Enregistrer</button>
                </div>
            </form>
        </main>
    </section>
@endsection
