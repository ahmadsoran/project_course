<?php

    if(isset($_SESSION['email'])){
      header("Location:index.php");
    }
?>



    
<div class="container-fluid Mcontanier">
   <div class="note" onclick="vTOi()">
        <h2>
Click Me To login 
        </h2>
     
    </div> 
       
  
    <div class="Mlogin">
        <div class="MloginHeader">
       <h1>Login</h1>
        </div>
        <form method="POST">
            <div class="form-group">
                <input name="email" type="email" class="form-control" id="email1"
                    placeholder="Your email address...">
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control" id="password1"
                    placeholder="Your password...">
            </div>
         
<?php


if(isset($_POST['login'])){
$logemail=$_POST['email'];
$logpassword=$_POST['password'];
$sql = "SELECT * FROM  weblogin";
$selectpost = $db->prepare($sql);
if($selectpost->execute()){
while($row=$selectpost->fetch(PDO::FETCH_OBJ)){
$em=$row->email; 
$pas=$row->password;
if($logemail==$em && $logpassword==$pas){
$_SESSION['email']=$logemail;
$_SESSION['password']=$logpassword;

header("Location:index.php");

}  else {
echo'<p id="error">invaild email or password</p>';

}



}
}


}

?>
<center>            <button name="login" type="submit" class="btn">Login</button>
</center>
        </form>

    </div>
</div>
