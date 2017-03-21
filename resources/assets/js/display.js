(function(){
  let display = {
    configCentre: data,
    modulesList: [],
    moduleToDisplay : 3,
    init(){
      this.objectToArray();
      this.slideshow();
    },
    objectToArray(){
      for (var module in this.configCentre) {
        if(this.configCentre[module]){
          this.modulesList.push(module);
        }
      }
    },
    slideshow(){
      let slide = window.setInterval(display.nextSlide, 5000);
    },
    nextSlide(){
      display.nextModule();
      display.hideAllModules();
      display.displaySlide();
    },
    nextModule(){
      if(display.moduleToDisplay < display.modulesList.length - 1){
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
