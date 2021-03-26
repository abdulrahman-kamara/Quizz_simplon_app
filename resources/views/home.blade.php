@extends('base')

@include('components.header')
<main>

    <div id="container">
        <ul>
            <li><img src="{{ asset('img/logoFoot.png') }}" alt="logo-simplon" id="logo-simplon"></li>
            <li><a href="/">Connexion</a></li>
            <li><a href="signup">Inscription</a></li>
        </ul>
        <h1>Bienvenue sur le site Simplon Quizz</h1>
        <p>Lorem Upsum</p>
    </div>

</main>

@include('components.footer')
