

<?php
    
    if(isset($_GET['sliderPost'])){
        $id=$_GET['sliderPost'];
        $Price="";
        $SliderImg="";
      $sql = "SELECT * FROM userslidercard where id='$id'";
      $selectpost = $db->prepare($sql);
      if($selectpost->execute()){
      
      while($row=$selectpost->fetch(PDO::FETCH_OBJ)){
      $Price=$row->price;
      $SliderImg=$row->image;
      
      }
      }
      
      }
      
      if(isset($_POST['send'])){
        

$price=$_POST['price'];
$sliderImg = @$_FILES['sliderImg']['name'];
$sliderImg_tmp = @$_FILES['sliderImg']['tmp_name'];
        
        if(isset($_GET['sliderPost'])){
            $id=$_GET['sliderPost'];
        }
        $sql = "UPDATE `userslidercard` SET `price`='$price' ,`image`='$sliderImg' WHERE id='$id'";
        
        $selectpost = $db->prepare($sql);
        
          if($selectpost->execute()){
            move_uploaded_file($sliderImg_tmp,"../final_website/slider_images/$sliderImg");
            header('Location:?p=homeSliderCard');
            } else {
                echo '<h1>Error</h1>';
            }
            
      }
    ?>





<div class="container" id="cardUpload"  style="margin-top: 1%;">
        <div class="row cardUploader">
          <div class="col-md-6">
<form method="post" enctype="multipart/form-data">
<?php
   
 if(isset($_GET['sliderPost'])){
  echo      '  <input type="text" class="cardInputs" name="price"   placeholder="Card price" value="'.$Price.'">
  ';
}
else{
  echo      '  <input type="text" class="cardInputs" name="price"   placeholder="Card price">
  ';

}

?>
    
  </span>
          
</div>
<div class="col-md-6" >
  <label style="font-family: NRT-Reg;" for="file">Card Image</label>
  <?php
 if(isset($_GET['sliderPost'])){
   echo      ' <input type="file" class="cardInputs" name="sliderImg"  onchange="showCardImage() , upcON()" id="MyFile" placeholder="Card img" value="'.$SliderImg.'">';
   echo'<div class"container"> <p style="color: red; background-color: rgba(0, 0, 0, 0.616); width: fit-content; padding: 5px; border-radius: 10px;"  id="updatecardoldnew">Your Old Photo</p><p style="color: rgb(45, 255, 4); background-color: rgba(0, 0, 0, 0.616); width: fit-content; padding: 5px; border-radius: 10px;" id="updatecardnew">Your New Photo</p> 
   <img class="sliderImganim" style="width: 300px; height: 200px; object-fit: contain; color: white;" id="inputCardImage" src="../final_website/slider_images/'.$SliderImg.'" alt="" /></div>
   ';
}
 else{
    echo      ' <input type="file" class="cardInputs" name="sliderImg"  onchange="showCardImage()" id="MyFile" placeholder="Card Color" >'; }
?>
 
</div>
<div class="container"><center>
    <button type="submit" name="send" style="width:100%; margin:10px;" class="btn btn-dark ">update</button>

  </center></div>
</form>
      
        
        </div>
        
        
      </div>

