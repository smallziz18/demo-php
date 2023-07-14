<?php require '../test/Entete.php';
include '../test/equation.php';
include '../test/tables_et_Cercle.php';
include '../test/Figure-geometriques.php'; ?>

<body>

    <?php
    menu(); ?>
    <div class="Les_sections">
        <section class="exercise1">

            <div id="eq">
                <?php
                eq2ndegr(8, 3, 2);
                ?>
            </div>
            <div class="tables">
                <?php
                table(5);
                tables(6, 4, 5); ?>
            </div>

            <div class="cercle">
                <?php cercle(6); ?>

            </div>

        </section>

        <section class="ex2">
            <div>
                <?php
                carre(8);
                echo "</br>";
                carre_vide(8);
                ?>
            </div>
            <div>
                <?php
                echo "</br>";
                rectangle(5, 8);
                echo "</br>";
                rectangle_vide(5, 8);
                ?>
            </div>
            <div>
                <?php


                echo "</br>";
                triangle(5, 1);
                echo "</br>";
                triangle(5, 0);
                echo "</br>";
                echo "</br>";
                triangle(5, 5);

                ?>
            </div>

        </section>
        <section class="ex3">
            <?php
            include '../test/tableau.php';
            ?>

        </section>
    </div>
</body>

</html>