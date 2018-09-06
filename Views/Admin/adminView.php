<div class="row">
    
    <div class="col-lg-9 col-lg-offset-1 mx-auto">
        <ul class="nav nav-pills justify-content-center my-3">
            <li class="nav-item">
                <a class="nav-link <?php if($_GET['subSection']== 'user') echo 'active';?>" href="/pool_php_rush/?section=admin&amp;subSection=user">User Panel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($_GET['subSection']== 'product') echo 'active';?>" href="/pool_php_rush/?section=admin&amp;subSection=product">Product Panel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($_GET['subSection']== 'category') echo 'active';?>" href="/pool_php_rush/?section=admin&amp;subSection=category">Category Panel</a>
            </li>
        </ul>
        <?php
            switch($_GET['subSection']){
                case 'user':   
                    include_once('adminUserView.php');
                break;
                case 'product':
                    include_once('adminProductView.php');
                break;
                case 'category':
                    include_once('adminCategoryView.php');
                break;
                default: 
                    include_once('adminUserView.php');
            }
        ?>
    </div>

</div>