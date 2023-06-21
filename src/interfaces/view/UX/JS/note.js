class Notepad {

    constructor() {

        this.body = document.querySelector('body');
        
    }

    headerCreate() {
        let header = document.createElement("header");
        header.className = "header";
        this.body.appendChild(header);

        let title = document.createElement("div");
        let p = document.createElement("p");
        p.innerText = "Write your note";

        title.appendChild(p);

        header.appendChild(title);
    }

    fromNote() {
        let form = document.createElement("form");
        
        form.method = "POST";

        let section = document.createElement("section");
        section.className = "NoteWriter";
        
        let textArea = document.createElement("textarea");
        textArea.className = "NotePad";
        textArea.name = "note";
        
        form.appendChild(textArea);
        
        section.appendChild(form);
        
        this.body.appendChild(section);
        
        let submit = document.createElement("button");
        submit.type = "submit";
        submit.className = "send";
        submit.innerText = "Submit";
        
        form.appendChild(submit);
    }


    // footerCreate(){
    //     let footer = document.createElement("footer");

    //     let menu = document.createElement("button");

    //     let link = document.createElement("a");

    //     link.href = "http://localhost/cleanArchitectureCrud/src/interfaces/view/UI/noteList.php"

    //     menu.className = "menuBar";

    //     menu.innerHTML = "Note";

    //     footer.appendChild(menu);

    //     this.body.appendChild(footer);

    // }

    CreateMenu(){
        let menu = document.createElement("article");
        
        let button = document.createElement("button");

        button.className ="MenuButton";

        button.innerHTML = "List";

        menu.appendChild(button);

        let footer = document.createElement("footer");

        button.onclick = () =>{
            window.location.href = "notes.php";
        }

        footer.appendChild(menu);

        this.body.appendChild(footer);

        
    }

    createPage(){
        this.headerCreate();
        this.fromNote();
        //this.footerCreate();
        this.CreateMenu();
    }

}

let pagNote = new Notepad();
pagNote.createPage();
