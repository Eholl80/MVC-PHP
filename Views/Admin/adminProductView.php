<?php 

if(!isset($_GET['subSectionAction']))
{
    $_GET['subSectionAction'] = "default";
}

switch($_GET['subSectionAction']){
    case 'displayProduct':   
        include_once('adminProductDisplayView.php');
    break;
    case 'updateProduct':
        include_once('adminProductUpdateView.php');
    break;
    case 'createProduct':
        include_once('adminProductCreateView.php');
    break;
    default :  
        include_once('adminProductDefaultView.php');
}
?>
    