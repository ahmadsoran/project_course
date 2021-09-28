<?php
$user = "root";
$pass = "" ;
$server = "localhost";
$dbname = "final_web_project_db";

$db = new PDO("mysql:host=$server;dbname=$dbname" , $user , $pass);
if($db){
	
}else{
    echo "<p id='erorr'> Not Connected </p>";
}
