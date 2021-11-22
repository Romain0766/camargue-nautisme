<?php
    require('header.php');
    ?>
    
    <main>
        <?php
    if(isset($_POST['bouton_envoi_formulaire'])) {
    if(empty($_POST['date']) AND empty($_POST['nom']) AND empty($_POST['telephone'])AND empty($_POST['heure']) ){
        echo 'Vous navez pas rempli tout le formulaire';
    }

    else {
        echo "Bravo vous avez rempli tout les champs";
        // print_r($_POST);

        $req_inst="INSERT iNTO reservation VALUES(NULL,?,?,?,?,?,?,?,?,?)";
        require('include/connexion.php');
        $sth= $conn ->prepare($req_inst);
        $sth -> execute([$_POST['date'],$_POST['nom'],$_POST['monmail'],$_POST['telephone'],
        $_POST['lieu'],$_POST['heure'],$_POST['equipement']]);
        $conn = NULL;
    }
}

if (isset($_POST ['monmail']) AND filter_var($_POST ['monmail'], FILTER_VALIDATE_EMAIL)){
    echo "Le mail n'est pas bon";
} 



?>
        <form method="post" action="">
        <h3>S'inscrire comme client </h3>
        <p> Tous les champs sont obligatoires</p>
            <div class="formulaire">
                 <?php
                        $req='SELECT l_id, l_nom_agence From lieu_location';
                        $lieu_location= $conn->query($req);
                        
                        foreach($lieu_location as $location){
                        ?>

               <div class="row">
                    <label for="<?=$location['l_id']?>"><?=$location['l_nom_agence']?></label>
                    <input type="radio" name="lieu" id="<?=$location['l_id']?>" value="<?=$location['l_id']?>">
               </div>
               <?php
                    } 
                    ?>

               <div class="row">
                    <label for="date">Date</label>
                    <input type="date" size="25" name="date" id="date" placeholder="date de réservation" value="">
               </div>

               <div class="row">
                    <label for="">Votre nom</label>
                    <input type="text" size="25" name="nom" id="lanom" placeholder="Votre nom ici"   value="romain">
               </div>
        
            <div class="row">
                <label for="Votre email">Votre email</label>
                <input type="email" id="lamail" size="30" name="monmail" placeholder="Votre mail ici" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="de@dez.fr">
                   
            </div>

               <div class="row">
                    <label for="telephone">Votre numéro de téléphone</label>
                    <input type="text" size="25" name="telephone" id="lanum" placeholder="Votre numéro de téléphone ici" pattern="[0-9]{10}" value="0000000000">
               </div>
               <div class="row">
                    <label for="heure_arr">Heure d'arrivée</label>
                    <input type="time" size="25" name="heure" id="lanum" placeholder="heure" pattern="[0-9]{10}" value="">
               </div>
                

                <select name="equipement" id="equipement-select">
                <option value="-1">--Faire un choix--</option>
                    <?php
                        $req='SELECT e_id, e_type From equipement';
                        $type_equipement= $conn->query($req);
                        
                        foreach($type_equipement as $equipement){
                        ?>

                   
                    <option value=" <?=$equipement['e_id']?>"><?=$equipement['e_type']?></option>
           
                    <?php
                    } 
                    ?>
                </select>
            </div>
         
            <input method="post" type="submit" name="bouton_envoi_formulaire" value="Envoyer les informations" class="btn">

        </form>


    </main>    

    <?php
    require('footer.php');
?>