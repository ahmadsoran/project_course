
  <?php

if(isset($_POST['sendMessage'])){
  
$name=$_POST['name'];
$email=$_POST['email'];

$message=$_POST['message'];
 




$sql = "INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";

$selectpost = $db->prepare($sql);

  if($selectpost->execute()){


      header('Location:index.php?p=home');
      exit;
} else {
    echo "Error";
}


}

?>
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact us</h2>
                    </div>
                    <form class="main_form" method="POST">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Your name" type="text" name="name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Email" type="text" name="email">
                            </div>
                            
                            <div class="col-md-12">
                                <textarea class="textarea" name="message" placeholder="message"></textarea>
                            </div>
                            <div class=" col-md-12">
                            <i><img class="send-btn-animation" id="ftr-img" src="images/mail-message-send-icon.png" width="200px" alt=""></i>   
                            <button name="sendMessage" type="submit" onclick="sendAnim()" id="ftr-btn" class="nv-btn">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

    <!-- footer -->
    <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-md-12 ">
                        <div class="footer-box">
                            <div  class="headinga">
                                <h3>Address</h3>
                                <span>Sulymaniah, Bakhtiari ,youth center</span>
                                <p> <a style="color: white;" href="tel:+964 7701234567">Click Me For Call 8AM - 8PM</a>
                                    <br><a style="color: white;" href="mailto:test@test.com"> Send Us a mail </a></p>
                            </div>
                            <ul class="location_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>

                            </ul>
                            <div class="menu-bottom" >
                                <ul class="link">
                                    <li> <a href="?p=home">Home</a></li>
                                    <li> <a href="?p=about">About</a></li>
                                    
                                    <li> <a href="?p=brand">Brand </a></li>
                                    <li> <a style="cursor: pointer; color: red;" onclick="showMap()">Location  </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="animation/lib/anime.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="animation/vanilla-tilt.js"></script>
    <script src="mystyle.js"></script>

</body>

</html>