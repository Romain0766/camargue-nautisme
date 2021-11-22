<?php
    require('header.php');
    ?>
    <main>
    <?php

$req='SELECT * From lieu_location';
$lieu_location= $conn->query($req);

foreach($lieu_location as $location){

    echo $location['l_nom_agence'];
    ?>
    <br>
    <?php
    echo $location['l_lieu'];
    ?>
     <br>
    <?php
    echo $location['l_telephone'];
    ?>
     <br>
    <?php
    echo $location['l_adresse'];
    ?>
     <br>
    <?php
    echo $location['l_parking'];
    ?>
     <br>
    <?php
    echo $location['l_nombre_kayak_simple'];
    ?>
     <br>
    <?php
    echo $location['l_nombre_kayak_double'];
    ?>
     <br>
    <?php
    echo $location['l_nombre_paddle'];
   
}

?>

    
    </main>    

    <?php
    require('footer.php');
?>