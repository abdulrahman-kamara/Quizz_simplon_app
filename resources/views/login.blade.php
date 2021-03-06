@extends('base')

@include('components.header')


<main>
  <img src="{{ asset('img/logoFoot.png') }}" alt="logo-simplon" id="logo-simplon">
  <form method="GET" action="">
  {{ csrf_field() }}
    <div class="input-group">
      <label for="email">E-mail</label>
      <input id="email" name="email" />
    </div>

    <div class="input-password">
      <label for="password">Password</label>
      <input id="password" name="password" type="password" />
    </div>

      <h3>Si vous n'avez pas de compte</h3>
      <a href="signup">Inscrivez-vous</a>
      <button type="submit">Login</button>
  </form>
</main>

@include('components.footer')