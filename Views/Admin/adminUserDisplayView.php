<div class="col-lg-6 col-lg-offset-1 mx-auto my-3">
    <h2>Display User</h2>
    <form method="POST" action="inscription.php">
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control form-control-plaintext" readonly value="<?php echo $arrayIdUser->username(); ?>">
        </div>
        <div class="form-group">
            <label>Adresse email</label>
            <input type="email" class="form-control form-control-plaintext" readonly value="<?php echo $arrayIdUser->email(); ?>">
        </div>
        <div class="form-group">
            <label>Mot de passe</label>
            <input type="text" class="form-control form-control-plaintext" readonly value="<?php echo $arrayIdUser->password(); ?>">
        </div>
        <div class="form-group">
            <label>Admin</label>
            <input type="text" class="form-control form-control-plaintext" readonly value="<?php echo $arrayIdUser->admin(); ?>">
        </div>
    </form>
    
</div>