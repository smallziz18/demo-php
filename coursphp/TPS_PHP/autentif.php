<?php
session_start();
setcookie("login",time()+3600*24*365);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/autentif.css?v=php echo time() ?>">
    <title>Document</title>
</head>

<body>
    <div class="center">
        <h1>Login</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" name="user" required placeholder="<?php echo $_COOKIE['login']?>">
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="mdp" required>
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" value="connexion">

        </form>
    </div>

</body>

</html>
<?php
if (isset($_POST['user']) && ($_POST['mdp'])) {
    $nom = $_POST['user'];
    $motdp = $_POST['mdp'];
    if ($nom == 'Ngagne' && $motdp == 'Demba') {
        header("location: index2.php");
        $_SESSION['nom']=$nom;
        $_COOKIE['login']=$nom;
        $_SESSION['mdp']=$motdp;
        exit;
       
    }
  

    header("location: autentif.php");
    exit;
}
?>