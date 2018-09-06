<div class="my-3">
    <div class=my-1>
        <a class="btn btn-secondary float-right" href="/pool_php_rush/?section=admin&amp;subSection=product&amp;subSectionAction=createProduct">Add a new Product <span class="material-icons">person_add</span></a>
    </div>
    <div class="clearfix"></div>

<?php 
if (empty($arrayAllProducts)) {?>
        
        <div class="alert alert-primary my-3" role="alert">
            Aucun Produit enregistré !!!
        </div>
<?php
} else {?>

    <table class="table my-1 table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Produit</th>
                <th scope="col">Prix</th>
                <th scope="col text-right">Action</th>
            </tr>
        </thead>
        <tbody>
<?php
    foreach($arrayAllProducts as $e) {
?>
            <tr>
                <td><?php echo $e->id();?></td>
                <td><?php echo $e->name();?></td>
                <td><?php echo $e->price();?> €</td>
                <td class="text-right">
                    <a class="nav-link material-icons" href="/pool_php_rush/?section=admin&amp;subSection=product&amp;subSectionAction=displayProduct&amp;idProduct=<?php echo $e->id();?>">remove_red_eye</a>
                    <a class="nav-link material-icons" href="/pool_php_rush/?section=admin&amp;subSection=product&amp;subSectionAction=updateProduct&amp;idProduct=<?php echo $e->id();?>">edit</a>
                    <a class="nav-link material-icons" href="#">delete_forever</a>
                </td>
            </tr>

<?php 
    }?>
        </tbody>
    </table>
<?php
}
?>
</div>