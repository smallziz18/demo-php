<?php
function display()
{
    echo '
 
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Site Web</title>
    <link rel="stylesheet" href="css/style.css">
    </head>

    <header>
        <nav>
            <ul>
                <li><a href="acceuil.php">Accueil</a></li>
                <li><a href="produits.php">Produit</a></li>
                <li><a href="clients.php">Clients</a></li>
                <li><a href="commande.php">Commande</a></li>
            </ul>
        </nav>
    </header>

'
    ;

}
function displayb()
{
    echo '
    <footer>
    <p>&copy; 2023 smallziz. Tous droits réservés.</p>
    </footer>
    ';
}
?>