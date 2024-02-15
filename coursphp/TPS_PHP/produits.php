<?php
session_start();
?>
<?php
require_once 'mes_fonctions/fonctions.php';
tete();
?>
<!DOCTYPE html>

<body class="produit">
    <form action="traitement.php" method="post" enctype="multipart/form-data">
        <h1>Ajouter un produit pour <?php echo $_SESSION['nom']?></h1>

        <form action="traitement.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="libelle">Libellé :</label>
                <input type="text" id="libelle" name="libelle">
            </div>

            <div class="form-group">
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
                <label for="date_approvisionnement">Date d'approvisionnement :</label>
                <input type="date" id="date_approvisionnement" name="date_approvisionnement">
            </div>

            <div class="form-group">
                <label for="prix_unitaire">Prix unitaire :</label>
                <input type="number" id="prix_unitaire" name="prix_unitaire" step="0.01">
            </div>

            <div class="form-group">
                <label for="tailles">Tailles disponibles :</label>
                <input type="text" id="tailles" name="tailles">
            </div>

            <div class="form-group">
                <label for="disponibilite">Disponibilité :</label>
                <select id="disponibilite" name="disponibilite">
                    <option value="disponible">Disponible</option>
                    <option value="rupture">En rupture de stock</option>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Description :</label>
                <textarea id="description" name="description"></textarea>
            </div>

            <div class="form-group">
                <label for="photo">Photos :</label>
                <input type="file" id="photo" name="photos[]" multiple />
            </div>


            <div class=" form-group">
                <label for="email_commercial">Email du commercial responsable :</label>
                <input type="email" id="email_commercial" name="email_commercial">
            </div>

            <input type="submit" value="Ajouter le produit" class="submit-button" />

        </form>
</body>

<?php bas(); ?>
</body>