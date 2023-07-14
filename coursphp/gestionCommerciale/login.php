<?php
function sanitizeInput($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
$mdp = (sanitizeInput($_POST["password"]));
$email= sanitizeInput($_POST["email"]);

$con = new PDO('mysql:host=localhost;dbname=commercial', "smallziz", "93227");
$p=0;$t=0;$e=0;
if ($con)
{
    $req="select * from user where mdp=$mdp";
    $rqstmt=$con->prepare($req);
    $rqstmt->bindColumn(1,$mp);
    $rqstmt->bindColumn(2,$em);
    $rqstmt->execute();
    while($row=$rqstmt->fetch(PDO::FETCH_BOUND))
    {
        $p=$mdp;$e=$email;
    }

}
else
echo'erreur';
if($p=$mdp && $e=$email)
    header("location: acceuil.php");
else
    header("location: index.php");


?>