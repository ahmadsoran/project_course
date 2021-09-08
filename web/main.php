<section id="download" style="background-color: rgba(0, 0, 0, 0.877);  border-radius: 30px 15px; color: white; box-shadow: 1px 10px 25px rgb(99, 99, 99);  margin: 10px;">
    <div class="container">
        <div class="row">
          
            <div class="col col-sm-8 col-lg-8 col-md-8 mx-auto rudawfont">
                <h2 class="section-heading">لێره‌ نوێ ترین مۆبایله‌ كان ببینه‌ </h2>
                <p>كۆمپانیای بێست فۆن بریكاری سه‌ره‌كی برانده‌ جیهانییه‌كانه‌ </p>
        </div>
        </div>
    </div>
</section>
    <section id="features" class="features" >
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="rudawfont">مۆبایله‌كان</h2>
                <p class="text-muted rudawfont">باشترین و گونجاونرین</p>
                <hr>
            </div>

            <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
                <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                    
                    <?php
$sql = "SELECT * FROM card ORDER BY id";
$selectpost = $db->prepare($sql);
  if($selectpost->execute()){

  for($i = 0 ; $row=$selectpost->fetch(PDO::FETCH_OBJ); $i++){
 
   echo '<div style="margin-top: 4rem;" class="col-6 col-sm-6 col-md-4 col-lg-4 ">
    <div class="card h-100"> <img style="border-radius: 15px; width: auto; max-width: 100%; max-height: 200px; object-fit: contain;" src="assets/img/'.$row->cardImg.'" class="" alt="...">
        <div class="card-body">
            <div class="clearfix mb-3" style="font-size: 100%;"> <span class="float-start badge rounded-pill bg-success">1.400.000IQD</span> <span class="float-right"><a href="#">نرخ &nbsp;</a></span> </div>
            <div class="card-title">
            <h3 class="rudawfont" style="text-align: center; font-weight: bold; font-size: 100%;">'.$row->title.'</h3>
            
            </div>
        </div>
    </div>
</div>
    ';

  }
}


?>
                </div>
            </div>
        </div>
    </section>