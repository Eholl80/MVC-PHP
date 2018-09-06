<div class="my-3">

    <div class=my-1>
        <a class="btn btn-secondary float-right" href="#">Add a new User <span class="material-icons">person_add</span></a>
    </div>
    <div class="clearfix"></div>

    <table class="table my-1 table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col text-right">Action</th>
            </tr>
        </thead>
        <tbody>
<?php

  
  	
    //var_dump($usersManager);
    //var_dump($arrayAllUsers);
    

    //var_dump($arrayAllUsers);
    //var_dump($arrayAllUsers->getUserName());
    
    $arrayAllUsers = $newUser->getAllUsers();

    foreach($arrayAllUsers as $key => $value) {
?>
            <tr>
                <td><?php echo "{$key} => {$value} " ?></td>
                <td><?php //echo $e->getEmail();?></td>
                <td class="text-right">
                    <a class="nav-link material-icons" href="/pool_php_rush/?section=admin&amp;subSection=user&amp;subSectionAction=displayUser&amp;idUser=<?php echo $e->id();?>">remove_red_eye</a>
                    <a class="nav-link material-icons" href="/pool_php_rush/?section=admin&amp;subSection=user&amp;subSectionAction=updateUser&amp;idUser=<?php echo $e->id();?>">edit</a>
                    <a class="nav-link material-icons" href="/pool_php_rush/?section=admin&amp;subSection=user&amp;subSectionAction=deleteUser&amp;idUser=<?php echo $e->id();?>">delete_forever</a>
                </td>
            </tr>
    
<?php 
    }?>
        </tbody>
    </table>

</div>