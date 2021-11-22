<?php
    require('header.php');
    ?>
    <main>
    <?php

    $req='SELECT * From equipement';
    $liste_equipement= $conn->query($req);

    foreach($liste_equipement as $equipement){

        echo $equipement['e_type'];
        ?>
        <br>
        <?php
        echo $equipement['e_prix'];
        ?>
         <br>
        <?php
        echo $equipement['e_description'];
        ?>
         <br>
        <?php
        echo $equipement['e_info'];
        ?>
         <br>
        <?php
        echo $equipement['e_photo'];
    }

    ?>
    <img class="imgheader" src="https://img.hardloop.com/image/upload/v1622797996/articles/id-572-comment-bien-choisir-son-kayak/comment-bien-choisir-son-kayak_yhyy04.jpg" alt="">

<div class="menuHeader">
<ul class="menu">
    <li onclick="changerPage('lieu1')" ><a href="#">Lieu 1</a></li>
    <li onclick="changerPage('lieu2')" ><a href="#">Lieu 2</a></li>
</ul>
</div>

<div class="page" id="equipements1">

    <div class="miniature">
        <h2 class="titreEquipements">Kayak simple</h2>
        <img class="imgEquipements" alt="Kayak simple" src="https://images.unsplash.com/photo-1504217051514-96afa06398be?crop=entropy&fit=crop&h=400&w=600">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla aut nemo culpa dolorum quos voluptatibus impedit sapiente molestias perferendis, dolores corrupti quae consectetur mollitia officia, sed, ipsam eligendi tenetur voluptatem.</p>
    </div>
    <div class="miniature">
        <h2 class="titreEquipements">Kayak double</h2>
        <img class="imgEquipements" alt="Kayak double" src="https://www.lapechetechnique.fr/wp-content/uploads/2019/05/materiel-peche-kayak-banniere.jpg">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, adipisci. Error maxime sed deleniti magni pariatur ex illum. Placeat incidunt atque natus fugiat laudantium sequi temporibus iure doloremque porro quam?</p>
    </div>
    <div class="miniature">
        <h2 class="titreEquipements">Paddle</h2>
        <img class="imgEquipements" alt="Paddle" src="https://images.unsplash.com/photo-1506260408121-e353d10b87c7?crop=entropy&fit=crop&h=400&w=600">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, adipisci. Error maxime sed deleniti magni pariatur ex illum. Placeat incidunt atque natus fugiat laudantium sequi temporibus iure doloremque porro quam?</p>
    </div>
    <div class="clear"></div>
</div>

<div class="page" id="equipements2">

    <div class="miniature">
        <h2 class="titreEquipements">Kayak simple</h2>
        <img class="imgEquipements" alt="Kayak simple" src="https://www.activ-annecy.fr/wp-content/uploads/2020/05/location-canoe-annecy-1000x1000.jpg">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla aut nemo culpa dolorum quos voluptatibus impedit sapiente molestias perferendis, dolores corrupti quae consectetur mollitia officia, sed, ipsam eligendi tenetur voluptatem.</p>
    </div>
    <div class="miniature">
        <h2 class="titreEquipements">Kayak double</h2>
        <img class="imgEquipements" alt="Kayak double" src="https://linknsport.com/img/cms/7_Juillet%202019/photo-1499915174960-6f5340157928.jpeg">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, adipisci. Error maxime sed deleniti magni pariatur ex illum. Placeat incidunt atque natus fugiat laudantium sequi temporibus iure doloremque porro quam?</p>
    </div>
    <div class="miniature">
        <h2 class="titreEquipements">Paddle</h2>
        <img class="imgEquipements" alt="Paddle" src="https://static.fnac-static.com/multimedia/Images/FD/Comete/70353/CCP_IMG_ORIGINAL/867905.jpg">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, adipisci. Error maxime sed deleniti magni pariatur ex illum. Placeat incidunt atque natus fugiat laudantium sequi temporibus iure doloremque porro quam?</p>
    </div>
    <div class="clear"></div>
</div>


<script type="text/javascript" src="./assets/JS/app.js"></script>
    
    </main>    

    <?php
    require('footer.php');
?>