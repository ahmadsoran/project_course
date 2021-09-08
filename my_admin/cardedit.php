

<?php
    
    if(isset($_GET['idc'])){
        $id=$_GET['idc'];
      $Title="";
      $Dp="";
      $Storage="";
      $Color="";
      $Cardimg="";
      $sql = "SELECT * FROM card where id='$id'";
      $selectpost = $db->prepare($sql);
      if($selectpost->execute()){
      
      while($row=$selectpost->fetch(PDO::FETCH_OBJ)){
      $Title=$row->title;
      $Dp=$row->dp;
      $Storage=$row->storage;
      $Color=$row->color;
      $price=$row->price;
      $Cardimg=$row->cardImg;
      
      }
      }
      
      }
      
      if(isset($_POST['send'])){
        
$title=$_POST['cardTitle'];
$dp=$_POST['cardDescription'];
$storage=$_POST['cardstorage'];
$color=$_POST['cardcolor'];
$price=$_POST['price'];
$cardImg = @$_FILES['cardImg']['name'];
$cardImg_tmp = @$_FILES['cardImg']['tmp_name'];
        
        if(isset($_GET['idc'])){
            $id=$_GET['idc'];
        }
        $sql = "UPDATE `card` SET `title`='$title',`dp`='$dp',`storage`='$storage' ,`color`='$color', `price`='$price' ,`cardImg`='$cardImg' WHERE id='$id'";
        
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
          <div class="col-md-6">
<form method="post" enctype="multipart/form-data">
<?php
     if(isset($_GET['idc'])){
       echo      '  <input type="text" class="cardInputs" name="cardTitle"   placeholder="Card Title" value="'.$Title.'">
       ';
     }
     else{
       echo      '  <input type="text" class="cardInputs" name="cardTitle"   placeholder="Card Title">
       ';
 
     }
 ?>
 <?php
     if(isset($_GET['idc'])){
       echo      '  <input type="text" class="cardInputs" name="cardDescription"   placeholder="Card Description" value="'.$Dp.'">
       ';
     }
     else{
       echo      '  <input type="text" class="cardInputs" name="cardDescription"   placeholder="Card Description">
       ';
 
     }
 ?>
  <span>
  <?php
     if(isset($_GET['idc'])){
       echo      '  <input type="text" class="cardInputs" name="cardstorage"   placeholder="Card Storage" value="'.$Storage.'">
       ';
     }
     else{
       echo      '  <input type="text" class="cardInputs" name="cardstorage"   placeholder="Card Storage">
       ';
 
     }
 ?>  <?php
 if(isset($_GET['idc'])){
   echo      '  <input type="text" class="cardInputs" name="cardcolor"   placeholder="Card Color" value="'.$Color.'">
   ';
 }
 else{
   echo      '  <input type="text" class="cardInputs" name="cardcolor"   placeholder="Card Color">
   ';

 }
 if(isset($_GET['idc'])){
  echo      '  <input type="text" class="cardInputs" name="price"   placeholder="Card price" value="'.$price.'">
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
 if(isset($_GET['idc'])){
   echo      ' <input type="file" class="cardInputs" name="cardImg"  onchange="showCardImage() , upcON()" id="MyFile" placeholder="Card Color" value="'.$Cardimg.'">';
   echo'<div class"container"> <p style="color: red; background-color: rgba(0, 0, 0, 0.616); width: fit-content; padding: 5px; border-radius: 10px;"  id="updatecardoldnew">Your Old Photo</p><p style="color: rgb(45, 255, 4); background-color: rgba(0, 0, 0, 0.616); width: fit-content; padding: 5px; border-radius: 10px;" id="updatecardnew">Your New Photo</p> 
   <img class="cardimganim" style="width: 300px; color: white;" id="inputCardImage" src="../final_website/images/'.$Cardimg.'" alt="" /></div>
   ';
}
 else{
    echo      ' <input type="file" class="cardInputs" name="cardImg"  onchange="showCardImage()" id="MyFile" placeholder="Card Color" >'; }
?>
 
</div>
<div class="container"><center>
    <button type="submit" name="send" style="width:100%; margin:10px;" class="btn btn-dark ">update</button>

  </center></div>
</form>
      
        
        </div>
        
        
      </div>

