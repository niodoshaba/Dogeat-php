// 3/25 saved

window.addEventListener('load',function(){

   


  
  let cir1 = document.getElementById("cir1")
  let cir2 = document.getElementById("cir2")
  let cir3 = document.getElementById("cir3")
  let cir4 = document.getElementById("cir4")
  let bdiv = document.getElementById("bdiv")

  cir1.addEventListener('click',function(){
    bdiv.style.transform = "translateX(0%)"
    cir1.style.backgroundColor = "#55A34D"
    cir2.style.backgroundColor = "white"
    cir3.style.backgroundColor = "white"
    cir4.style.backgroundColor = "white"
   })
  cir2.addEventListener('click',function(){
    bdiv.style.transform = "translateX(-50%)"
    cir1.style.backgroundColor = "white"
    cir2.style.backgroundColor = "#55A34D"
    cir3.style.backgroundColor = "white"
    cir4.style.backgroundColor = "white"
  })
  cir3.addEventListener('click',function(){
    bdiv.style.transform = "translateX(-100%)"
    cir1.style.backgroundColor = "white"
    cir2.style.backgroundColor = "white"
    cir3.style.backgroundColor = "#55A34D"
    cir4.style.backgroundColor = "white"
  })
  cir4.addEventListener('click',function(){
    bdiv.style.transform = "translateX(-150%)"
    cir1.style.backgroundColor = "white"
    cir2.style.backgroundColor = "white"
    cir3.style.backgroundColor = "white"
    cir4.style.backgroundColor = "#55A34D"
  })


// 漢堡
var hamburger_icon = document.getElementById("hamburger_icon");
var hr1 = document.getElementById('hr1')
var hr2 = document.getElementById('hr2')
var hr3 = document.getElementById('hr3')
var menubur = document.getElementsByClassName('menubur')
var bodylock = document.getElementsByTagName('body')


// var tlmax = new TimelineMax({});
var burclick = true;

hamburger_icon.addEventListener("click", function(){
  
  if(burclick){
    burclick= false;
    
    
  hr1.classList.toggle("-on1")
  hr2.classList.toggle("-on2")
  hr3.classList.toggle("-on3")
  menubur[0].classList.toggle("-on4")

  if(innerWidth <= 768 ){
  bodylock[0].classList.toggle("-bodylock")

    TweenMax.from('.menup1', .5, {
    x: 500,
    ease: Expo.easeOut,
    });
    TweenMax.from('.menup2', .5, {
    x: -500,
    delay:0.1,
    ease: Expo.easeOut,
    });
    TweenMax.from('.menup3', .5, {
    x: 500,
    delay:0.15,
    ease: Expo.easeOut,
    });
    TweenMax.from('.menup4', .5, {
    x: -500,
    delay:0.2,
    ease: Expo.easeOut,
    });
    TweenMax.from('.menup5', .5, {
    x: 500,
    delay:0.25,
    ease: Expo.easeOut,
    });
    TweenMax.from('.menup6', .5, {
    x: -500,
    delay:0.3,
    ease: Expo.easeOut,
    });
    TweenMax.from('.menup7', .5, {
    x: 500,
    delay:0.35,
    ease: Expo.easeOut,
    });
    TweenMax.from('.menup8', .5, {
    x: -500,
    delay:0.4,
    ease: Expo.easeOut,
    });
    TweenMax.from('.menup9', .5, {
    x: 500,
    delay:0.45,
    ease: Expo.easeOut,
    });



//   tlmax.from('.menup1', .1, {
//     x: 500,
//     ease: Bounce.easeOut,
// }).from('.menup2', .1, {
//     x: -500,
//     ease: Bounce.easeOut,
// }).from('.menup5', .1, {
//     x: 500,
//     ease: Bounce.easeOut,
// }).from('.menup4', .1, {
//     x: -500,
//     ease: Bounce.easeOut,
// }).from('.menup5', .1, {
//     x: 500,
//     ease: Bounce.easeOut,
// }).from('.menup6', .1, {
//     x: -500,
//     ease: Bounce.easeOut,
// }).from('.menup7', .1, {
//     x: 500,
//     ease: Bounce.easeOut,
// }).from('.menup8', .1, {
//     x: -500,
//     ease: Bounce.easeOut,
// }).from('.menup9', .1, {
//     x: 500,
//     ease: Bounce.easeOut,
// })

  }
    
  setTimeout(function(){
    burclick = true;
        }, 1000);
      }
});
// 漢堡

  });

  
  