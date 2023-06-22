<?php
function eq2ndegr($a, $b, $c)
{
    // Calcul du discriminant
    $delta = $b * $b - 4 * $a * $c;

    // Vérification des solutions en fonction du discriminant
    if ($delta > 0) {
        // Deux solutions réelles distinctes
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "Les solutions de l'équation sont : x1 = $x1 et x2 = $x2";
    } elseif ($delta == 0) {
        // Une seule solution réelle (racine double)
        $x = -$b / (2 * $a);
        echo "L'équation admet une seule solution : x = $x";
    } else {
        // Pas de solution réelle
        echo "L'équation n'a pas de solution réelle.";
    }
}
