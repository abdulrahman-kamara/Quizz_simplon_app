<main>

    <img src="{{ asset('img/logoFoot.png') }}" alt="logo-simplon" id="logo-simplon">   
    <form method="post" action="traitement.php">
        
            <label for="nom">Nom </label>
            <input type="text" name="nom" id="nom" />
       
        
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" id="prenom" />

            <label for="email2">E-mail</label>
            <input type="text" name="email2" id="email2" />
       
            <label for="password2">Password</label>
            <input type="text" name="password2" id="password2" />

            <label for="confpassword">Confirmer le mot de passe</label>
            <input type="text" name="confpassword" id="confpassword" />
    
            <select name="pets" id="pet-select">
                <option value="formateur">Formateur</option>
                <option value="apprenant">Apprenant</option>
            </select>

        <input type="submit">
</form>

</main>