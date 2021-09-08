<?php 
require("db\connection.php");

require("header.php");

if(isset($_GET['p'])){
    $page=$_GET['p'];
    require($page.".php");
    }

    else{
        require("home.php");
    }
    
    
      
require("footer.php")
?>