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
    </main>    

    <?php
    require('footer.php');
?>