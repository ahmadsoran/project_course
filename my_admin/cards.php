
<?php
if(isset($_GET['p']) && isset($_GET['id'])){
$id=$_GET['id'];
$sql = "DELETE FROM `card` WHERE id='$id'";

$selectpost = $db->prepare($sql);
  if($selectpost->execute()){
      header('Location:?p=cards');
} else {
    echo "Error";
}

}


?>

<?php

if(isset($_POST['sendPost'])){

$title=$_POST['cardTitle'];
$dp=$_POST['cardDescription'];
$storage=$_POST['cardstorage'];
$color=$_POST['cardcolor'];
$price=$_POST['price'];
$cardImg = @$_FILES['cardImg']['name'];
$cardImg_tmp = @$_FILES['cardImg']['tmp_name'];
$sql = "INSERT INTO `card`(`title`, `dp`, `storage`, `color`,`price`, `cardImg` ) VALUES ('$title','$dp','$storage','$color','$price','$cardImg') ";
$selectpost = $db->prepare($sql);
  if($selectpost->execute()){
      move_uploaded_file($cardImg_tmp,"../final_website/images/$cardImg");
header('Location:?p=cards');
} else {
    echo '<h1>Error</h1>';
}


}

?>

<div class="container" id="cardUpload"  style="margin-top: 1%;">
        <div class="row cardUploader">
          <div class="col ">
<form method="post" enctype="multipart/form-data">
  
  <input type="text" class="cardInputs" name="cardTitle"   placeholder="Card Title">
  <input type="text" class="cardInputs" name="cardDescription"   placeholder="Description">
  <span>
    <input type="text"  class="cardInputs" name="cardstorage" placeholder="Storage">
    <input type="text"  class="cardInputs" name="cardcolor"   placeholder="Color">
    <input type="text"  class="cardInputs" name="price"   placeholder="price">

  </span>
          
</div>
<div class="col" >
  <label style="font-family: NRT-Reg;" for="file">Card Image</label>
  <input type='file' name="cardImg" onchange="showCardImage()" id="MyFile" />
  <img style="width: 300px; color: white;" id="inputCardImage" src="#" alt="" />
 
</div>
<div class="container"><center>
    <button type="submit" name="sendPost" style="width:100%; margin:10px;" class="btn btn-dark ">Save</button>

  </center></div>
</form>
      
        
        </div>
        
        
      </div>


      
<div class="container">
    <table class="table">
        <thead>
          
            <th scope="col">#</th>
            <th scope="col">device</th>
            <th scope="col">description</th>
            <th scope="col">storage</th>
            <th scope="col">color</th>
            <th scope="col">price</th>
            <th scope="col"> img</th>
            <th scope="col">action</th>
         
        </thead>
        <tbody>
        
          <?php
    $sql = "SELECT * FROM `card` ORDER BY id" ;
    $selectpost = $db->prepare($sql);
      if($selectpost->execute()){
    
      for($i = 0 ; $row=$selectpost->fetch(PDO::FETCH_OBJ); $i++){
     
    echo '
    <tr>
    <td>'.$row->id.'</td>
    <td>'.$row->title.'</td>
    <td><p class="ScrollBar" style="max-width: 400px; height: 100px; border-radius: 10px; overflow: auto; background-color: white;">'.$row->dp.'</p></td>
    <td>'.$row->storage.'</td>
    <td>'.$row->color.'</td>
    <td>'.$row->price.'</td>
    <td> <img src="../final_website/images/'.$row->cardImg.'" style="width: 50px;" alt=""> </td>
    <td><a style="margin-right: 13px; color: blue; cursor: pointer;" href="?p=cardedit&idc='.$row->id.'" class="">Update</a><a href="?p=cards&id='.$row->id.'" class="deleteAction">Delete</a></td>
    </tr>';
    
    
      }
    }
    
    
    ?>
        </tbody>
      </table>
</div>