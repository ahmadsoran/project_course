  <!-- brand --->
 
        <div class="brand-bg">
            <div class="container">
                <div class="row">
                <?php
$sql = "SELECT * FROM card ORDER BY id";
$selectpost = $db->prepare($sql);
  if($selectpost->execute()){

  for($i = 0 ; $row=$selectpost->fetch(PDO::FETCH_OBJ); $i++){
 
   echo '<div class="d-table col-xl-3 col-lg-4 col-md-4 col-sm-6 margin">
<div class="brand_box" data-aos-duration="1000" data-aos-offset="180"
data-aos="zoom-in-up" style="font-family: sans-serif;">
    <div style="position: relative;">
        <img src="images/'.$row->cardImg.'" alt="img" />
    <h4>$<strong class="red">'.$row->price.'</strong></h4>
    <h3>'.$row->title.'</h3>
    <hr>
</div>
        <h5 style="margin: 5px;"><em>Storage:&nbsp;</em>'.$row->storage.'</h5>
    <h5>color:<em >&nbsp;'.$row->color.'</em></h5>

   <button class="btn btn-dark">See more</button>
</div>
</div>
';
  }
}
  ?>
            
                    
                </div>
            </div>
        </div>
   