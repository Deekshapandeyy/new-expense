<?php
// include_once("config.php");
if(!isset($_SESSION['income'])){
    $_SESSION['income']=$_POST['income'];
}
else{

    $_SESSION['income']+=$_POST['income'];
}
print_r($_SESSION['income']);


?>