function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("body").style.marginLeft = "250px";
    document.getElementById("main").style.filter = "blur(5px)";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";

  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("body").style.marginLeft= "auto";
    document.body.style.backgroundColor = "white";
    document.getElementById("main").style.filter = "none";


  }
 
 
function showUser(){
  document.getElementById("displayUserForm").style.display="block";
  document.getElementById("displayUserForm").style.marginLeft="auto";
  document.getElementById("displayUserForm").style.marginRight="auto";
}

function showUserSignUp(){
  document.getElementById("userSignUpForm").style.display="block";

}

function hideUser(){

  document.getElementById("displayUserForm").style.display="none";

}

function hideUserSignUp(){

  document.getElementById("userSignUpForm").style.display="none";
  
}

function showImg(){
  let file = document.getElementById("file").files;
  if(file.length > 0){
    let fileReader = new FileReader();
    fileReader.onload = function(event){
      document.getElementById("inputImg").setAttribute("src", event.target.result);
    };
    fileReader.readAsDataURL(file[0]);
  }
}


function showCardUploader(){
  document.getElementById("cardUpload").style.display="block";

}

function hideCardUploader(){

  document.getElementById("cardUpload").style.display="none";

}
