<?php

function sanitizeInput($input)
{
    if(isset($input)and !empty($input))
    {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }
    else
    return null;
  
}


$nom = sanitizeInput($_POST["nom"]);
$prenom = sanitizeInput($_POST["prenom"]);
$md = (sanitizeInput($_POST["password"]));
$mdp=sha1($md);
echo $email= sanitizeInput($_POST['email']);
echo $login= sanitizeInput($_POST['login']);

$con = new PDO('mysql:host=localhost;dbname=commercial', "smallziz", "93227");
if ($con)
{
    $req="insert into user values(:n,:p,:em,:mdp,:l)";
    $rqstmt=$con->prepare($req);
    $rqstmt->bindParam('n',$nom);
    $rqstmt->bindParam('p',$prenom);
    $rqstmt->bindParam('em',$email);
    $rqstmt->bindParam('mdp',$mdp);
    $rqstmt->bindParam('l',$login);
   $a= $rqstmt->execute();
   if($a)
   {
    header("location: Accueil.php");
   }
   else
   header("location: inscription.php");
}
else
echo'connexion impossible';


?>