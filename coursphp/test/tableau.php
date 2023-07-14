<?php
// Création du tableau de prix d'ordinateurs
$prix = [100000, 150000, 200000, 180000, 220000];

// Affichage de tous les éléments du tableau
echo "Liste des prix d'ordinateurs : ";
foreach ($prix as $p) {
    echo $p . " ";
}
echo "<br>";

// Calcul et affichage du prix moyen
$nombreElements = count($prix);
$sum = array_sum($prix);
$prixMoyen = $sum / $nombreElements;
echo "Prix moyen : " . $prixMoyen . "<br>";

// Recherche du prix le plus bas et du prix le plus élevé
$minimum = $prix[0];
$maximum = $prix[0];
foreach ($prix as $p) {
    if ($p < $minimum) {
        $minimum = $p;
    }
    if ($p > $maximum) {
        $maximum = $p;
    }
}
echo "Prix le plus bas : " . $minimum . "<br>";
echo "Prix le plus élevé : " . $maximum . "<br>";

// Comptage des éléments inférieurs ou égaux à 150000
$nbElementsInf150000 = 0;
foreach ($prix as $p) {
    if ($p <= 150000) {
        $nbElementsInf150000++;
    }
}
echo "Nombre d'éléments inférieurs ou égaux à 150000 : " . $nbElementsInf150000 . "<br>";

// Test de la présence du prix 750000
if (in_array(750000, $prix)) {
    echo "Le prix 750000 est présent dans le tableau.<br>";
} else {
    echo "Le prix 750000 n'est pas présent dans le tableau.<br>";
}

// Création du tableau associatif "Produit"
$produit = [
    "nom" => "Ordinateur portable",
    "prix" => 100000,
    "catégorie" => "Informatique",
    "marque" => "HP",
    "pays_provenance" => "États-Unis"
];
echo "</br>";
echo "</br>";
// Affichage de toutes les informations du produit
echo "Informations sur le produit : <br>";
foreach ($produit as $key => $value) {
    echo $key . ": " . $value . "<br>";
}

// Affichage du nom et du prix du produit
echo "Nom du produit : " . $produit["nom"] . "<br>";
echo "Prix du produit : " . $produit["prix"] . "<br>";

// Modification du prix en l'augmentant de 30%
$produit["prix"] = $produit["prix"] * 1.3;

// Affichage des informations du produit après modification
echo "Informations sur le produit après modification : <br>";
foreach ($produit as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
