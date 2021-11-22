function showResponsiveMenu() {
    var menu = document.getElementById("topnav_responsive_menu");
    var icon = document.getElementById("topnav_hamburger_icon");
    var root = document.getElementById("root");
    if (menu.className === "") {
      menu.className = "open";
      icon.className = "open";
      root.style.overflowY = "hidden";
    } else {
      menu.className = "";                    
      icon.className = "";
      root.style.overflowY = "";
    }
  }
  console.log("hello world!")
  

  function changerPage(page){
    console.log(page);

    if (page == 'accueil'){
        let accueil = document.getElementById('accueil');
        accueil.style.display = 'block'
        let photos = document.getElementById('photos');
        photos.style.display = 'none';
        let contact = document.getElementById('contact');
        contact.style.display = 'none';
    } 

    if (page == 'photos'){
        let accueil = document.getElementById('accueil');
        accueil.style.display = 'none'
        let photos = document.getElementById('photos');
        photos.style.display = 'block';
        let contact = document.getElementById('contact');
        contact.style.display = 'none';
    }

    if (page == 'contact'){
        let accueil = document.getElementById('accueil');
        accueil.style.display = 'none'
        let photos = document.getElementById('photos');
        photos.style.display = 'none';
        let contact = document.getElementById('contact');
        contact.style.display = 'block';
    }
}

function zoom(miniature){
        console.log(miniature);
        when 
}