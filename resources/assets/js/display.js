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
      display.nextModule();
      display.hideAllModules();
      display.displaySlide();
    },
    nextModule(){
      if(display.moduleToDisplay <= 2){
        display.moduleToDisplay++;
      } else {
        display.moduleToDisplay = 0;
      }
    },
    displaySlide(){
      let module = display.modulesList[display.moduleToDisplay];
      $("*[data-module='" + module + "']").css("display", "block");
    },
    hideAllModules(){
      $(".module").css("display", "none");
    }
  }

  display.init();
})();
