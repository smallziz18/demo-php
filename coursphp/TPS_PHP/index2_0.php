<!DOCTYPE html>
<html lang="fr">
<?php
require_once 'fonctionM.php';
?>


<body>

    <?php
    tete();
    ?>
    <div class="contenu">
        <section id="hero">
            <div class="hero-content">
                <h1>Bienvenue chere client</h1>
                <p>Découvrez notre gamme de produits et services de qualité.</p>
                <a href="#" class="btn">En savoir plus</a>
            </div>
        </section>

        <section id="about">
            <div class="container">
                <h2>À propos de nous</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem harum at ratione corporis, eum eos commodi eveniet excepturi dolore dolorem atque, vitae nulla assumenda magni, tenetur rerum alias aliquam quisquam!</p>
                <p>Phasellus quis vestibulum est, et volutpat lorem. Aliquam ut eleifend lectus. Duis sit amet malesuada metus.</p>
            </div>
        </section>

        <section id="services">
            <div class="container">
                <h2>Nos Services</h2>
                <div class="service">
                    <video src="image/hp-4181-envy-loop-v08-hq_1.mp4" autoplay controls loop></video>
                    <h3>Produit 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="service">
                    <img src="image/TABS8_SmallTile__Desk.jpeg" alt="Service 2">
                    <h3>produit 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="service">
                    <img src="image/2x1_NSwitch_TloZTearsOfTheKingdom_HomepageTeaser_OutNow_FR_image1600w (1).jpg" alt="Service 3">
                    <h3>Produit 3</h3>
                    <img src="image/SmallTileUltra_Desk-1.jpeg" alt="Service 1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="container">
                <h2>Contactez-nous</h2>
                <form>
                    <input type="text" placeholder="Nom complet">
                    <input type="email" placeholder="Adresse e-mail">
                    <textarea placeholder="Votre message"></textarea>
                    <button type="submit">Envoyer</button>
                </form>
            </div>
        </section>
    </div>
    <?php bas(); ?>
</body>

</html>