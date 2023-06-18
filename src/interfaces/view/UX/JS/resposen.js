class Mobile {

    constructor(){
        this.ScreenWidth = window.innerWidth;
        this.ScreenHeight = window.innerHeight;
    }

    optionalRemove() {
        let optional = document.getElementsByClassName("optinal");
        if (optional.length > 0) {
          Array.from(optional).forEach(element => {
            let parent = element.parentNode;
            parent.removeChild(element);
          });
        }
      }
}

let screen = new Mobile();

if (screen.ScreenWidth < 601){
    console.log("screen Version " + screen.ScreenWidth);

    screen.optionalRemove();
}
else{
    console.log("Desktop Version " + screen.ScreenWidth);
}
