<?php

function sanitizeInput($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}


$nom = sanitizeInput($_POST["nom"]);
$prenom = sanitizeInput($_POST["prenom"]);
$mdp = (sanitizeInput($_POST["password"]));
$email= sanitizeInput($_POST["email"]);

$con = new PDO('mysql:host=localhost;dbname=commercial', "smallziz", "93227");
if ($con)
{
    $req="insert into user values(:n,:p,:em,:mdp)";
    $rqstmt=$con->prepare($req);
    $rqstmt->bindParam('n',$nom);
    $rqstmt->bindParam('p',$prenom);
    $rqstmt->bindParam('em',$email);
    $rqstmt->bindParam('mdp',$mdp);
   $a= $rqstmt->execute();
   if($a)
   {
    header("location: index.php");
   }
   else
   header("location: inscription.php");
}
else
echo'connexion impossible';


?>