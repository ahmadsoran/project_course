<section style="background-color: white;">
    <div class="container-fluid" style="padding: 0%;">

        <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner s1">
                <div class="carousel-item active" data-bs-interval="false">
                    <img src="images/cellular-4602489.jpg" class=" sliIMg d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/cell-phone-690192.jpg" class="sliIMg d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/internet-3113279.jpg" class="sliIMg d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/apple-1867461.jpg" class="sliIMg d-block w-100" alt="...">
                </div>

                <div class="headerText">
                    <h1>Best Phone is a online Shop service</h1>
                    <h3>our cell phones 100% clean We physically stock thousands of handsets across all the main
                        manufacturers from the older retro models right up to the latest devices so if you’re looking
                        for an affordable quality used mobile, then you are certainly in the right place.</h3>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- about -->
<div class="about">
    <div class="container">
        <div class="row">

            <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                <div class="about_box" data-aos-duration="1000" data-aos-easing="ease-in-out-quart
                    " data-aos="zoom-in-right">
                    <h3>About Us</h3>
                    <span>Our Mobile Shop</span>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of It is a long established fact that a reader will be
                        distracted by the readable content of a page when looking at its layout. The point of It is a
                        long established fact that a reader will be distracted by the </p>

                </div>

            </div>
            <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                <div class="about_img" data-aos-duration="1000" data-aos-easing="ease-in-out-quart
                " data-aos="zoom-in-left">
                    <figure><img src="images/about.png" alt="img" /></figure>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end about -->

<!-- brand -->
<div class="brand" style="backdrop-filter: blur(6px);">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xs-8 col-sm-6 col-md-5 col-xl-4 col-lg-4">
                <div class="titlepage">
                    <h2 style=" color: darkred; text-shadow: 0px 2px 4px black;" data-aos-duration="1000"
                        data-aos-offset="100" data-aos="zoom-in-up">Our Brand</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="brand-bg">
    <div class="container">
        <div class="row">

            <?php
$sql = "SELECT * FROM card ORDER BY id";
$selectpost = $db->prepare($sql);
  if($selectpost->execute()){

  for($i = 0 ; $row=$selectpost->fetch(PDO::FETCH_OBJ); $i++){
 
   echo '<div class="d-table col-xl-3 col-lg-4 col-md-4 col-sm-6 margin">
<div class="brand_box" style="font-family: sans-serif;">
    <div style="position: relative;">
        <img class="CardiImg" src="images/'.$row->cardImg.'" alt="img" />
    <h4>$<strong class="red">'.$row->price.'</strong></h4>
    <h3>'.$row->title.'</h3>
    <hr>
</div>
        <h5 style="margin: 5px;"><em>Storage:&nbsp;</em>'.$row->storage.'</h5>
    <h5>color:<em >&nbsp;'.$row->color.'</em></h5>

   <button class="btn btn-dark">See more</button>
</div>
</div>';
  }
}
  ?>
            <div class="col-md-12">
                <a class="read-more" href="?p=brand">See More</a>

            </div>
        </div>
    </div>
</div>
<!-- end brand -->
<!-- clients -->
<div class="clients" ">
        <div class=" container">
    <div class="row">
        <div class="col-md-12">
            <div class="titlepage">
                <h2>what say our clients</h2>
            </div>
        </div>
    </div>
</div>
</div>
<div class="clients_red">
    <div class="container">
        <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item">
                    <div class="testomonial_section">
                        <div class="full center">
                        </div>
                        <div class="full testimonial_cont text_align_center cross_layout">
                            <div class="cross_inner">
                                <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit ess</i>
                                </p>
                                <div class="full text_align_center margin_top_30">
                                    <img src="icon/testimonial_qoute.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item active">

                    <div class="testomonial_section">
                        <div class="full center">
                        </div>
                        <div class="full testimonial_cont text_align_center cross_layout">
                            <div class="cross_inner">
                                <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit ess</i>
                                </p>
                                <div class="full text_align_center margin_top_30">
                                    <img src="icon/testimonial_qoute.png">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="carousel-item">

                    <div class="testomonial_section">
                        <div class="full center">
                        </div>
                        <div class="full testimonial_cont text_align_center cross_layout">
                            <div class="cross_inner">
                                <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit ess</i>
                                </p>
                                <div class="full text_align_center margin_top_30">
                                    <img src="icon/testimonial_qoute.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
<!-- end clients -->