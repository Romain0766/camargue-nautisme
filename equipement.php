<?php
    require('header.php');
    ?>
    <main>
        
    <img class="imgheader" src="./image/imgheader.jpg" alt="">

<div class="menuHeader">
<ul class="menuEquipement">
    <a class="aEquipement" onclick="changerPage('lieu1')" href="#">Lieu 1</a>
    <a class="aEquipement" onclick="changerPage('lieu2')" href="#">Lieu 2</a>
</ul>
</div>

<div class="page" id="equipements1">

    <div class="miniature">
        <h2 class="titreEquipements">Carnon, à côté de la Plagette paillote</h2>
        <img class="imgEquipements"  src="./image/carnon.jpg" alt="">
        <h2 class="titreEquipements">Kayak simple</h2>
        <img class="imgEquipements" alt="Kayak simple" src="./image/simplekayak.png">
        <p>30€</p>
        
    <hr  class="Ligne">
    </div>


    <div class="miniature">
        <h2 class="titreEquipements">Kayak double</h2>
        <img class="imgEquipements" alt="Kayak double" src="./image/kayadouble.png">
        <p>40€</p>
        
    <hr  class="Ligne">
    </div>


    <div class="miniature">
        <h2 class="titreEquipements">Paddle</h2>
        <img class="imgEquipements" alt="Paddle" src="./image/standup-paddle.jpeg">
        <p>25€</p>
    </div>
    <div class="clear"></div>
    
    <div class="ResaButton">
        <button class="ReserverButton" href="reservation.php">Réserver</button>
    </div>
    
</div>

<div class="page" id="equipements2">

    <div class="miniature">
        <h2 class="titreEquipements">Palavas-les-Flots, rive droite, Maison de la Mer</h2>
        <img  class="imgEquipements" src="./image/rivedroite.jpg" alt="">
        <h2 class="titreEquipements">Kayak simple</h2>
        <img class="imgEquipements" alt="Kayak simple" src="./image/simplekayak.png">
        <p>30€</p>
        
    <hr  class="Ligne">
    </div>


    <div class="miniature">
        <h2 class="titreEquipements">Kayak double</h2>
        <img class="imgEquipements" alt="Kayak double" src="./image/kayadouble.png">
        <p>40€</p>
        
    <hr  class="Ligne">
    </div>


    <div class="miniature">
        <h2 class="titreEquipements">Paddle</h2>
        <img class="imgEquipements" alt="Paddle" src="./image/standup-paddle-group.jpeg">
        <p>25€</p>
    </div>
    <div class="clear"></div>

    <div class="ResaButton">
        <button class="ReserverButton" href="reservation.php">Réserver</button>
    </div>

</div>




<script type="text/javascript" src="./assets/JS/app.js"></script>

    </main>    

    <?php
    require('footer.php');
?>

<!-- Vive  JoJo -->