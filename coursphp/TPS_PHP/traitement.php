<?php

// Vérification de la méthode de requête
error_reporting(E_ALL);
// Récupération des données du formulaire
$libelle = sanitizeInput($_POST["libelle"]);
$categorie = sanitizeInput($_POST["categorie"]);
$date_approvisionnement = sanitizeInput($_POST["date_approvisionnement"]);
$prix_unitaire = floatval($_POST["prix_unitaire"]);
$tailles = sanitizeInput($_POST["tailles"]);
$disponibilite = sanitizeInput($_POST["disponibilite"]);
$description = sanitizeInput($_POST["description"]);
$email_commercial = sanitizeInput($_POST["email_commercial"]);
// traitement fichier;
$photo = [];
if (isset($_FILES['photos'])) {

    // Parcourir tous les fichiers téléchargés
    for ($i = 0; $i < count($_FILES['photos']['name']); $i++) {
        $nom = ($_FILES['photos']['name'][$i]);
        if (move_uploaded_file($_FILES['photos']['tmp_name'][$i], $_FILES['photos']['name'][$i]));
        $photo[$i] = $_FILES['photos']['name'][$i];
    }
}







// Fonction pour nettoyer les données d'entrée
function sanitizeInput($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
?>

<head>
    <link rel="stylesheet" href="css/stl.css ?v= php echo time()?">
</head>

<body>
    <h1>Résultat de l'ajout du produit</h1>

    <div class="result-container">
        <p class="label">Libellé :</p>
        <p><?php echo $libelle; ?></p>

        <p class="label">Catégorie :</p>
        <p><?php echo $categorie; ?></p>

        <p class="label">Date d'approvisionnement :</p>
        <p><?php echo $date_approvisionnement; ?></p>

        <p class="label">Prix unitaire :</p>
        <p><?php echo $prix_unitaire; ?></p>

        <p class="label">Tailles disponibles :</p>
        <p><?php echo $tailles; ?></p>

        <p class="label">Disponibilité :</p>
        <p><?php echo $disponibilite; ?></p>

        <p class="label">Description :</p>
        <p><?php echo $description; ?></p>

        <p class="label">Email du commercial responsable :</p>
        <p><?php echo $email_commercial; ?></p>
        <div class="photos-container">
            <?php
            foreach ($photo as $tophe) {
                echo "<p><img src='$tophe' /></p>";
            }

            ?>
        </div>

    </div>
</body>