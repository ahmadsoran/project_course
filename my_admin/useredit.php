       
<?php
    
if(isset($_GET['idp'])){
    $id=$_GET['idp'];
  $username="";
  $password="";
  $sql = "SELECT * FROM login where id='$id'";
  $selectpost = $db->prepare($sql);
  if($selectpost->execute()){
  
  while($row=$selectpost->fetch(PDO::FETCH_OBJ)){
  $username=$row->username;
  $password=$row->password;
  
  }
  }
  
  }
  
  if(isset($_POST['update'])){
    
    $UpdatedUserName=$_POST['UpdateUsername'];
    $UpdatedUserPassword=$_POST['UpdatePassword'];
    
    $UpdatedType=$_POST['UpdateType'];
     
    
    if(isset($_GET['idp'])){
        $id=$_GET['idp'];
    }
    $sql = "UPDATE `login` SET `username`='$UpdatedUserName',`password`='$UpdatedUserPassword',`type`='$UpdatedType' WHERE id='$id'";
    
    $selectpost = $db->prepare($sql);
    
      if($selectpost->execute()){
    
    
          header('Location:index2.php?p=tables');
    } else {
        echo "Error";
    }
  }
?>


<div class="container updateUserStyle" id="updateUserShow">
  <div class="updateUserHeader">
 
    <h1>User Editor</h1>
    <hr>
  </div>
  <div class="updateUserMain">
 
   <form class="userUpdateForm" method="POST">
     <h1 class="text-center" style="font-family: NRT-Reg">Editing By <span><?php
if(isset($_SESSION['username'])){
    echo $_SESSION['username'];
}


?>
</span></h1>
     <div class="mb-3">
       <label for="exampleInputEmail1" class="form-label">Username</label>
       <?php
     if(isset($_GET['idp'])){
       echo      '<input type="text"  name="UpdateUsername" class="form-control userLoginFormInputEmail" value="'.$username.'" >';
     }
     else{
       echo      '<input type="text"  name="UpdateUsername" class="form-control userLoginFormInputEmail"aria-describedby="emailHelp">';
 
     }
 ?>
     </div>
     <div class="mb-3">
       <label for="exampleInputPassword1" class="form-label">Password</label>
       <?php
     if(isset($_GET['idp'])){
       echo      '<input type="text"  name="UpdatePassword" class="form-control userLoginFormInputEmail" value="'.$password.'" >';
     }
     else{
       echo      '<input type="password"  name="UpdatePassword" class="form-control userLoginFormInputEmail"aria-describedby="emailHelp">';
 
     }
 ?>    </div>
     <div class="mb-3">
       <label for="exampleInputPassword1" class="form-label">Type</label>
      
       <select name="UpdateType" class="form-select" aria-label="Default select example">
         <option value="admin">Admin</option>
         <option value="user">User</option>
         
       </select>
     </div>
     
    
     <button type="submit" name="update" style="width: 100%;" class="btn btn-dark" href="?p=tables">Update User</button>
   </form>
  </div>
 </div>
