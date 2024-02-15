<?php
include_once 'entete.php';
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<div class="menu">
    <?php
    display();
    ?>
</div>

<body>
    

    <div class="contenue">
        <section class="hero">
            <h1>Bienvenue sur notre site web  : <?php if(!empty($_SESSION["prenom"] ) &&!empty($_SESSION["nom"] ))
            {echo $_SESSION["prenom"] ; echo" " ; echo $_SESSION["nom"];}
            ?></h1>
            <p>Expérience utilisateur exceptionnelle et produits de haute qualité.</p>
        </section>


 </div>
 <div class="bas">
   <?php
     displayb();
   ?>
 </div>
</body>
</html>
