<?php
include_once 'entete.php';
require_once'../../mes project/myfunction.php';
?>


<?php
function rincer($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
if(isset($_POST['nom']))
  $nom=rincer($_POST['nom']);
if(isset($_POST['categorie']))
  $cat=rincer($_POST['categorie']);
if(isset($_POST['description']))
  $descp=rincer($_POST['description']);
if(isset($_POST['prix']))
{
    $price=rincer($_POST['prix']);
  if ($price <= 0 || $price % 100 != 0) {
    echo"Le prix doit être positif et multiple de 100.";
 
}
}
 
if(isset($_FILES['image']['name']))
  {
    $url=move_all_files_image($_FILES['image']);
    
  }
  $bdd= new PDO('mysql:host=localhost;dbname=commercial', "smallziz", "93227");
  if($bdd)
  {
    $req="insert into Produit (nom,categorie,description,prixU) values(:n,:c,:d,:p)";
    $stmt=$bdd->prepare($req);
    $stmt->bindParam('n',$nom);
    $stmt->bindParam('c',$cat);
    $stmt->bindParam('d',$descp);
    $stmt->bindParam('p',$price);
    $stmt->execute();
    $codeprod=$bdd->lastInsertId();
    $req2="insert into Photo (url,codeprod) values(:u,:c)";
    $stmt=$bdd->prepare($req2);
    $stmt->bindParam('u',$url);
    $stmt->bindParam('c',$codeprod);
    $stmt->execute();
  }

?>





















<!DOCTYPE html>
<html lang="fr">
<div class="menu">
    <?php
    display();
    ?>
</div>

<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
      padding: 20px;
    }
  
    h1 {
      text-align: center;
    }
  
    form {
      max-width: 500px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  
    .form-group {
      margin-bottom: 20px;
    }
  
    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
  
    input[type="text"],
    input[type="file"] {
      width: 100%;
      padding: 10px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }
  
    input[type="submit"] {
      background-color:#ff6f61;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      font-size: 16px;
    }
  </style>

<body>
  <section>
    <h1>Formulaire d'insertion de produit</h1>
    <form method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nom">Nom du produit :</label>
            <input type="text" id="nom" name="nom" required>
          </div>
          <div class= form-group>
          <label for="categorie">Catégorie :</label>
                <select id="categorie" name="categorie">
                    <optgroup label="Telephone">

                        <option value="Samsung">Samsung</option>
                        <option value="Apple">Apple</option>
                        <option value="Oppo">Oppo</option>
                        <option value="Google">Google</option>

                    </optgroup>
                    <optgroup label="ordinateur">
                        <option value="Dell">Dell</option>
                        <option value="Microsoft">Microsoft</option>
                        <option value="HP">HP</option>
                        <option value="Accer">Accer</option>
                        <option value="Lenovo">Lenovo</option>
                    </optgroup>
                    <optgroup label="Console de jeux">
                        <option value="Xbox">Xbox</option>
                        <option value="Nitendo">Nitendo</option>
                        <option value="Sony">Sony</option>
                    </optgroup>
                </select>

          </div>
          <div class="form-group">
            <label for="description">Description :</label>
            <input type="text" id="description" name="description" required>
          </div>
          <div>
            <label for="prix">Prix</label>
            <input type="number" name="prix" id="prix">
          </div>
          <div class="form-group">
            <label for="image">Image du produit :</label>
            <input type="file" id="image" name="image[]" accept="image/*" required multiple>
          </div>
          <input type="submit" value="Ajouter le produit">
    </form>
  </section>
</body>




<div class="bas">
   <?php
     displayb();
   ?>
 </div>