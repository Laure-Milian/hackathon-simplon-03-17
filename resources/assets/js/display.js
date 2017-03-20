(function(){
  let display = {
    modulesList: [meteo, planning, blog, anniversaire],
    init(){
      display.slideshow();
    },
    slideshow(){
      let slide = window.setInterval(display.nextSlide, 1000);
    },
    nextSlide(){
    }
  }

  display.init();
})();
