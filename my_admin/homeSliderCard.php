
<?php

if(isset($_GET['p']) && isset($_GET['id'])){
$id=$_GET['id'];
$sql = "DELETE FROM `userslidercard` WHERE id='$id'";

$selectpost = $db->prepare($sql);
  if($selectpost->execute()){
      header('Location:?p=homeSliderCard');
} else {
    echo "Error";
}

}


?>

<?php

if(isset($_POST['submitPost'])){

$price=$_POST['price'];
$sliderImage = @$_FILES['slideimg']['name'];
$sliderImage_tmp = @$_FILES['slideimg']['tmp_name'];
$sql = "INSERT INTO `userslidercard`(`image`, `price`) VALUES ('$sliderImage','$price') ";
$selectpost = $db->prepare($sql);
  if($selectpost->execute()){
      move_uploaded_file($sliderImage_tmp,"../final_website/slider_images/$sliderImage");
header('Location:?p=homeSliderCard');
} else {
    echo '<h1>Error</h1>';
}


}

?>

<div class="container" id="cardUpload"  style="margin-top: 1%;">
        <div class="row cardUploader">
          <div class="col ">
<form method="post" enctype="multipart/form-data">
  

    <input type="text"  class="cardInputs" name="price"   placeholder="price">
          
</div>
<div class="col" >
  <label style="font-family: NRT-Reg;" for="file">Image</label>
  <input type='file' name="slideimg" onchange="showCardImage()" id="MyFile" />
  <img style="width: 300px; color: white;" id="inputCardImage" src="#" alt="" />
 
</div>
<div class="container"><center>
    <button type="submit" name="submitPost" style="width:100%; margin:10px;" class="btn btn-dark ">Save</button>

  </center></div>
</form>
      
        
        </div>
        
        
      </div>


      
<div class="container">
    <table class="table">
        <thead>
          
            <th scope="col">#</th>
            <th scope="col">price</th>
            <th scope="col"> img</th>
            <th scope="col">action</th>
         
        </thead>
        <tbody>
        
          <?php
    $sql = "SELECT * FROM `userslidercard` ORDER BY id" ;
    $selectpost = $db->prepare($sql);
      if($selectpost->execute()){
    
      for($i = 0 ; $row=$selectpost->fetch(PDO::FETCH_OBJ); $i++){
     
    echo '
    <tr>
    <td>'.$row->id.'</td>
    <td>'.$row->price.'</td>
    <td> <img src="../final_website/slider_images/'.$row->image.'" style="width: 50px; height:100px; object-fit: contain;" alt=""> </td>
    <td><a style="margin-right: 13px; color: blue; cursor: pointer;" href="?p=sedit&sliderPost='.$row->id.'" class="">Update</a><a href="?p=homeSliderCard&id='.$row->id.'" class="deleteAction">Delete</a></td>
    </tr>';
    
    
      }
    }
    
    
    ?>
        </tbody>
      </table>
</div>


