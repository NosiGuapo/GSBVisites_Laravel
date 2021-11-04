@extends('master')

@section('title')
    Modification de rapport - GSB
@endsection

@section('content')
    <section class="px-6 py-8">
        <main class="formbox border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center text-xl font-bold mb-4">Modifier un rapport</h1>
            <p class="text-left text-l">Rapport effectué le: <b class="boldgreen">{{$leRapport->date}}</b></p>
            <p class="text-left text-l">Médecin: <b class="boldgreen">{{$leRapport->medecin->prenom." ".$leRapport->medecin->nom}}</b></p>
            <form method="POST" action="/modifier-visite/{{$leRapport->id}}" class="form mt-7">
                @csrf

                <div class="input-login mb-6">
                    <label for="motive" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Motif
                    </label>
                    <input type="text" name="motive" class="border border-gray-400 p-2 w-full" value="{{$leRapport->motif}}">
                </div>
                @error('motive')
                <p class="text-red-500 text-sm mb-6">{{$message}}</p>
                @enderror

                <div class="input-login mb-6">
                    <label for="balance-sheet" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Bilan
                    </label>
                    <input type="text" name="balance-sheet" class="border border-gray-400 p-2 w-full" value="{{$leRapport->bilan}}">
                </div>
                @error('balance-sheet')
                <p class="text-red-500 text-sm mb-6">{{$message}}</p>
                @enderror

                <div class="form-submit mb-6">
                    <button type="submit" class="bg-green-400 text-white rounded py-2 px-4 hover:bg-green-500">Enregistrer</button>
                </div>
            </form>
        </main>
    </section>
@endsection
