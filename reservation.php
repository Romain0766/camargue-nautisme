<?php
    require('header.php');
    ?>
    <main>
        <form action="">
        <h3>S'inscrire comme client </h3>
        <p> Tous les champs sont obligatoires</p>
            <div class="formulaire">
                <input type="radio" name="" id="">
                <label for=""></label>

                <label id="lanom" for="Votre nom">Votre nom</label>
                <input type="text" size="25" name="nom" id="lanom" placeholder="Votre nom ici"   value="">
  
                <label id="laprenom" for="Votre prénom">Votre prénom</label>
                <input type="text" size="25" name="prenom" id="laprenom" placeholder="Votre prénom ici"  value="">
  
                <label id="lamail" for="Votre email">Votre email</label>
                <input type="email" id="lamail" size="30" name="monmail" placeholder="Votre mail ici" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="">
 
                <label id="lanum" for="Votre numéro de téléphone">Votre numéro de téléphone</label>
                <input type="text" size="25" name="telephone" id="lanum" placeholder="Votre numéro de téléphone ici" pattern="[0-9]{10}" value="">
                
                <select name="equipement" id="equipement-select">
                    <option value="--Faire un choix--"></option>
                    <option value="Kayak simple"></option>
                    <option value="Kayak double"></option>
                    <option value="Paddle"></option>



                </select>
            </div>
         

        </form>


    </main>    

    <?php
    require('footer.php');
?>