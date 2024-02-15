<?php
include_once 'entete.php';
error_reporting(0);
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
if (isset($_FILES['images']) && is_array($_FILES['images']['name'])) 

{
  $dossier = "images/"; // Dossier où les images seront stockées

  // Parcourir chaque fichier téléchargé
  for ($i = 0; $i < count($_FILES['images']['name']); $i++) 
  {
      $fileName = uniqid().date("d.m.Y_H.i.s", time()).$_FILES['images']['name'][$i];
     $fileTmpName = $_FILES['images']['tmp_name'][$i];
       // Déplacer le fichier téléchargé vers le répertoire de destination avec son nom d'origine
          $fileDestination = $dossier . $fileName;
          if( move_uploaded_file($fileTmpName, $fileDestination));
          $url[] = $fileDestination;
      
      
 }
}



 
  $bdd= new PDO('mysql:host=localhost;dbname=commercial', "smallziz", "93227", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
  if($bdd)
  {
    $req="insert into Produit (nom,categorie,description,prixU) values(:n,:c,:d,:p)";
  
    $stmt=$bdd->prepare($req);
    $stmt->bindParam('n',$nom);
    $stmt->bindParam('c',$cat);
    $stmt->bindParam('d',$descp);
    $stmt->bindParam('p',$price);
    $stmt->execute();
    $codeprod = $bdd->lastInsertId();
    $req = "INSERT INTO `photo` (codeprod, url) VALUES (:c, :u)";
    
   foreach ($url as $clef=>$photo) {
        $stmt = $bdd->prepare($req);
        $stmt->bindParam(':c', $codeprod);
        $stmt->bindParam(':u', $photo);
        $stmt->execute();
    }
    


   

   }
   



?>

<?php

function afficheall()
{
  $bdd= new PDO('mysql:host=localhost;dbname=commercial', "smallziz", "93227", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
  if ($bdd)
  {
    $req2="SELECT * FROM `Produit` JOIN Photo ON Produit.code=Photo.codeprod GROUP BY codeprod ";
   
    $rslt=$bdd->query($req2);
   
   
    while($row=$rslt->fetch())
    {
     
      $prix=$row["prixU"];
      $desc=$row["description"];
      $cat=$row["categorie"];
      $photo=$row["url"];
        $code=$row['code'];
      $nom=$row['nom'];
      
      echo'<tr>';
      $cible='dt.php';
      echo"<td>$nom</td> <td>$cat</td>  <td>$prix</td> <td>$desc</td><td><img class='imgp'
       src='$photo'/></td> <td> <form methode='GET' action=$cible> <input type='submit'
        value='details' name = 'dt'> <input type='submit' value='supprimer' name='supp'>
         <input type='submit' value='modifier' name='modify'> <input type='hidden'  name='code' value='$code'>
      </form></td>" ;
         echo '</tr> ';

    
    }
  }
}

?>





















<!DOCTYPE html>
<html lang="fr">
<div class="menu">
    <?php
    display();
    ?>
</div>
<head><link rel="stylesheet" href="css/prd.css"<?php echo time(); ?>></head>

<body>
  <div class="content">
  <form id="search-form" method="post" action="search.php">
        <div class="search-container">
            <input type="text" id="search-input" name="search" placeholder="Rechercher...">
            <button type="submit">Rechercher</button>
        </div>
    </form>
    <ul id="search-results">
    </ul>
  
  <section class="tab">
    
    <table>
      <caption> nos diffents produits</caption>
   <tr>
   <th>Nom</th>
    <th>Catégorie</th>
    <th>Prix</th>
    <th>Description</th>
    <th>Photo</th>
    <th>details</th>
   </tr>
    <?php afficheall();?>
    </table>
  </section>
  <section class="formul">
    <h1>Formulaire d'insertion de produit</h1>
    <form method="POST" enctype="multipart/form-data" class="ajt">
          <div class="form-group">
            <label for="nom">Nom du produit :</label>
            <input type="text" id="nom" name="nom" required>
          </div>
          <div class= form-group>
          <label for="categorie">Catégorie :</label>
                <select id="categorie" name="categorie">
                    

                        <option value="téléphone">Telephone</option>
                        <option value="ordinateur">Ordinateur</option>
                        <option value="Tablette">Tablete</option>
                        <option value="Consol de jeux">Consol de jeux</option>
                        <option value="jeux-video">jeux-video</option>
      
                </select>

          </div>
          <div class="form-group">
            <label for="description">Description :</label>
            <input type="text" id="description" name="description" required>
          </div>
          <div>
            <label for="prix">Prix</label>
            <input type="number" min="100" step="100" name="prix" id="prix">
          </div>
          <div class="form-group">
            <label for="images">Image du produit :</label>
           <input type="file" name="images[]" multiple>
          </div>
          <input type="submit" value="Ajouter le produit" class="summit" name="send">
          
          
    </form>
  </section>
  </div>
 
</body>




<div class="bas">
   <?php
     displayb()
   ?>
 </div>