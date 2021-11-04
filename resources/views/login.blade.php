@extends('master')

@section('title')
    S'identifier - GSB
@endsection

@section('content')
    <section class="px-6 py-8">
        <main class="formbox border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center text-xl font-bold">Identification</h1>
            <form method="POST" action="login" class="form-login mt-10">
                @csrf
                <div class="input-login mb-6">
                    <label for="login" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Identifiant
                    </label>
                    <input type="text" name="login" class="border border-gray-400 p-2 w-full" value="{{ old('login') }}">
                </div>

                <div class="input-login mb-6">
                    <label for="pass" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Mot de passe
                    </label>
                    <input type="password" name="pass" class="border border-gray-400 p-2 w-full">
                </div>

                @error('login')
                <p class="form-error bg-red-50 px-3 py-4 mb-6 text-red-500 rounded text-xs mt-1">
                    {{ $message }}
                </p>
                @enderror
                @error('pass')
                <p class="form-error bg-red-50 px-3 py-4 mb-6 text-red-500 rounded text-xs mt-1">
                    {{ $message }}
                </p>
                @enderror
                <div class="login-submit mb-6">
                    <button type="submit" class="loginbutton text-white rounded py-2 px-4 transition duration-300">Connexion</button>
                </div>
            </form>
        </main>
    </section>
@endsection


