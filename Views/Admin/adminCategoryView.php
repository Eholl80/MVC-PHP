<div class="col-lg-6 col-lg-offset-1 mx-auto my-3">
    <form method="POST" action="/pool_php_rush/?section=admin&amp;subSection=category">
        <h2>Création d'une catégorie</h2>
        <div class="form-group">
            <label for="name">Nom de la catégorie</label>
            <input type="text" minlength="2" maxlength="10" class="form-control" id="name" name="name" placeholder="Créer le nom de la catégorie">
            <small class="form-text text-muted">Le nom de la catégorie doit être compris entre 2 et 50 caracttères</small>
        </div>
        <div class="form-group">
            <label for="category">Catégorie parent</label>
            <select class="form-control" id="category" name="category">
                <option value=""> -- --</option>
<?php
foreach($arrayAllCategory as $e) {
?>
                <option value="<?php echo $e->name();?>"><?php echo $e->name();?></option>
<?php 
}
?>
            </select>
            <small class="form-text text-muted">Après la validation vous aurez la possibilité d'ajouter une nouvelle catégorie parente</small>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Valider</button>
        </div>
    </form>
</div>