anime({
  targets: '.navbar-brand',
  translateY: [-333, 0],
  duration: 1000,
  delay: 1000
});




anime({
  targets: '.navbar',
  translateY: [-250, 0],
  duration: 3000
});

anime({
  targets: '.headerText',
  opacity: [0, 1],
  duration: 3000,
  easing: 'linear'

});

function showMap() {
  anime({
    targets: '.iframeMap',
    translateY: [-300, 0],
    duration: 3000,

  });
  document.getElementById("Map").style.display = "block";


}

function hideMap() {


  document.getElementById("Map").style.display = "none";

}


function sendAnim() {
  document.getElementById("ftr-btn").style.display = "none";

  anime({
    targets: '.send-btn-animation',
    translateX: 1100,
    duration: 4000,
    opacity: [0, 1],
    scale: [0, 1],
  });
  document.getElementById("ftr-img").style.display = "block";


}
VanillaTilt.init(document.querySelectorAll(".brand_box img , .about_img img"), {
  max: 15,
  speed: 500,
  glare: true,
  "max-glare": 1,
  transition: true, // Set a transition on enter/exit.
  scale: 1.1,

});

//It also supports NodeList
VanillaTilt.init(document.querySelectorAll(".brand_box img ,.about_img img "));

AOS.init({});