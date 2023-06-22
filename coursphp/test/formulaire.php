<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="style.css?v=php echo time(); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <?php
  /*les inputs sans names son pas bon et tous devrons etre differents il est
  possible de pre-remplir avec des valeur par defaut avec l'attribut value on
  on peut aussi ajouter des suggestion avec l'attribut placeholder
  en ayant un input on ajouter un labele en l'encadrant pour type number on a les attributs min max and step
  les inpute radio doivent avoir le meme name obbligatoirement pour les radios et les checkbocks doivent avoir l'attribut value pour cocher une valeur par defaut
  on utilise l'attribut checked="checked" pour les checkbox pur le name on doit ajouter [] pour pouvoir faire un choix
  les submits oront un value,le name est optionelle on a les type radio checkbox submit reset text et la balise paire select pour les liste deroulant
  dans le select on ajoute une option avec la balise paire option avec value pour cocher par defaut c est avec selected
  on peut faire des sous groupes avec des optgroupes(balises paires) pour structurer les options* pour les text on utilises la balise textarea
  pour la methode on doit utiliser le get est par defaut avec l'attribut on choisi la cyble qui tjr un fichier php par defaut se sera le fichier donc il devrait etre en php
  */

  /*
  verifier d'abor avec if(isset $_post['value'])
   pour recuper c'est $_post['nom'] ;
   pour les checkbox
   ^$choix =$_POST['ops'];
   forech($choix as $op)
   echo "

   */

  ?>

  <body>
    error_reporting(-1);
    <h1>FORMULAIRE D'INSCRIPTION</h1>
    <form action="affiche.php" method="post" enctype="multipart/form-data">
      <div class="form">
        <p>
          <label for="nom" class="lb">nom</label>
          <input type="text" name="nom" placeholder="votre nom de famille" class="inp">
        </p>
        <p>
          <label for="prenom" class="lb">prenom</label>
          <input type="text" name="prenom" class="inp">
        </p>

        <p>
          <label for="age" class="lb">age</label>
          <input type="number" name="age" class="inp" min="0">
        </p>
        <p>
          <label for="dateN">votre date de naissance</label>
          <input type="date" name="dateN">
        </p>
        <div class="sx">
          <label for="sexe" class="lb">sexe</label>
          <p>

            <label for=" Homme"><input type="radio" name="sexe" value="Masculin" id="homme" checked>H</label>
            <label for="Femme"><input type="radio" name="sexe" value="Feminin" id="Femme">F</label>
          </p>
        </div>
        <p>
          <label for="option[]">cycle
            <label for="options[]">BI</label>
            <input type="checkbox" name="options[]" id="options" value="BI">
            <label for="options[]">SIR</label>
            <input type="checkbox" name="options[]" id="options" value="SIR">
            <label for="options[]">RETEL</label>
            <input type="checkbox" name="options[]" id="options" value="RETEL">
          </label>
        </p>

        <p>
          <label for="classe"> votre niveau</label>
          <select name="classe" class="inp">
            <optgroup label=licence>
              <option value="licence1" label="licence1" selected></option>
              <option value="Licence2" label="licence2"></option>
              <option value="licence3" label="licence3"></option>
            </optgroup>
            <optgroup label="Master">
              <option value="Master1" label="M1"></option>
              <option value="Master2" label="M2"></option>
            </optgroup>
            <option value="Doctorat" label="doctorat"></option>


            </optgroup>
          </select>
        </p>
        <p>
          <label for="com" class="lb">Commentaire</label>
          <textarea name="com" class="lb" cols="30" rows="10"></textarea>
        </p>
        <div class="send">
          <p class="snd">
            <input type="submit" value="Envoyer">
          </p>
          <p class="anl">
            <input type="reset" value="Anuller">
          </p>
        </div>
        <div>
          <label for="photo">votre photo</label>

          <input type="file" name="photo" accept="images/*">
          <input type="file" name="pics[]" multiple>
        </div>
      </div>
    </form>
  </body>




</html>