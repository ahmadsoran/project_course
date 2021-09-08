<?php
if(isset($_GET['p']) && isset($_GET['id'])){
$id=$_GET['id'];
$sql = "DELETE FROM `login` WHERE id='$id'";

$selectpost = $db->prepare($sql);
  if($selectpost->execute()){
      header('Location:?p=tables');
} else {
    echo "Error";
}

}

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

      
<?php

if(isset($_POST['insert'])){
  
$username=$_POST['username'];
$password=$_POST['password'];

$ty=$_POST['type_user'];
 



$sql = "INSERT INTO `login`(`username`, `password`, `type`) VALUES ('$username','$password','$ty')";

$selectpost = $db->prepare($sql);

  if($selectpost->execute()){


      header('Location:index2.php?p=tables');
} else {
    echo "Error";
}


}





?>
    
<div class="container">
    <table class="table">
        <thead>
          
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Password</th>
            <th scope="col">Type</th>
            <th scope="col">action</th>
         
        </thead>
        <tbody>
        
          <?php
    $sql = "SELECT * FROM `login`";
    $selectpost = $db->prepare($sql);
      if($selectpost->execute()){
    
      for($i = 0 ; $row=$selectpost->fetch(PDO::FETCH_OBJ); $i++){
      

    echo '
    <tr>
    <td>'.$row->id.'</td>
    <td>'.$row->username.'</td>
    <td>'.$row->password.'</td>
    <td>'.$row->type.'</td>
    <td><a href="?p=useredit&idp='.$row->id.'" style="margin-right: 13px; color: blue; cursor: pointer;" >Update</a><a href="?p=tables&id='.$row->id.'" class="deleteAction">Delete</a></td>
    </tr>';
    
    
      }
    }
    
    ?>
        </tbody>
      </table>
</div>
<div class="container" style="text-align: right;">
    <button onclick="showUserSignUp() , login()" class="btn btn-dark">Add User</button>
</div>
<div class="container " id="userSignUpForm">
  <h1 onclick="hideUserSignUp()" class="hideDisplay">&times;</h1>
 
  <form class="userLoginForm" method="POST">
    <h1 class="text-center" style="font-family: NRT-Reg">Add User Form</h1>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Username</label>
      <input type="text"  name="username" class="form-control userLoginFormInputEmail"aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control userLoginFormInputEmail">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Type</label>
     
      <select name="type_user" class="form-select" aria-label="Default select example">
        <option value="admin">Admin</option>
        <option value="user">User</option>
        
      </select>
    </div>
    
   
    <button type="submit" name="insert" class="btn btn-primary" href="?p=tables">Save</button>
  </form>
</div>


