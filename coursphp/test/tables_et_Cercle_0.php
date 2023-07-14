<?php

                function produituit($a, $b)
                {
                    $p = 1;
                    foreach (func_get_args() as $n) {
                        $p *= $n;
                    }
                    return $p;
                }
                function table($n)
                { //table multiplication
                    echo "<table>";
                    echo "<caption> table de $n</caption>";
                    echo "<tr> <th> operation </th><th> resultat</th> </tr>";
                    for ($i = 1; $i < 11; $i++) 
                    {
                        echo "<tr>";
                        $r = produituit($i, $n);
                        echo "<td> $n*$i</td><td> $r</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
                function tables()
                {
                    if (func_get_args() == 0)
                        table(2);
                    else
                        foreach (func_get_args() as $t) {
                            table($t);
                        }
                }
                
                function cercle($r) // cercle
                {

                    echo "<p> la surface du cerrcle est : " . produituit(produituit($r, $r), pi());
                    echo "</p>";
                    echo "ce cercle a un rayon de $r et un diametre de" . produituit($r, 2);
                }
