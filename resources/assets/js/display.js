(function(){
  let display = {
    modulesList: ["meteo", "planning", "blog", "anniversaire"],
    moduleToDisplay : 3,
    init(){
      // display.slideshow();
      display.displaySlide();
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
    },
    displaySlide(){
      let module = display.modulesList[display.moduleToDisplay];
      $("*[data-module='" + module + "']").css("display", "block");
    }
  }

  display.init();
})();
