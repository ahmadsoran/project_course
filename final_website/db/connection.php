<?php

$username="root";
$password="";
$server="localhost";
$dbname="final_web_project _db";

$db = new PDO("mysql:host=$server; dbname=$dbname;" , $username , $password);
if('db'){

}
else{
echo'<h1 id="error_connection">sorry your connection lost </h1>';
}

?>