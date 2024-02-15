<!DOCTYPE html>
<html>
<head>
    <title>Résultats de Recherche</title>
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/prd.css">
</head>
<body>
    <?php
    $bdd = new PDO('mysql:host=localhost;dbname=commercial', "smallziz", "93227", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));

    function rincer($input)
    {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    if (isset($_POST['search'])) {
        $searchTerm = rincer($_POST['search']);
        $req = 'SELECT * FROM produit WHERE categorie  LIKE "%' . $searchTerm . '%" OR nom LIKE "%' . $searchTerm . '%" ORDER BY code desc';
        $result = $bdd->query($req);

        if ($result->rowCount() > 0) {
            echo '<ul id="search-results">';

            while ($row = $result->fetch()) {
                $prix = $row["prixU"];
                $desc = $row["description"];
                $cat = $row["categorie"];
                $code = $row['code'];

                $result2 = $bdd->query("SELECT url FROM photo WHERE codeprod = $code");
                $nom = $row['nom'];

                // Créer un tableau pour stocker les URL des images
                $url = array();

                while ($row = $result2->fetch()) {
                    // Ajouter chaque URL à l'array $url
                    $url[] = $row['url'];
                }

                echo '<li>';
                echo '<h2>' . $nom . '</h2>';
                echo '<span class="category">Catégorie : ' . $cat . '</span><br>';
                echo '<span class="price">Prix : ' . $prix . '</span><br>';
                echo '<p class="description">Description : ' . $desc . '</p>';

                // Afficher les images correspondant au produit
                if (count($url) > 0) {
                    echo '<p>Images :</p>';
                    foreach ($url as $imageURL) {
                        echo '<img src="' . $imageURL . '" alt="Image du produit">';
                    }
                } else {
                    echo '<p class="no-image">Aucune image disponible pour ce produit.</p>';
                }

                echo '</li>';
            }

            echo '</ul>';
        } else {
            echo "<p>Aucun élément trouvé.</p>";
        }
    }
    ?>

</body>
</html>
