<?php

function sanitizeInput($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
$md = (sanitizeInput($_POST["password"]));
 $mdp=sha1($md);
$login= sanitizeInput($_POST["login"]);

$con = new PDO('mysql:host=localhost;dbname=commercial', "smallziz", "93227");

if ($con)
{
    $req="select * from user where mdp=? and login=?";
    $rqstmt=$con->prepare($req);
    
    $rqstmt->execute(array($mdp,$login));
    

}
else
echo'erreur';

if($rqstmt->rowCount()>0)
   {
  
    session_start();
    
    $row=$rqstmt->fetch();
    $_SESSION['nom']= $nom=$row['non'];
    $_SESSION['prenom']=$prenom=$row['prenom'];
    $log=$row['login'];
    setcookie('login',$log,time()+365*24*3600);


    
    header("location: acceuil.php");
   }
else
    echo "erreur sur vos informations"


?>