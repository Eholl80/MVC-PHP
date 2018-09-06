<div class="col-lg-6 col-lg-offset-1 mx-auto my-3">
    <h2>Update User</h2>
    <?php if(isset($message)) echo "<p>". $message. "</p>";?>

    <form method="post" action = "/pool_php_rush/?section=admin&subSection=user&subSectionAction=updateUser&idUser=<?php echo $user->id();?>">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Créer votre username" <?php echo "value = '". $user->username(). "'";?> required>
            <small class="form-text text-muted">Votre username doit être compris entre 2 et 10 caractères</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Adresse email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Entrer votre email" <?php echo "value = '". $user->email(). "'";?> required>
            <small class="form-text text-muted">Merci d'indiquer un email valide</small>
        </div>
        <div class="form-group">
            <label for="admin">Admin</label>
            <select id="admin" name = "admin" class="custom-select">
                <option value="1" <?php if($user->admin() == 1) echo "selected";?> >Oui</option>
                <option value="0" <?php if($user->admin() == 0) echo "selected";?> >Non</option>
            </select>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
            <small class="form-text text-muted">Merci d'indiquer un mot de passe d'au moins 6 caractères</small>
        </div>
        <div class="form-group">
            <label for="passwordConfirm">Confirmer votre mot de passe</label>
            <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm" placeholder="Confirmer votre mot de passe" required>
            <small class="form-text text-muted">Merci de saisir à nouveau votre mot de passe</small>
        </div>
        <div class="text-center">
            <button type="submit" value = "Valider" class="btn btn-primary">Valider</button>
        </div>
    </form>
    
</div>