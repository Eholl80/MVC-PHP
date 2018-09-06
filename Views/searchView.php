<div class="row">
    
    <div class="col-lg-4 col-lg-offset-1 mx-auto my-3">
        <h2>Chercher un produit</h2>
        <form method="POST" action="/pool_php_rush/?section=search">
            <div class="form-group">
                <label for="name">Nom du produit</label>
                <input type="text" class="form-control" id="name" value="" name="name" placeholder="Nom du produit">
            </div>
            <div class="form-group">
                <label for="productpriceMinPrice">Prix minimum</label>
                <input type="text" class="form-control" value="0" id="priceMin" name="priceMin" placeholder="Prix du produit">
            </div>
            <div class="form-group">
                <label for="priceMax">Prix maximum</label>
                <input type="text" class="form-control" value="1000000" id="priceMax" name="priceMax" placeholder="Prix du produit">
            </div>
            <div class="form-group">
                <label for="category">Catégorie du produit</label>
                <select class="form-control" id="category" name="category">
                    <option value=""> -- -- </option>
<?php
    foreach($arrayAllCategory as $e) {
?>
                    <option value="<?php echo $e->name();?>"><?php echo $e->name();?></option>
<?php 
    }
?>
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </form>
    
    </div>

</div>