
      
<?php

if(isset($_POST['sendMessage'])){
  
$name=$_POST['name'];
$email=$_POST['email'];

$message=$_POST['message'];
 




$sql = "INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";

$selectpost = $db->prepare($sql);

  if($selectpost->execute()){


      header('Location:index.php');
} else {
    echo "Error";
}


}

?>
<footer>

  <div class="container rudawfont">
    <div class="contact-clean">
      <form method="post">
          <h2 class="text-center">تیبینیت بنوسه‌</h2>
          <div class="form-group"><input class="form-control" type="text" name="name" placeholder="ناو"></div>
          <div class="form-group"><input class="form-control " type="email" name="email" placeholder="ئیمێڵ"></div>
          <div class="form-group"><textarea class="form-control" name="message" placeholder="تيبيني" rows="14"></textarea></div>
          <div class="form-group"><button class="btn btn-dark" name="sendMessage" type="submit">send </button></div>
      </form>
  </div>
  <div class="footer-clean" style="background-color: rgb(45,45,45);">
      <footer class="text-right">
          <div class="container text-right text-white">
              <div class="row justify-content-center">
                  <div class="col-sm-3 col-md-3 item">
                      <h4 class="text-center">برانده‌كان</h4>
                      <ul class="list-unstyled text-center">
                          <li><a href="#">شاومی</a></li>
                          <li><a href="#">ئه‌پڵ</a></li>
                          <li><a href="#">سامسۆنگ</a></li>
                      </ul>
                  </div>
                  <div class="col-sm-3 col-md-3 item">
                    <h4 class="text-center">هیتر</h4>
                    <ul class="list-unstyled text-center">
                        <li><a href="#">كۆمپیته‌ر</a></li>
                        <li><a href="#">تابلیت</a></li>
                        <li><a href="#">ئایپاد</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-6 item">
                  <h4 class="text-center">شوێنی ئێمه‌</h4>
               <hr>
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3245.611058885294!2d45.412835819326695!3d35.56330677174767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40002ffccf9ecc8d%3A0x893f9c152fb7252b!2sPDO-People&#39;s%20Development%20Organization!5e0!3m2!1sen!2siq!4v1630324681500!5m2!1sen!2siq" width="100%" height="300px" style="border:0;" class="map" allowfullscreen="true" loading="lazy"></iframe>
              </div>
              
              </div>
          </div>
      </footer>
  </div>
  </div>

</footer>


  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="assets/js/new-age.js"></script>
  <script src="my.js"></script>
  

</body>

</html>