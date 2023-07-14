<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>test0</title>
</head>

<body>
  <h1>Welcome to L3</h1>
  <?php
  $p = "Tida";
  $n = "massaly";
  $a = 30;
  $sh = $p . $n . " a " . $a . " dans 5 ans " . "elle aura " . ($a + 5);
  echo $sh;
  echo " <br/>";
  echo phpversion();
  echo " <br/>";
  echo PHP_OS;

  ?>
</body>

</html>