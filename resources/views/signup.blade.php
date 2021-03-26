@extends('base')

@include('components.header')
<main>

    <img src="{{ asset('img/logoFoot.png') }}" alt="logo-simplon" id="logo-simplon">   
    <form method="post" action="#">

        <div>
            <label for="nom">Nom </label>
            <input type="text" name="nom" id="nom" />
        </div>
        
            
       
        <div>
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" id="prenom" />
        </div>
            
        <div>
            <label for="email2">E-mail</label>
            <input type="text" name="email2" id="email2" />
        </div>
            
        <div>
            <label for="password2">Password</label>
            <input type="text" name="password2" id="password2" />
        </div>
            
        <div>
            <label for="confpassword">Confirmer le mot de passe</label>
            <input type="text" name="confpassword" id="confpassword" />
        </div>
            
        <div>
            <select name="role" id="role-select">
                <option value="formateur">Formateur</option>
                <option value="apprenant">Apprenant</option>
            </select>
        </div>
            

        <input type="submit">
    </form>

</main>

@include('components.footer')