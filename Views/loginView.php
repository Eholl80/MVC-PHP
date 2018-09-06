
<div class="row">

    <div class="col-lg-4 col-lg-offset-1 mx-auto my-3">
        <h2>Login</h2>
        <?php if(isset($message)) echo "<p>". $message. "</p>";?>

        <form method = "post" action = "/pool_php_rush/?section=login">
            <div class="form-group">
                <label for="exampleInputEmail1">Adresse email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Entrer votre email" <?php if(isset($message)) echo "value = '". $_POST["email"]. "'";?> >
                <small class="form-text text-muted">Merci d'indiquer un email valide</small>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
                <small class="form-text text-muted">Merci d'indiquer un mot de passe entre 3 et 10 caractères</small>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe" value="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>
            <div class="text-center">
                <button type="submit" value = "Valider" class="btn btn-primary">Valider</button>
            </div>
        </form>
    
    </div>

</div>