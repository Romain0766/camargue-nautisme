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
   

    if (page == 'lieu1'){
      console.log(page);

        let accueil = document.getElementById('equipements1');
        accueil.style.display = 'block'
        let photos = document.getElementById('equipements2');
        photos.style.display = 'none';
    } 

    if (page == 'lieu2'){
      console.log(page);
      
        let accueil = document.getElementById('equipements1');
        accueil.style.display = 'none'
        let photos = document.getElementById('equipements2');
        photos.style.display = 'block';
    }

}

function zoom(miniature){
        console.log(miniature);
        when 
}

function zoom(miniature){
        console.log(miniature);
        when 
}