document.addEventListener('scroll', function() {
    var heroContent = document.querySelector('.hero-content');
    var triggerBottom = window.innerHeight * 0.9;
    
    var heroContentTop = heroContent.getBoundingClientRect().top;
    
    if (heroContentTop < triggerBottom) {
      heroContent.classList.add('show-hero');
    } else {
      heroContent.classList.remove('show-hero');
    }
  });
  