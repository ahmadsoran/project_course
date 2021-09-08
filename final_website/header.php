<?php
    ob_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Best-Phone</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/1.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" z="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="mystyle.css">
</head>
<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
 
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <nav class="navbar navbar-expand-lg navbar-light" id="Mnavbar">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">Best-Phone <em id="dot"><h4 style="color: rgb(211, 209, 209);">.</h4></em> </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="Alink" aria-current="page" href="?p=home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="Alink" href="?p=brand">Brands</a>
                  </li>
                  <li class="nav-item">
                    <a class="Alink" href="?p=about">About</a>
                  </li> 
                  <li class="nav-item">
                    <a style="cursor: pointer;" class="Alink" onclick="showMap()" >Location</a>
                  </li>
                </ul>
                <span class="navbar-text">
                  <button style="float: right; margin-left: 5px;" class="nv-btn ">logIn</button> <button style="float: right;" class="nv-btn">signUp</button>

                </span>
              </div>
            </div>
          </nav>
       <div class="iframeMap" id="Map">
        <h1 class="closeMap" onclick="hideMap()">X</h1>
        <iframe style="width: 100%; height: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3245.4243272017725!2d45.400381260767595!3d35.567917155764775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40002e778ccc7d39%3A0x46b384c076c1ffce!2zWW91dGggYW5kIFJlY3JlYXRpb24gQ2VudGVyINiz25XZhtiq25XYsduMINqv25XZhtis2KfZhtuMINiz2YTbjtmF2KfZhtuM!5e0!3m2!1sen!2siq!4v1630757270352!5m2!1sen!2siq"  allowfullscreen="true" loading="lazy"></iframe>
    
       </div>
   
     
        <!-- end header inner -->
    </header>
    <!-- end header -->
