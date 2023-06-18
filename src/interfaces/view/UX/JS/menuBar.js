class MenuBar {
    constructor() {
      this.menuOptions = document.getElementById("trigger");
      this.menuStatus = false;
    }

    openMenu() {
      if (!this.menuStatus) {
        this.createCircleOptions();
        menu.menuStatus = true;
      }
    }

    closeMenu() {
      if (this.menuStatus) {
        this.deleteRoleteOption();
        menu.menuStatus = false;
      }
      
    }

    createCircleOptions() {
        let options = ["Register", "Logout", "notepad"];
        let rolete = document.createElement("div");
        rolete.classList.add("rolete");
        
        options.forEach(option => {
          let div = document.createElement("div");
          div.className = option;
            
          let a = document.createElement("a");
          a.href = "UI/" + option + ".php";

          let img = document.createElement("img");
          img.src = "UX/img/" + option + ".svg";
        
          a.appendChild(img);
          div.appendChild(a);
          rolete.appendChild(div);
        });
        
        document.querySelector(".inner").appendChild(rolete);
    }
      
      deleteRoleteOption() {
        let roleteElements = document.getElementsByClassName("rolete");
        
        if (roleteElements.length > 0) {
          let rolete = roleteElements[0];
          
          let parent = rolete.parentNode;
          parent.removeChild(rolete);
        }
      }

}
  
    
let menu = new MenuBar();

function trigger() {
    
if (menu.menuStatus == false) {
    menu.openMenu();
}else{
    menu.closeMenu();
}
}