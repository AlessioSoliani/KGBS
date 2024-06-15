 
 
 
 let heroContent = document.querySelector('#hero-content');
function checkHeroContent(){
  var triggerBottom = window.innerHeight *0.9;
  var heroContentTop = heroContent.getBoundingClientRect().top;
  if (heroContentTop < triggerBottom) {
    heroContent.classList.add('show-hero');
  } else {
    heroContent.classList.remove('show-hero');
  }

}
document.addEventListener('scroll', checkHeroContent);
window.addEventListener('load', checkHeroContent);
console.log(heroContent);


document.addEventListener("DOMContentLoaded", function () {
  let video = document.getElementById("video-homepage");

  video.addEventListener("loadeddata", function() {
      video.style.display = "block";
      video.play(); 
      video.playbackRate = 0.8;
      setTimeout(function() {
          document.querySelector(".hero_content h1").classList.add("show");
          document.querySelector(".hero_content button").classList.add("show");
      }, 500); 
  });

  
  video.addEventListener("ended", function() {
      video.play();
  });
})

document.addEventListener('DOMContentLoaded', function() {
  const burgerButton = document.querySelector('.burger-button');
  const burgerLinks = document.querySelector('.burger-links');
  
  burgerButton.addEventListener('click', function() {
    const expanded = burgerButton.getAttribute('aria-expanded') === 'true' || false;
    burgerButton.setAttribute('aria-expanded', !expanded);
    
    if (expanded) {
      burgerLinks.style.display = 'none';
    } else {
      burgerLinks.style.display = 'block';
    }
  });

})





