<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Connexion</h1>
        <form action="login.php" method="POST">
            <label for="email">Login :</label>
            <input type="text" id="login" name="login" required  value="<?php if(($_COOKIE['login']) !== null && !empty(($_COOKIE['login']))) echo $_COOKIE['login'] ?>">
            
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Se connecter">
        </form>
        <p>Pas encore inscrit ? <a href="inscription.php">S'inscrire</a></p>
    </div>
</body>
</html>
