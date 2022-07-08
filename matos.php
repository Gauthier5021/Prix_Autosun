<!DOCTYPE html>

    <html lang="fr">

      <head>
        <meta name="author" content="Gauthier BARAS" />
        <meta charset="utf-8" />
        <link href="index.css" rel="stylesheet" />
        <title>Matèriel Electrique</title>
      </head>
      
      <body>

        <form method="POST" action="matos.php" class="FormulaireElec">

            <table class="TableauElec">

            <h1 class="TitrePrincipaleElec">Liste Prix</h1><br />
            
              <tr class="ChampTableau">
                <h3 class="TitreTableauElectrique">Electricité</h3><br /> 
                  <select class="FournisseurElec" name="FournisseurElec">
                    <option>Yesss</option>
                    <option>Rexel</option>
                    <option>Cged</option>
                    <option>123Elec</option>
                    <input type="submit" class="BoutonFournisseur" name="BoutonFournisseur" value="Confirmer" />
                   </select>
                  <th class="TitreElec">Nom</th>
                  <th class="TitreElec">Prix</th>
                  <th class="TitreElec">Lien</th>
                  <th class="TitreElec">Mise a jour</th>  
                  <?php include("fonction.php"); ?>
                </tr>
                <tr>
                  <td class="MatosElec">7G1</td>
                  <td class="MatosElec"></td>
                  <td class="MatosElec"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="7g1" /></td>
                </tr>
    
            </table>

        </form>

      </body> 

    </html>