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
?>

<div class="container-fluid bg-light">
<div class="productContent">
<div class="row">
<?php
     if(isset($_GET['idc'])){
       echo      '
    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
        <div class="p-content">
         <div class="p-texts"> <h2>Device: '.$Title.'</h2>
            <hr>
            <h2>Storage: '.$Storage.'</h2>
            <hr><h2>Color: '.$Color.'</h2>
            <hr><h2 class="p-Des">Description:  '.$Dp.'</h2>      <hr>
    </div>   
       

        </div>
    </div>
 
    <div class="col-12 col-sm-12 col-md-6 a col-lg-6">
        <div class="productImg">
            <img src="../final_website/images/'.$Cardimg.'" alt="">
        </div>
    </div>'; }
    
    ?>
    
</div>


    </div>
</div>