
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                     <div class="col-xl-4 col-sm-4 col-6 col-md-4 mb-4">
                            <div data-link="?p=tables" class="card  border-left-primary shadow h-100 py-2">
                               <div class="card-body" >
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               Users</div>
                                            <div class="h5 mb-0 font-weight-bold ">                         <?php
$sql = "SELECT count(id) as 'cid' FROM login";
$selectpost = $db->prepare($sql);
  if($selectpost->execute()){
  while($row=$selectpost->fetch(PDO::FETCH_OBJ)){
  echo $row->cid;
 

  }
}

?>
</div>
                                        </div>      
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-sm-4 col-6 col-md-4 mb-4">
                            <div data-link="?p=cards" class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Posts</div>
                                            <div class="h5 mb-0 font-weight-bold">                                <?php
$sql = "SELECT count(id) as 'cid' FROM card";
$selectpost = $db->prepare($sql);
  if($selectpost->execute()){
  while($row=$selectpost->fetch(PDO::FETCH_OBJ)){
  echo $row->cid;
 

  }
}

?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-4 col-sm-4 col-6 col-md-4 mb-4" >
                            <div data-link="?p=messages" class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold ">
                                            <?php
$sql = "SELECT count(id) as 'cid' FROM contact";
$selectpost = $db->prepare($sql);
  if($selectpost->execute()){
  while($row=$selectpost->fetch(PDO::FETCH_OBJ)){
  echo $row->cid;
 

  }
}

?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
