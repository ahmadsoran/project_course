
<?php
    ob_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Best Ohone</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="my.css">
</head>
<?php 

?>
<body id="page-top">
    <nav class="navbar navbar-expand-lg fixed-top " id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger rudawfont"  href="#page-top">بێست فۆن</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler float-right" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active js-scroll-trigger rudawfont" style="font-size: large;"  href="#download">نوێ</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger rudawfont" style="font-size: large;"  href="#features">  كاڵاكان</a></li>
                    <li class="nav-item dropdown "><a class="dropdown-toggle nav-link rudawfont" style="font-size: large;"  data-toggle="dropdown" aria-expanded="false" href="#">هتد...</a>
                    <div class="dropdown-menu text-primary" role="menu"><button type="update" name="about" class="dropdown-item" role="presentation" >About</button><a require('?p=about.php') class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </li>
                </ul>
                <button class="nav-item nav-link shopsection"  data-toggle="modal" data-target="#exampleModal">هه‌‌ژماره‌كه‌م &nbsp; <i class="fa fa-users" aria-hidden="true"></i></button>
                <button class="nav-item nav-link shopsection"> سه‌به‌ته‌كه‌م &nbsp; <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </button>

        </div>
        </div>
    </nav>
  
  <!-- Modal -->
  <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content rudawfont">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">هه‌‌ژمار</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
   
            <form method="post" name="login">
<div class="container ">
    <h1 style="display: inline-flex;">بێست<h1 style="display: inline-flex; color: orange; margin-right: 15px;" class="rwdawfont">فۆن</h1></h1>

</div>         
 <input type="text" name="loginEmail" id="loginEmail" placeholder= "username" maxlength="40" minlength="5" autocomplete="off">
          <input type="password" name="loginPassword" id="loginPassword" maxlength="100" minlength="5" placeholder="password‌">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger " data-dismiss="modal">لادان</button>
          <button onclick="logr();" type="button" name="loginbtn" class="btn btn-dark">داخڵ بوون</button>
        </div>
    </form>
      </div>
    </div>
  </div>

    <header class="masthead" style="background: linear-gradient(to left, #7b4397, #dc2430);
    height:100%;">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-7 my-auto">
                    <div class="mx-auto header-content">
                        <h1 class="mb-5 text-focus-in rudawfont"  >بێست فۆن بازاڕێكی ئۆنلاین بۆ كڕین و فرۆشتنی مۆبایل</h1><a  class="btn btn-outline-warning btn-xl js-scroll-trigger rudawfont srchbtn" role="button" href="#download">گه‌ڕان</a></div>
                </div>
                <div class="col-lg-5 my-auto">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device" style="background-image:url(assets/img/iphone_6_plus_white_port.png);">
                                <div class="screen"><img class="img-fluid" src="assets/img/money.jpg"></div>
                                <div class="button"></div>
                            </div>
                        </div>
                    </div>
                    <div class="iphone-mockup"></div>
                </div>
            </div>
        </div>
    </header>