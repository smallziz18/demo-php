<?php
include_once 'entete.php';
error_reporting(0);

display();






    if(isset($_GET['code']))
    $code=($_GET['code']);
if (isset($_GET['supp']))
 {
    echo 'voulez vous supprimmer ce produit';
    echo'
    <form  method="post">
    <label for="sp1"> oui</label>
    <input type="radio" name="sp" id="sp1" value="oui">
    <label for="sp"> non</label>
    <input type="radio" name="sp" id="sp" value="non">
    <input type="submit" value=" send" >

  </form>';
  if($_POST['sp']=='oui')
   {
       $bdd= new PDO('mysql:host=localhost;dbname=commercial', "smallziz", "93227", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
       if ($bdd)
           {
               $req='DELETE FROM `photo` WHERE codeprod = :ne';
               $stmt=$bdd->prepare($req);
               $stmt->bindParam(':ne',$code);
               $req2='DELETE FROM `produit`WHERE code = :ne';
               $stmt2=$bdd->prepare($req2);
               $stmt2->bindParam(':ne',$code);
               if ($stmt->execute() && $stmt2->execute()) 
               {
                echo "Le produit a été supprimé avec succès.";
                   header("location: produits.php");
                }
             else {
                echo "Erreur lors de la suppression du produit.";
            }
               
           }
           
   }
 }
 
 elseif (isset($_GET['dt']))

 { 
    $bdd= new PDO('mysql:host=localhost;dbname=commercial', "smallziz", "93227", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
    if ($bdd)
    {
      $req2="SELECT * FROM `Produit` JOIN Photo ON Produit.code=Photo.codeprod  WHERE code = ? ";
     
      $smt=$bdd->prepare($req2);
      $smt->bindParam(1,$code);
      $smt->execute();
     
     
      while($row=$smt->fetch())
      {
       
        $prix=$row["prixU"];
        $desc=$row["description"];
        $cat=$row["categorie"];
        $photo[]=$row["url"];
        $code=$row['code'];
        $nom=$row['nom'];
      }
      echo'<head><link rel="stylesheet" href="css/dt.css"></head>';
      echo "<div class='product-details'>
    <h1>Details du produit</h1>

    <p>nom du produit: " . $nom . "</p>
    <p>description: " . $desc . "</p>
    <p>categorie: " . $cat . "</p>
    <p>prix: " . $prix . "</p>
</div>";

echo "<div class='product-images'>";
// En supposant que $photo est un tableau contenant les URL des images du produit
foreach ($photo as $clef => $image) {
    echo "<img src='" . $image . "' alt='Image du produit'>";
}
echo "</div>";

  
  
     

 }
 
   

   
}

else
{
  $bdd= new PDO('mysql:host=localhost;dbname=commercial', "smallziz", "93227", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));

  function rincer($input)
  {
      $input = trim($input);
      $input = stripslashes($input);
      $input = htmlspecialchars($input);
      return $input;
  }
  if(!empty($_POST['nom']))
   {
    $nom=rincer($_POST['nom']);
    $req="UPDATE `produit` SET nom=:n WHERE code =:c";
    $stmt=$bdd->prepare($req);
    $stmt->bindParam(':n',$nom);
    $stmt->bindParam(':c',$code);
    $stmt->execute();
   }
  if(!empty($_POST['categorie']))
  {
    $cat=rincer($_POST['categorie']);
    $req="UPDATE `produit` SET categorie=:cat WHERE code =:c";
    $stmt=$bdd->prepare($req);
    $stmt->bindParam(':cat',$cat);
    $stmt->bindParam(':c',$code);
    $stmt->execute();
  }
    
  if(!empty($_POST['description']))
  {
    $descp=rincer($_POST['description']);
    $req="UPDATE `produit` SET description= :d WHERE code =:c";
    $stmt=$bdd->prepare($req);
    $stmt->bindParam(':d',$descp);
    $stmt->bindParam(':c',$code);
    $stmt->execute();
  }
    
  if(isset($_POST['prix'])&&!empty($_POST['prix']))
  {
    $price=rincer($_POST['prix']);
    $req="UPDATE `produit` SET prixU= :p WHERE code =:c";
    $stmt=$bdd->prepare($req);
    $stmt->bindParam(':p',$price);
    $stmt->bindParam(':c',$code);
    $stmt->execute();
  }
  if(isset($_POST['send']))
  {
    echo 'modifications reussit';
    header("location: produits.php");
  }
  
  
  echo " <section class='formul'>
  <head>
  <?php?>
  <link rel='stylesheet' href='css/prd.css'>
  </head>
  <h1>Formulaire de modification du produit</h1>
  <form method='POST' enctype='multipart/form-data' class='ajt'>
        <div class='form-group'>
          <label for='nom'>Nom du produit :</label>
          <input type='text' id='nom' name='nom' >
        </div>
        <div class= form-group>
        <label for='categorie'>Catégorie :</label>
        <select id='categorie' name='categorie'>
                    

        <option value='téléphone'>Telephone</option>
        <option value='ordinateur'>Ordinateur</option>
        <option value='Tablette'>Tablete</option>
        <option value='Consol de jeux'>Consol de jeux</option>
        <option value='jeux-video'>jeux-video</option>

</select>

        </div>
        <div class='form-group'>
          <label for='description'>Description :</label>
          <input type='text' id='description' name='description' >
        </div>
        <div>
          <label for='prix'>Prix</label>
          <input type='number' step='100' min='100' name='prix' id='prix'>
        </div>
        
        <input type='submit' value='confirmer' class='summit' name='send'>
        
        
  </form>
  </section>";  
}
?>

 

<?php

 

?>
