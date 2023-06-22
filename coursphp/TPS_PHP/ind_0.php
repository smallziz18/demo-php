<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1</title>

    <link rel="stylesheet" href="css/style1.css?php echo time(); ?>">

</head>

<body>
    <header>
        <h1>TP PHP</h1>
        <p>by Tourad</p>
    </header>
    <nav>
        <ul>
            <div>
                <li><a href="#s1">Section 1</a></li>
                <li><a href="#s2">Section 2</a></li>
                <li><a href="#s3">Section 3</a></li>
            </div>

        </ul>
    </nav>
    <div id="les_sections">

        <section id="s1">
            <h1>Section 1</h1>
            <?php
            function equation($a, $b, $c)
            {
                echo "<h3>Resolution de l'equation $a x^2 + $b x + $c :</h3>";
                $delta = $b * $b * 4 * $a * $c;
                if ($delta > 0) {
                    $x1 = (-$b - sqrt($delta)) / 2 * $a;
                    $x2 = (-$b + sqrt($delta)) / 2 * $a;
                    echo "deux solutions possibles : $x1 et $x2 ";
                }
                if ($delta = 0) {
                    $x1 = $x2 = -$b / 2 * $a;
                    echo "une solution possible : $x1";
                }
                if ($delta < 0) {
                    echo "pas de solution";
                }
            }

            function affichetable()
            {
                $n = func_get_args();


                if ($n == null) {
                    echo "<h3>Table de multiplication de 2:</h3>";
                    echo "<table>";
                    echo "<tr><th>operation</th><th>resultat</th></tr>";
                    for ($i = 1; $i < 11; $i++) {
                        $result = $i * 2;
                        echo "<tr><td> 2 x $i = </td><td>$result</td></tr>";
                    }
                    echo "</table>";
                }
                foreach ($n as $value) {
                    echo "<h3>Table de multiplication:</h3>";
                    echo "<table>";
                    echo "<tr><th>operation</th><th>resultat</th></tr>";
                    for ($i = 1; $i < 11; $i++) {
                        $result = $i * $value;
                        echo "<tr><td>$value x $i = </td><td>$result</td></tr>";
                    }
                    echo "</table>";
                }
            }
            function cercle($r)
            {
                echo "<h3>Le cercle de rayon $r a comme carateristique : <br></h3>";
                $perim = 2 * M_PI * $r;
                $aire = M_PI * $r * $r;
                echo "Perimetre  : " . $perim . "<br>";
                echo "Aire : " . $aire . "<br>";
                echo "Diamtetre :" . $r * 2;
            }
            echo "<div class='c'>";
            equation(1, 3, 1);
            echo "</div>";
            echo "<div class='c'>";
            affichetable(4);
            echo "</div>";
            echo "<div class='c'>";
            cercle(4);
            echo "</div>";

            ?>
        </section>
        <section id="s2">
            <h1>Section 2</h1>
            <?php
            echo "<div class='c'>";
            echo "<h3>Voici une ligne d'étoile</h3>";
            for ($i = 1; $i <= 8; $i++) {
                echo "*";
            }
            echo "</div>";
            echo "<div class='c'>";
            echo "<h3>Voici un carré d'étoile</h3>";
            for ($i = 1; $i <= 8; $i++) {
                for ($j = 1; $j <= 8; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
            echo "</div>";
            echo "<div class='c'>";
            echo "<h3>Voici un Triangle d'étoile vers le haut</h3>";
            for ($i = 1; $i <= 8; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
            echo "</div>";
            echo "<div class='c'>";
            echo "<h3>Voici un Triangle d'étoile vers le bas</h3>";
            for ($i = 1; $i <= 8; $i++) {
                for ($j = 8; $j > 0; $j--) {
                    if ($j > $i) {
                        echo "*";
                    } else {
                        echo "&nbsp;";
                    }
                }
                echo "<br>";
            }
            echo "</div>";

            ?>
        </section>
        <section id="s3">
            <h1>
                section 3
            </h1>

            <?php
            $prix = array(200000, 444000, 150000, 800000, 120000, 450000, 1000000, 200000, 100000);
            echo "<div class='c'>";
            echo "<h3>Voici les prix nos PC :</h3>";

            for ($i = 0; $i < count($prix); $i++) {
                echo "--<span>$prix[$i]</span>-- ";
            }
            echo "</div>";
            echo "<div class='c'>";
            $moyen = 0;
            $somme = 0;
            for ($i = 0; $i < count($prix); $i++) {
                $somme += $prix[$i];
            }
            $moyen = $somme / count($prix);
            echo "le prix moyen est de : <span>$moyen</span>";

            echo "</div>";
            echo "<div class='c'>";
            $max = 0;
            $min = 3000000;
            foreach ($prix as $value) {
                if ($max < $value) {
                    $max = $value;
                }
                if ($min > $value) {
                    $min = $value;
                }

            }
            echo "Le plus grand est de : <span>$max </span>et le plus petit est de : <span>$min</span>";
            echo "</div>";
            echo "<div class='c'>";
            $nb = 0;
            foreach ($prix as $value) {
                if ($value <= 150000) {
                    $nb++;
                }
            }
            echo "Le nombre de PC dont le prix est inférieur á 150000 est :<span>$nb</span>";
            echo "</div>";
            echo "<div class='c'>";
            $n = 0;
            foreach ($prix as $value) {
                if ($value = 750000) {
                    $n++;
                }
            }
            if ($n = 0) {
                echo "<span>Un PC dont le prix est de 750000 n'existe pas ";
            } else {
                echo "<span>Il existe u  PC dont le prix est de 750000</span>";
            }
            echo "</div>";
            echo "<div class='c'>";
            $ProdPrefere = array(
                "nom" => "Asus tuf",
                "prix" => 600000,
                "catégorie" => "PC",
                "marque" => "Asus",
                "pays de provenance" => "USA"
            );
            echo "Nom : " . $ProdPrefere["nom"] . "<br>";
            echo "Prix : " . $ProdPrefere["prix"] . "<br>";
            echo "Catégorie : " . $ProdPrefere["catégorie"] . "<br>";
            echo "Marque : " . $ProdPrefere["marque"] . "<br>";
            echo "Pays de provenance : " . $ProdPrefere["pays de provenance"] . "<br>";
            echo "</div>";
            echo "<div class='c'>";
            echo $ProdPrefere["nom"] . "<br>";
            echo $ProdPrefere["prix"] . "<br>";
            echo "</div>";
            $ProdPrefere["prix"] += (30 * $ProdPrefere["prix"] / 100);
            echo "<div class='c'>";
            foreach ($ProdPrefere as $cle => $valeur) {
                echo "$cle : <span>$valeur</span> <br>";
            }


            echo "</div>";
            ?>
        </section>

    </div>

</body>

</html>