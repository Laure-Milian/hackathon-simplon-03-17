(function(){
  let display = {
    init(){
      display.slideshow();
    },
    slideshow(){
      let slide = window.setInterval(display.nextSlide, 1000);
    },
    nextSlide(){
      console.log('test');
    }
  }

  display.init();
})();
