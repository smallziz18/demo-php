<?php
// Connexion à la base de données
$conn = mysqli_connect('localhost', 'nom_utilisateur', 'mot_de_passe', 'nom_de_la_base_de_données');

// Vérification de la connexion
if (!$conn) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$ville = $_POST['ville'];
$pays = $_POST['pays'];
$genre = $_POST['genre'];
$age = $_POST['age'];
$langues = $_POST['langues'];
$niveau_experience = $_POST['niveau_experience'];
$animes_preferes = $_POST['animes_preferes'];
$mangas_preferes = $_POST['mangas_preferes'];
$liste_de_visionnage = $_POST['liste_de_visionnage'];
$liste_de_lecture = $_POST['liste_de_lecture'];
$evaluation_animes = $_POST['evaluation_animes'];
$evaluation_mangas = $_POST['evaluation_mangas'];

// Insertion des données dans la base de données
$sql = "INSERT INTO utilisateurs (nom, prenom, email, ville, pays, genre, age, langues, niveau_experience, animes_preferes, mangas_preferes, liste_de_visionnage, liste_de_lecture, evaluation_animes, evaluation_mangas)
VALUES ('$nom', '$prenom', '$email', '$ville', '$pays', '$genre', '$age', '$langues', '$niveau_experience', '$animes_preferes', '$mangas_preferes', '$liste_de_visionnage', '$liste_de_lecture', '$evaluation_animes', '$evaluation_mangas')";

if (mysqli_query($conn, $sql)) {
    echo "Le profil a été créé avec succès.";
} else {
    echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
