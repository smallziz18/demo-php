<?php

echo "<div class='carre'>";
function carre($taille)
{
    for ($i = 0; $i < $taille; $i++) {

        for ($j = 0; $j < $taille; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}
function carre_vide($taille)
{
    for ($i = 0; $i < $taille; $i++) {

        for ($j = 0; $j < $taille; $j++) {

            if ($i == 0 || $i == $taille - 1 || $j == 0 || $j == $taille - 1) {
                echo "* ";
            } else {
                echo "&nbsp;&nbsp ";
            }
        }
        echo "&nbsp;&nbsp;";
        echo "<br>";
    }
}

echo "</div>";
function rectangle($hauteur, $largeur)
{
    for ($i = 0; $i < $hauteur; $i++) {
        // Boucle pour dessiner les colonnes de chaque ligne
        for ($j = 0; $j < $largeur; $j++) {
            // Afficher une étoile pour chaque position à l'intérieur du rectangle
            echo "* ";
        }
        // Sauter une ligne à la fin de chaque ligne
        echo "<br>";
    }
    function triangle($hauteur, $ver)
    {
        if ($ver == 0) {
            // Boucle pour dessiner les lignes du triangle
            for ($i = 0; $i < $hauteur; $i++) {
                // Boucle pour dessiner les étoiles de chaque ligne
                for ($j = 0; $j <= $i; $j++) {
                    // Afficher une étoile pour chaque position dans la ligne
                    echo "* ";
                }
                // Sauter une ligne à la fin de chaque ligne
                echo "<br>";
            }
        } elseif ($ver == 1) {
            for ($i = $hauteur; $i >= 1; $i--) {
                // Boucle pour dessiner les étoiles de chaque ligne
                for ($j = 1; $j <= $i; $j++) {
                    // Afficher une étoile pour chaque position dans la ligne
                    echo "* ";
                }
                // Sauter une ligne à la fin de chaque ligne
                echo "<br>";
            }
        } elseif ($ver == 5) {
            for ($i = $hauteur; $i >= 1; $i--) {
                // Boucle pour dessiner les étoiles de chaque ligne
                for ($j = 1; $j < $hauteur; $j++) {
                    // Afficher une étoile pour les bords du triangle
                    if ($j == 1 || $j == $i    || $i == $hauteur) {
                        echo "* ";
                    } else {
                        // Afficher un espace pour les autres positions
                        echo "&nbsp;&nbsp;";
                    }
                }
                // Sauter une ligne à la fin de chaque ligne
                echo "<br>";
            }
        }
    }
    function rectangle_vide($hauteur, $largeur)
    {
        for ($i = 1; $i <= $hauteur; $i++) {
            // Boucle pour dessiner les colonnes de chaque ligne
            for ($j = 1; $j <= $largeur; $j++) {
                // Afficher une étoile pour les bords du rectangle
                if ($i == 1 || $i == $hauteur || $j == 1 || $j == $largeur) {
                    echo "* ";
                } else {
                    // Afficher un espace pour l'intérieur vide du rectangle
                    echo "&nbsp;&nbsp ";
                }
            }
            // Sauter une ligne à la fin de chaque ligne
            echo "<br>";
        }
    }
}
