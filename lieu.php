<?php
    require('header.php');
    ?>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">
        <div class="overlay-image" style="background-image:url(image/image_slide_1.jpg);">
        </div>
      <div class="container">
        <h1>Location de canoës sur l'hérault, près de Montpellier</h1>
        <p>Retrouvez-nous à Carnon et Palavas-les-flots</p>
        <button class="btn btn-primary">Découvrir</button>
      </div>
    </div>
    <div class="carousel-item ">
        <div class="overlay-image" style="background-image:url(image/image_slide_2.jpg);">
        </div>
      <div class="container">
        <h1>Location de canoës sur l'hérault, près de Montpellier</h1>
        <p>Retrouvez-nous à Carnon et Palavas-les-flots</p>
        <button class="btn btn-primary">Découvrir</button>
      </div>
    </div>
    <div class="carousel-item ">
        <div class="overlay-image" style="background-image:url(image/image_slide_3.jpg);">
        </div>
      <div class="container">
        <h1>Location de canoës sur l'hérault, près de Montpellier</h1>
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
    <main>
<p class="text_haut mx-5 my-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste labore veritatis expedita quis, at minus omnis quae doloribus eum, consequuntur repudiandae eveniet atque? Illum itaque eaque quos assumenda vitae quis!</p>


    <?php

$req='SELECT * From lieu_location WHERE l_id=1';
$lieu_location1= $conn->query($req);

$req2='SELECT * From lieu_location WHERE l_id=2';
$lieu_location2= $conn->query($req2);

foreach($lieu_location1 as $location1){

    ?>
    <div class="center mt-5">
    <div class="card mb-3"style="max-width: 740px;" >
  <div class="row g-0">
    <div class="col-md-4">
      <img src="image/taryn-manning-y3CAU_73jWk-unsplash.jpg" class="img-fluid rounded-start" alt="...">
    </div>

    <div class="col-md-8" >
      <div class="card-body">
        <h3 class="card-title "><i class="fas fa-map-marker-alt localisation"></i> <?php echo $location1['l_nom_agence'];?></h3>
        <p><b>Adresse: </b> <?php  echo $location1['l_adresse'];?></p>
        <p><b>Parking:</b> <?php  echo $location1['l_parking'];?></p>
       
        <!-- nombre d'equipement en direct -->

            <!-- nombre kaykay simple -->
        <?php  

      $req='SELECT (l_nombre_kayak_simple - COUNT(r_id)) as nb_kayak_s_restant FROM reservation 
      INNER JOIN lieu_location ON lieu_location.l_id = reservation.fk_l_id
      WHERE l_id = ? AND fk_e_equipement = 1';
      $sth=$conn->prepare($req);
      $sth->execute([2]);
      $nombre_kayak_simple = $sth->fetchAll();

      foreach($nombre_kayak_simple as $kayak_simple){
         ?>
           <p><b>Nombre de kayak simple: </b><?php echo $kayak_simple['nb_kayak_s_restant'];?></p>
    
    <?php 
      } 
      ?>
         <!-- nombre kaykay double -->
         <?php  

          $req='SELECT (l_nombre_kayak_double - COUNT(r_id)) as nb_kayak_d_restant FROM reservation 
          INNER JOIN lieu_location ON lieu_location.l_id = reservation.fk_l_id
          WHERE l_id = ? AND fk_e_equipement = 1';
          $sth=$conn->prepare($req);
          $sth->execute([2]);
          $nombre_kayak_double = $sth->fetchAll();

            foreach($nombre_kayak_double as $kayak_double){
            ?>
            <p><b>Nombre de kayak simple: </b><?php echo $kayak_double['nb_kayak_d_restant'];?></p>

        <?php 
        } 
        ?>
            <!-- nombre paddle -->
            <?php  

            $req='SELECT (l_nombre_paddle - COUNT(r_id)) as nb_paddle_restant FROM reservation 
            INNER JOIN lieu_location ON lieu_location.l_id = reservation.fk_l_id
            WHERE l_id = ? AND fk_e_equipement = 1';
            $sth=$conn->prepare($req);
            $sth->execute([2]);
            $nombre_paddle = $sth->fetchAll();

            foreach($nombre_paddle as $paddle){
              ?>
          <p><b>Nombre de kayak simple: </b><?php echo $paddle['nb_paddle_restant'];?></p>

        <?php 
      } 
      ?>

        <p class="card-text"><small class="text-muted">Voir la carte</small></p>
      </div>
    </div>
  </div>
</div>
    </div>


    <?php  
        }
        foreach($lieu_location2 as $location2){
    ?>

<div class="center2">
    <div class="card mb-3"style="max-width: 755px;" >
  <div class="row g-0">
    <div class="col-md-4">
      <img src="image/clay-banks-1pZv_U0Lros-unsplash.jpg" class="img-fluid rounded-start" alt="...">
    </div>

    <div class="col-md-8" >
      <div class="card-body">
        <h3 class="card-title "><i class="fas fa-map-marker-alt localisation"></i> <?php echo $location2['l_nom_agence'];?></h3>
        <p><b>Adresse: </b> <?php  echo $location2['l_adresse'];?></p>
        <p><b>Parking:</b> <?php  echo $location2['l_parking'];?></p>
        <p><b>Nombre de kayak simple:</b> <?php  echo $location2['l_nombre_kayak_simple'];?></p>
        <p><b>Nombre de kayak double:</b> <?php  echo $location2['l_nombre_kayak_double'];?></p>
        <p><b> Nombre de Paddle:</b> <?php  echo $location2['l_nombre_paddle'];?></p>
        <p class="card-text"><small class="text-muted">Voir la carte</small></p>
      </div>
    </div>
  </div>
</div>
    </div>

  
 <?php  
        }
    ?>
<script src="include/bootstrap/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/06d8228888.js" crossorigin="anonymous"></script>

</main>    

    <?php
    require('footer.php');
?>