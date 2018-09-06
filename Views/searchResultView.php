<div class="my-3">


    <table class="table my-1 table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Produit</th>
                <th scope="col">Prix</th>
                <th scope="col text-right">Action</th>
            </tr>
        </thead>
        <tbody>
<?php
    foreach($arraySearch as $e) {
?>

            <tr>
                <td><?php echo $e->name();?></td>
                <td><?php echo $e->price();?> €</td>
                <td><?php echo $e->category();?></td>
            </tr>

<?php 
    }?>
        </tbody>
    </table>
</div>