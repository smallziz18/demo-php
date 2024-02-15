 <?php
    function menu()
    {
        echo '<html lang="fr">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Mon Site Moderne</title>
      
          <link rel="stylesheet" href="../../TPS_PHP/css/style.css ? <?php echo time(); ?>">

        </head>
        <body>
          <header>
            <div class="entete">
             <nav class="navbar"> 
          <ul>
            <li><a href="/tp2/Accueil.php">Accueil</a></li>
            <li><a href="/tp2/produits.php">Produit</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
             </div>
          </header>';
    }
