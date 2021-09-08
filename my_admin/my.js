anime({
    targets: '.table',
    translateY: [-250 , 0],
    duration: 1000,
    easing: 'linear',
    opacity: [0,1],
  });
  anime({
    targets: '.card',
    translateY: [350 , 0],
    duration: 5000,
    delay: anime.stagger(130, {from: 'center'})
  });

  function showUserSignUp(){
    document.getElementById("userSignUpForm").style.display="block";
    anime({
      targets: '.userLoginForm',
      opacity:[0,1],
      duration: 2000,
      delay: 100,
    });
  }
  function hideUserSignUp(){
   document.getElementById("userSignUpForm").style.display="none";

  }
  function showCardImage(){
    let file = document.getElementById("MyFile").files;
    if(file.length > 0){
      let fileReader = new FileReader();
      fileReader.onload = function(event){
        document.getElementById("inputCardImage").setAttribute("src", event.target.result);
      };
      fileReader.readAsDataURL(file[0]);
    }
  }
  anime({
    targets: '.cardInputs , .cardimganim',
    opacity: [0,1],
    translateX: [-100,0],
    delay: anime.stagger(100, {start: 500})
  });
 

  anime({
    targets: '.updateUserStyle',
    translateX: [1000 , 0],
    easing: 'linear',
    duration: 800,
    opacity: [0,1]

  });

  function upcON(){
    document.getElementById("updatecardoldnew").style.display="none";
    document.getElementById("updatecardnew").style.display="block";

   }
   $(document).ready(function() {
    $("[data-link]").click(function() {
      window.location.href = $(this).attr("data-link");
      return false;
    });
  });