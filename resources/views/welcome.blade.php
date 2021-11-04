@extends('master')

@section('title')
    Accueil - GSB
@endsection

@section('content')
    <div class="max-w-l mx-auto mt-20 text-center">
        <h1 class="text-4xl bold uppercase font-bold">GSB Visites</h1>
    </div>
    <section class="px-6 py-8">
        <main class="formbox border border-gray-200 rounded-xl">
            @auth
                <div class="">
                    <h1 class="text-2xl mb-10">
                        Bienvenue,
                        <span class="boldgreen">
                        {{ auth()->user()->login }}
                    </span>!
                    </h1>
                    <div class="navlinks main-links">
                        <a href="/visites">Gérer mes visites</a>
                    </div>
                    <div class="navlinks main-links mb-10">
                        <a href="/mes-medecins">Gérer mes médecins</a>
                    </div>
                    <a href="/logout">
                        <button class="loginbutton text-white rounded py-2 px-4 transition duration-300">
                            Déconnexion
                        </button>
                    </a>
                    @else
                        <button class="logbutton loginbutton main-links text-white rounded py-2 px-4">
                            <a href="login" class="text-center">Connexion</a>
                        </button>
                    @endauth
                </div>
        </main>
    </section>
@endsection
