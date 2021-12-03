<?php
    require('header.php');
    ?>
     <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

  <div class="carousel-item active ">
        <div class="overlay-image" style="background-image:url(image/image_slide_2.jpg);">
        </div>
      <div class="container">
        <h1>Les meilleurs équipement au meilleur prix</h1>
        <p>Retrouvez-nous à Carnon et Palavas-les-flots</p>
        <button class="btn btn-primary">Découvrir</button>
      </div>
    </div>
    <div class="carousel-item">
        <div class="overlay-image" style="background-image:url(image/image_slide_1.jpg);">
        </div>
      <div class="container">
      <h1>Les meilleurs équipement au meilleur prix</h1>
        <p>Retrouvez-nous à Carnon et Palavas-les-flots</p>
        <button class="btn btn-primary">Découvrir</button>
      </div>
    </div>
 
    <div class="carousel-item ">
        <div class="overlay-image" style="background-image:url(image/image_slide_3.jpg);">
        </div>
      <div class="container">
      <h1>Les meilleurs équipement au meilleur prix</h1>
        <p>Retrouvez-nous à Carnon et Palavas-les-flots</p>
        <button class="btn btn-primary">Découvrir</button>
      </div>
    </div>
   
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

</div>
    <main class="tel">
     
      
    <?php

    $req='SELECT * From equipement WHERE e_id=1' ;
    $liste_equipement= $conn->query($req);

    $req1='SELECT * From equipement WHERE e_id=2';
    $liste_equipement1= $conn->query($req1);

    $req2='SELECT * From equipement WHERE e_id=3';
    $liste_equipement2= $conn->query($req2);

    foreach($liste_equipement as $equipement){
        ?>
        <div class="tarif mt-5">

      
            <div class="tarif_1">
                <h3><?php echo $equipement['e_type'];?></h3>
                <span><p><?php echo $equipement['e_prix'] ;?>€</p></span>
                <p><?php echo $equipement['e_info']?></p>
                <button class="btn btn-primary">Réserver</button>


            </div>

            <?php
            foreach($liste_equipement1 as $equipement1){
                ?>

           
             <div class="tarif_2">
                <h3><?php echo $equipement1['e_type'];?></h3>
                <span><?php echo $equipement1['e_prix'] ;?>€</p></span>
                <p><?php echo $equipement1['e_info']?></p>
                <button class="btn btn-primary">Réserver</button>

         </div>
        <?php
            }
            ?>
            <?php
            foreach($liste_equipement2 as $equipement2){
            ?>

            <div class="tarif_3">
                <h3><?php echo $equipement2['e_type'];?></h3>
                <span><p><?php echo $equipement2['e_prix'] ;?>€</p> </span> 
                <p><?php echo $equipement2['e_info']?></p>
                <button class="btn btn-primary">Réserver</button>

            </div>

        <?php
            }
            ?>  

    </div>
        <?php  
    }
    ?>


<div class="menuHeader">
<ul class="menu">
    <li onclick="changerPage('lieu1')" ><a href="#">Lieu 1</a></li>
    <li onclick="changerPage('lieu2')" ><a href="#">Lieu 2</a></li>
</ul>
</div>

<div class="page" id="equipements1">



    <div class="miniature">
        <img src="image/equipement/equipement1.png" alt="">
        <div class="minia_content">
            <h2 class="titreEquipements">Kayak simple</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla aut nemo culpa dolorum quos voluptatibus impedit sapiente molestias perferendis, dolores corrupti quae consectetur mollitia officia, sed, ipsam eligendi tenetur voluptatem.</p>
            <button class="btn btn-primary">Réserver</button>
        </div>
        
  

    </div>
    <div class="miniature  row-reverse">
        <img src="image/equipement/equipement2.png" alt="">
        <div class="minia_content reverse">
            <h2 class="titreEquipements">Kayak double</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, adipisci. Error maxime sed deleniti magni pariatur ex illum. Placeat incidunt atque natus fugiat laudantium sequi temporibus iure doloremque porro quam?</p>
            <button class="btn btn-primary">Réserver</button>
        </div>
   </div>

    <div class="miniature">
        <img src="image/equipement/equipement3.png" alt="">
        <div class="minia_content">
            <h2 class="titreEquipements">Paddle</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, adipisci. Error maxime sed deleniti magni pariatur ex illum. Placeat incidunt atque natus fugiat laudantium sequi temporibus iure doloremque porro quam?</p>
            <button class="btn btn-primary">Réserver</button>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div class="page" id="equipements2">

    <div class="miniature  row-reverse">
        <img src="image/equipement/equipement4.png" alt="">
        <div class="minia_content reverse">
            <h2 class="titreEquipements">Kayak simple</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla aut nemo culpa dolorum quos voluptatibus impedit sapiente molestias perferendis, dolores corrupti quae consectetur mollitia officia, sed, ipsam eligendi tenetur voluptatem.</p>
            <button class="btn btn-primary">Réserver</button>
        </div>
    </div>
    <div class="miniature">
        <img src="image/equipement/equipement5.png" alt="">
        <div class="minia_content">
             <h2 class="titreEquipements">Kayak double</h2>
             <hr>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, adipisci. Error maxime sed deleniti magni pariatur ex illum. Placeat incidunt atque natus fugiat laudantium sequi temporibus iure doloremque porro quam?</p>
             <button class="btn btn-primary">Réserver</button>
            </div>
     </div>
    <div class="miniature row-reverse">
        <img src="image/equipement/equipement6.png" alt="">
        <div class="minia_content reverse">
            <h2 class="titreEquipements">Paddle</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, adipisci. Error maxime sed deleniti magni pariatur ex illum. Placeat incidunt atque natus fugiat laudantium sequi temporibus iure doloremque porro quam?</p>
            <button class="btn btn-primary">Réserver</button>
        </div>
    </div>
    <div class="clear"></div>
</div>


<script type="text/javascript" src="./assets/JS/app.js"></script>
<script src="include/bootstrap/js/bootstrap.min.js"></script>

    </main>    

    <?php
    require('footer.php');
?>