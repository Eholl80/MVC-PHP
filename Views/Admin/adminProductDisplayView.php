<div class="col-lg-6 col-lg-offset-1 mx-auto my-3">
    <h2>Affichage du Produit</h2>
    <form method="POST" action="inscription.php">
        <div class="form-group">
            <label for="name">Nom du produit</label>
            <input type="text" class="form-control form-control-plaintext" readonly value="<?php echo $arrayIdProduct->name(); ?>">
        </div>
        <div class="form-group">
            <label for="price">Prix du produit</label>
            <input type="text" class="form-control form-control-plaintext" readonly value="<?php echo $arrayIdProduct->price(); ?> €">
        </div>
        <div class="form-group">
            <label for="price">Catégorie du produit</label>
            <input type="text" class="form-control form-control-plaintext" readonly value="<?php echo $arrayIdProduct->category_id(); ?>">
        </div>
    </form>
    
</div>