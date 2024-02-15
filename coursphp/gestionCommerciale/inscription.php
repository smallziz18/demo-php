<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="css/auten.css">
</head>
<body>
    <div class="container">
        <h1>Inscription</h1>
        <form action="login_auten.php" method="POST">
            <label for="nom">Nom :</label>
            <input type="text" id="name" name="nom" required>
            <label for="prenom">prenom :</label>
            <input type="text" id="prenom" name="prenom" required>
            <label for="email"> Email :</label>
            <input type="email" name="email" id="email">
            <label for="login"> Login :</label>
            <input type="text" name="login" id="login">
           
            
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="S'inscrire">
        </form>
        <p>Déjà inscrit ? <a href="index.php">Se connecter</a></p>
    </div>
</body>
</html>
