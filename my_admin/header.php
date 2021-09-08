<?php
ob_start();


?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin <?php
if(isset($_SESSION['username'])){
    echo $_SESSION['username'];
}


?>
</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link rel="stylesheet" href="css/my.css">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav  sidebar  sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin<sup>&nbsp; Panel</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider  my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
  <!-- Divider -->
  <hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item active">
    <a class="nav-link  collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog "></i>
        <span>Components</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="?p=cards">Cards</a>
            <a class="collapse-item" href="?p=messages">Messages</a>
            <a class="collapse-item" href="?p=homeSliderCard">Main Web Slider</a>
        </div>
    </div>
</li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>
 
            <!-- Nav Item - Charts -->
            <li class="nav-item active">
                <a class="nav-link" href="?p=charts">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="?p=tables">
                    <i class="fas fa-fw fa-table"></i>
                    <span>User Data</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">


        
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                  

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">        <?php
                      
                      $sql2 = "SELECT COUNT(distinct cardCunt.id) +  COUNT(distinct msgCunt.id) +   COUNT(distinct sliCunt.id) AS notifications
                      FROM card cardCunt,  contact msgCunt, userslidercard sliCunt;";
                      $selectpost = $db->prepare($sql2);
                        if($selectpost->execute()){
                        while($row=$selectpost->fetch(PDO::FETCH_OBJ)){
                        echo $row->notifications;
                      
                        }
                      };
                      ?></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu notis dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown" style="overflow: auto; max-height: 60vh;">
                                <h6 class="dropdown-header">
                                    notifications
                                </h6>
                                
                                <!-- mesages -->
                              
                             
                                <div class="container ">
                                    <div class="row">
                                        <?php
                                $sql = "SELECT * FROM `contact`";
                                $selectpost = $db->prepare($sql);
                                  if($selectpost->execute()){
                                
                                  for($i = 0 ; $row=$selectpost->fetch(PDO::FETCH_OBJ); $i++){
                                 
                                echo '
                                <div class="col-12">

                                <h1 class="notiHeader" style="color: red;">New Messages</h1></div>
                                <div class="col-3  col-md-3 col-lg-3">
                                
                                <img style="display: flex; margin-top: 10px; align-items: center;" src="img/user.png" width="50vh" height="50vh" alt="">
                            </div>
                            <div class="col-9  col-md-9 col-lg-9">
                                          <div class="msgcontent">
                                                <h2>From:&nbsp;'.$row->name.'</h2>
                                                <hr>
                                                <p>'.$row->message.'</p><em><a href="?p=messages">see</a></em>
                                                
                                            </div>
                                            </div>

                                            <hr style="background-color: rgba(211, 211, 211, 0.658); width: 100%;">
                                            ';
                                        }
                                      }
                                      
                                      
                                      ?>
                                      <?php
                                      $sql = "SELECT * FROM `card`" ;
                                      $selectpost = $db->prepare($sql);
                                        if($selectpost->execute()){
                                      
                                        for($i = 0 ; $row=$selectpost->fetch(PDO::FETCH_OBJ); $i++){
                                       
                                      echo '
                                      <div class="col-12">
      
                                      <h1 class="notiHeader" style="color: rgb(0, 187, 0);">New Posts</h1></div>
                                      <div class="col-3  col-md-3 col-lg-3">
                                      
                                      <img style="display: flex; margin-top: 10px; align-items: center;" src="img/posted.png" width="50vh" height="50vh" alt="">
                                  </div>
                                  <div class="col-9  col-md-9 col-lg-9">
                                                <div class="msgcontent">
                                                      <h2>'.$row->title.'</h2>
                                                      <hr>
                                                      <img style="display: flex; margin-top: 10px; object-fit: contain; align-items: center;" src="../final_website/images/'.$row->cardImg.'" width="50vh" height="50vh"  alt="">
                                                      <em><a href="?p=cards">see</a></em>
                                                      
                                                  </div>
                                                  </div>
      
                                                  <hr style="background-color: rgba(211, 211, 211, 0.658); width: 100%;">
                                                  ';
                                              }
                                            }
                                            
                                            
                                            ?>
                                            <?php
                                            $sql = "SELECT * FROM `userslidercard`" ;
                                            $selectpost = $db->prepare($sql);
                                              if($selectpost->execute()){
                                            
                                              for($i = 0 ; $row=$selectpost->fetch(PDO::FETCH_OBJ); $i++){
                                             
                                            echo '
                                            <div class="col-12">
            
                                            <h1 class="notiHeader" style="color: gold;">New Slider Posts</h1></div>
                                            <div class="col-3  col-md-3 col-lg-3">
                                            
                                            <img style="display: flex; margin-top: 10px; align-items: center;" src="img/posted.png" width="50vh" height="50vh" alt="">
                                        </div>
                                        <div class="col-9  col-md-9 col-lg-9">
                                                      <div class="msgcontent">
                                                            
                                                            <img style="display: flex; margin-top: 10px; object-fit: contain; align-items: center;" src="../final_website/images/'.$row->image.'" width="50vh" height="50vh"  alt="">
                                                            <em><a href="?p=homeSliderCard">see</a></em>
                                                            
                                                        </div>
                                                        </div>
            
                                                        <hr style="background-color: rgba(255, 247, 174, 0.658); width: 100%;">
                                                        ';
                                                    }
                                                  }
                                                  
                                                  
                                                  ?>
                                    </div>
                                </div>
                             
                                <!-- end messages -->
                                
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white small"><?php
if(isset($_SESSION['username'])){
    echo $_SESSION['username'];
}


?>
</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>