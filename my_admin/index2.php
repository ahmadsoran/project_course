<?php
session_start();
if(!isset($_SESSION['username'])){
header("Location:index.php");
}

require("db/connect.php");


require("header.php");


if(isset($_GET['p'])){
$page=$_GET['p'];
require($page.".php");
}else{
    require("home.php");
}


require("footer.php")
?>

