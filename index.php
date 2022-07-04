<!DOCTYPE html>

    <html lang="fr">

      <head>
        <meta name="author" content="Gauthier BARAS" />
        <meta charset="utf-8" />
        <link href="index.css" rel="stylesheet" />
        <title>Autosun</title>
      </head>

      <body>

        <!-- Header of the page -->
            <?php include("nav.php"); ?>

            <?php include("fonction_electrique.php"); ?>

            <?php echo ConnectionMysql(); ?>

        <!-- Best Known List -->
            <div class="List">
               <h3 class="CategoryTitle">CATEGORIES</h3><br />
                <ul class="NavDomotique">
                  <li>Raspberry PI4 4GB</li>
                  <li>Ecran HMTECH</li>
                  <li>Pince Aeotec</li>
                </ul>
                <ul class="NavElectrique">
                  <li><a href="<?php echo FournisseurOption1(); ?>">Fournisseur 1</a></li>
                  <li><a href="<?php echo FournisseurOption2(); ?>">Fournisseur 2</a></li>
                  <li>Matèriel</li>
                </ul>
                <ul class="NavPlomberie">
                  <li>Fournisseur 1</li>
                  <li>Fournisseur 2</li>
                </ul>
                <ul class="NavClim">
                  <li>Fournisseur 1</li>
                  <li>Fournisseur 2</li>
                </ul>
                <ul class="TauxInflation">
                  <li>Cuivre</li>
                  <li>Or</li>
                  <li>Fer</li>
                </ul>
            </div>

      </body>
    
    </html>