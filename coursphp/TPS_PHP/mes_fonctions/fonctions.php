<?php
function tete()
{
  echo '<html lang="fr">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Mon Site Moderne</title>
      <link rel="stylesheet" href="../css/style2.css">
    </head>
    <body>
      <header>
        <nav>
          <ul>
            <li><a href="../tp2/Accueil.php">Accueil</a></li>
            <li><a href="../tp2/produits.php">Produit</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </header>';
}

function bas()
{
  echo ' <footer>
  <p>Tous droits réservés &copy; 2023 Mon Site Moderne</p>
</footer>';
}
