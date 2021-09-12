anime({
  targets: '.navbar-brand',
  translateY: [-333, 0],
  duration: 1000,
  delay: 1000
});




anime({
  targets: '.logined',
  translateY: [-250, 0],
  duration: 4000
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
let hswiper = new Swiper(".headSwiper", {
  spaceBetween: 30,
  effect: "fade",
  
});

let swiper = new Swiper(".mySwiper", {
loop: true,
  effect: "coverflow",
  grabCursor: false,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 37,
    stretch: 0,
    depth: 200,
    modifier: 1,
    slideShadows: false,
  },
  
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
    
  },
  pagination: {
    el: ".swiper-pagination",
    type: 'bullets',
    clickable: true,
    clickable: 	'swiper-pagination-clickable',
  },
});

function vTOi(){
  document.getElementById("email1").value= "a@a.a";
  document.getElementById("password1").value= "a";

}

AOS.init();

anime({
  targets: '.AboutImg h3',
delay: 600,

 translateX: [
  
  { value: [-300,0], duration: 6000  },
  { value: [0,900], duration: 6000 , delay:9000 },
 
   
  ],
  rotate:   { value: [360,0], duration: 6000  },

  scaleX: [
    { value: [1,7], duration: 3000, delay: 6100 },
    { value: [7,1], duration: 2000, delay: 4500  },

   
  ],
  scaleY: [
    { value: [1,10], duration: 2000, delay: 7200 },
    { value: [10,1], duration: 2000, delay: 2000 },

   
  ],

  easing: 'easeOutElastic(1, .8)',
  loop: true
});


anime({
  targets: '.a1',
delay: 600,
translateY: [
  
  { value: [-600,0], duration: 1000  },
 
   
  ],
translateX: [
  
  { value: [600,0], duration: 1000, delay: 1100, },
 
   
  ],
 
  

  easing: 'easeOutElastic(1, .8)',
});

anime({
  targets: '.a2',
  delay: 1100,
translateY: [
  
  { value: [-600,0], duration: 1000  },
 
   
  ],
translateX: [
  
  { value: [600,0], duration: 1000, delay: 1000*2, },
 
   
  ],
 
  
  easing: 'easeOutElastic(1, .8)',

});

anime({
  targets: '.a3',
delay: 1100*2,
translateY: [
  
  { value: [-600,0], duration: 1000  },
 
   
  ],
translateX: [
  
  { value: [600,0], duration: 1000, delay: 1000*4, },
 
   
  ],
 
  
  easing: 'easeOutElastic(1, .8)',

});

anime({
  targets: '.a4',
delay: 1100*4,
translateY: [
  
  { value: [-600,0], duration: 1000  },
 
   
  ],
translateX: [
  
  { value: [600,0], duration: 1000, delay: 1000*6, },
 
   
  ],
 
  
  easing: 'easeOutElastic(1, .8)',

});

anime({
  targets: '.a5',
delay: 1100*6,
translateY: [
  
  { value: [-600,0], duration: 1000  },
 
   
  ],
translateX: [
  
  { value: [600,0], duration: 1000, delay: 1000*8, },
 
   
  ],
 
  
  easing: 'easeOutElastic(1, .8)',

});

anime({
  targets: '.a6',
delay: 1100*8,
translateY: [
  
  { value: [-600,0], duration: 1000  },
 
   
  ],
translateX: [
  
  { value: [600,0], duration: 1000, delay: 1000*10, },
 
   
  ],
 
  
  easing: 'easeOutElastic(1, .8)',

});


anime({
  targets: '.a7',
delay: 1100*10,
translateY: [
  
  { value: [-600,0], duration: 1000  },
 
   
  ],
translateX: [
  
  { value: [600,0], duration: 1000, delay: 1000*12   },
 
   
  ],
  easing: 'easeOutElastic(1, .8)',

});

anime({
  targets: '.aboutHeaderText h1 ,.aboutHeaderText h6 ,.aboutHeaderText h3',
  delay: 1000,
  scaleY: [0,1],
  duration: 500,
  easing: 'linear'
});