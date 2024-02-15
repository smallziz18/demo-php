<?php
global $nom;
global $prenom;
global $age;
global $sexe;
global $dtn;
$option = [];
global $classe;
if (isset($_POST['nom'])) {
  echo  "votre nom est : ";
  $nom = $_POST['nom'];
  echo $nom;
}
echo "</br>";
if (isset($_POST['prenom'])) {
  echo  "votre prenom est: ";
  echo $prenom = $_POST['prenom'];
}
echo "</br>";

if (isset($_POST['dateN'])) {

  echo  "votre date de naissance est :";
  echo $dtn = $_POST['dateN'];
}
echo "</br>";
if (isset($_POST['age'])) {
  echo "vous etes agée de :";
  $age = $_POST['age'];
  echo $age . "ans";
}
echo "</br>";
if (isset($_POST['sexe'])) {
  $sexe = $_POST['sexe'];
  echo " vous ete de sexe :";
  echo $sexe;
}
echo "</br>";
if (isset($_POST['classe'])) {
  $classe = $_POST['classe'];
  echo "vous ete en classe de :";
  echo $classe;
}
echo "</br>";
if (isset($_POST['options'])) {
  echo " vos options sont:";
  foreach ($_POST['options'] as $clef) {
    echo $option = $clef . ",";
  }
}

if (isset($_FILES['photo'])) {
  if ($_FILES["photo"]["error"] == 0) {
    echo "Transmissio avec succes</br>";
    echo "Nom du fichier:" . $_FILES["photo"]["name"] . "</br>";
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $_FILES['photo']['name'])) {
      echo "le deplacement est ok !!</br>";
    } else {
      echo "echec";
    }
    $img = $_FILES["photo"]["name"];
    echo "<img src='$img'/>";
  }
  echo "</br>";
  $con = new PDO('mysql:host=localhost;dbname=Etudiant', "smallziz", "93227");
  echo "</br>";
  $req2 = "insert into inscription values('Gueye','Ndeye Sylla', 22,'feminin','licence3','bI','05/02/2001')";
  $req = "insert into inscription values('$nom','$prenom', $age,'$sexe','$classe','$option','$dtn')";
  if ($con) {
    echo ' connexion reussi';
   $res= $con->exec($req);
   if($res)
    echo 'ajout resussit';
    else
    echo 'erreur';
  } else
    echo 'raté';
}
