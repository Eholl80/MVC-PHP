<div class="col-lg-6 col-lg-offset-1 mx-auto my-3">
    <h2>Modification du Produit</h2>
    <form method="POST" action="inscription.php">
        <div class="form-group">
            <label for="name">Nom du produit</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Créer le nom du produit">
            <small class="form-text text-muted">Le nom du produit doit être compris entre 2 et 50 caracttères</small>
        </div>
        <div class="form-group">
            <label for="price">Prix du produit</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Entrer le prix du produit">
            <small class="form-text text-muted">Merci d'indiquer un prix sans devise (ex : 123)</small>
        </div>
        <div class="form-group">
            <label for="category">Catégorie (optionnel)</label>
            <select class="form-control" id="category">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Valider</button>
        </div>
    </form>
    
</div>