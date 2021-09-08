<?php
   $adminName = "ahmad";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <link rel="stylesheet" href="mystyle.css">
    <title>Admin</title>
</head>
<body id="body" >
   
<div id="mySidenav" class="sidenav">
    <i href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</i>
    <div class="container">
      <div class="sidebarimg">
        <center>
          <img src="img/me.jpg" width="70%" alt="">
          <hr>
          <h2>Admin <?php $adminName ?></h2>
        </center>
      </div>
        <a href="#" onclick="closeNav()">ته‌یبڵ</a>
    <a href="#" onclick="closeNav()">پۆسته‌كان</a>
    <a href="#" onclick="closeNav()">لێدۆانه‌كان</a>
    <a href="#" onclick="closeNav()">گفتوگۆي تیم</a>
    <div class="sidebarbtn">
      <button class="btn btn-danger">چوونه‌ده‌ره‌وه‌</button>
    </div>
    </div>
  </div>
  </div>
        
    <div class="container" id="main">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    
        <div class=" container header" >
            <div class="logo">
                <img src="img/pngfind.com-admin-icon-png-5286002.png" alt="">
            </div>
            <div class="headerText">
            
            <h2>Admin Page</h2> 

           
            </div>
        </div>
        <div class="row" >
            
            <div class="col toolsCard" onclick="showUser()" data-bs-toggle="modal" data-bs-target="#userModal">

               <img src="img/user.png" alt="">
               <hr>
               <h1 class="myfont">به‌كارهێنه‌ر</h1>
               
               </div>
                 
                 <div onclick="showCardUploader()" class=" col toolsCard">
                    <img src="img/posted.png" alt="">
                    <hr>
                    <h1 class="myfont">پۆسته‌كان</h1>
                     </div>
                     <div class=" col toolsCard">
                        <img src="img/inf.png" alt="">
                        <hr>
                        <h1 class="myfont">تیبینی ئه‌دمینه‌كان</h1>
                         </div>
                    <div class=" col toolsCard">
                    <img src="img/5416880981536834822-128.png" alt="">
                    <hr>
                    <h1 class="myfont">داتابه‌یس</h1>
                     </div>
                     <div class=" col toolsCard">
                        <img src="img/15071590061574055268-128.png" alt="">
                        <hr>
                        <h1 class="myfont">گوڕان كارییه‌كان</h1>
                         </div>
                         <div class=" col toolsCard">
                            <img src="img/other.png" alt="">
                            <hr>
                            <h1 class="myfont">توڵه‌كانی تر</h1>
                             </div>
                                                                                                    
           
        </div>
     

                <!------hidden content---->

      <div class="container" id="displayUserForm">
        <h1 onclick="hideUser()" class="hideDisplay">&times;</h1>

        <div class="row">
          <div class=" col toolsCard" onclick="showUserLogin()">
            <img src="img/user.png" alt="">
            <hr>
            <h1 class="myfont" >زانياراي به‌كارهێنه‌ران</h1>
             </div>
             <div class=" col toolsCard" onclick="showUserSignUp()">
              <img src="img/user.png" alt="">
              <hr>
              <h1 class="myfont"> تۆماركردنی به‌كارهێنه‌ر</h1>
               </div>
        </div>
      </div>
    

      <div class="container " id="userSignUpForm">
        <h1 onclick="hideUserSignUp()" class="hideDisplay">&times;</h1>
       
        <form class="userLoginForm">
          <h1 class="text-center" style="font-family: NRT-Reg">فۆڕمی تۆماركردن</h1>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ناوی ته‌واو</label>
            <input type="text" class="form-control userLoginFormInputEmail"aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ئیمێڵ</label>
            <input type="email" class="form-control userLoginFormInputEmail">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">وشه‌ی تێپه‌ڕبوون</label>
            <input type="password" class="form-control userLoginFormInputEmail">
          </div>
          
         
          <button type="submit" class="btn btn-primary">داخل</button>
        </form>
      </div>
        
      <div class="container" id="cardUpload"  style="margin-top: 8%;">
        <h1 onclick="hideCardUploader()" class="hideDisplay">&times;</h1>
        <div class="row cardUploader">
          <div class="col cardInputs">

            <input type="text" class="cardInputs" name="cardTitle" id="cardTitle"  placeholder="ناوی جیهاز">
            <input type="text" class="cardInputs" name="cardDescription" id="cardDescription"  placeholder="وه‌سفیكی كورت">
            <span>
              <input type="text"  class="cardInputs" name="cardStorage" id="cardStorage" placeholder="برگه‌ی جیهاز">
              <input type="text"  class="mcardInputs" name="cardColor" id="cardColor"  placeholder="ڕه‌نگی جیهاز">
            </span>
                    
          </div>
          <div class="col">
            <label style="font-family: NRT-Reg;" for="file">وێنه‌ی كارته‌كه‌ هه‌ڵبژێره‌</label>
            <input type='file' id="file" />
            <img style="width: 300px; color: white;" id="inputImg" src="#" alt="ڕه‌سمه‌كه‌ هه‌ڵبژێره‌" />
        </div>
        <div class="row">
          <div class="col">
            <center>
              <button type="submit" style="width:100%; margin:10px;" class="btn btn-dark ">ناردن</button>

            </center>
          </div>
        </div>
      </div>
      </div>
      <div class="container">    
        <table class="table">
          <thead>
            <tr>
              <th scope="col">به‌كارهێنه‌ر</th>
              <th scope="col">ناو</th>
              <th scope="col">پله‌</th>
              <th scope="col">بار</th>
              <th>بار</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Ahmed Soran</td>
              <td>Admin</td>
              <td>dsdss</td>
              <td style="color: rgb(33, 214, 33);">Online</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Aso Ali</td>
              <td>User</td>
              <td>dsdss</td>
              <td style="color: red;">Offline</td>
            </tr>
         
          </tbody>
        </table>
        </div>
     
     
          
      </div>
     
          <!------ end hidden content---->
     
      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="ad.js"></script>
    </body>
</html>