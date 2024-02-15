<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<?php
require_once 'mes_fonctions/fonctions.php';
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
                    <video src="image/video.mp4" autoplay controls loop></video>
                    <h3>Service 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="service">
                    <img src="image/im2.jpg" alt="Service 2">
                    <h3>Service 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="service">
                    <img src="image/im1.jpg" alt="Service 3">
                    <h3>Service 3</h3>
                    <img src="image/im3.jpg" alt="Service 1">
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