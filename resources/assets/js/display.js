(function(){
  let display = {
    modulesList: ["meteo", "planning", "blog", "anniversaire"],
    moduleToDisplay : 3,
    init(){
      display.slideshow();
    },
    slideshow(){
      let slide = window.setInterval(display.nextSlide, 1000);
    },
    nextSlide(){
      if(display.moduleToDisplay <= 2){
        display.moduleToDisplay++;
        console.log(display.modulesList[display.moduleToDisplay]);
      } else {
        display.moduleToDisplay = 0;
        console.log(display.modulesList[display.moduleToDisplay]);
      }
    }
  }

  display.init();
})();
