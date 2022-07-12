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
                <!-- <h3 class="TitreTableauElectrique">Electricité</h3><br /> -->
                  <select class="FournisseurElec" name="FournisseurElec">
                    <option>Yesss</option>
                    <option>Rexel</option>
                    <option>Cged</option>
                    <option>123Elec</option>
                    <input type="submit" class="BoutonFournisseur" name="BoutonFournisseur" value="Confirmer" />
                   </select>
                  <th class="TitreElec">Nom</th>
                  <th class="TitreElecMysqlPrix">Prix</th>
                  <th class="TitreElec">Mise a jour</th>  
                </tr>

                <p class="ResultMysql"><?php include("fonction.php"); ?></p>

                <tr>
                  <td class="MatosElecTitre">7G1</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="3g1" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">3G1</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="3g1" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">4G1</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="4g1" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">3G2</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="3g2" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">5G2</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="5g2" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">5G2</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="5g2" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">3G4</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="3g4" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">5G4</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="5g4" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">3G6</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="3g6" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">5G6</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="5g6" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">3G10</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="3g10" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">5G10</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="5g10" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">6mm² Vert Jaune</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="6VertJaune" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">10mm² Vert Jaune</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="10VertJaune" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">16mm² Vert Jaune</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="16VertJaune" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">0,75mm² Blinde</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="075Blinde" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">6mm² Bleu Souple</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="6BleuSouple" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">6mm² Rouge Souple</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="6RougeSouple" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">10mm² Bleu Souple</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="10BleuSouple" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">10mm² Rouge Souple</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="10RougeSouple" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">16mm² Bleu Souple</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="16BleuSouple" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">16mm² Rouge Souple</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="16RougeSouple" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Boite 80x80</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="Bt80x80" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Tableau De 6 Module</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="Tbl6Module" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Tableau De 8 Module</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="Tbl8Module" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Tableau De 13 Module</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="Tbl13Module" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Prise Applique</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="PriseApp" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Prise Modulaire</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="PriseMod" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Disjoncteur 2A</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="Disjoncteur2A" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Disjoncteur 10A</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="Disjoncteur10A" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Disjoncteur 16A</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="Disjoncteur16A" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Disjoncteur 20A</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="Disjoncteur20A" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Disjoncteur 25A</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="Disjoncteur25A" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Disjoncteur 32A</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="Disjoncteur32A" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Disjoncteur 40A</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="Disjoncteur40A" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Inter Diff AC 40A</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="InterDiffAC40A" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Inter Diff 20A</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="InterDiff20A" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Inter Diff AC 63A</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="InterDiffAC63A" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Disjoncteur 4 Pole 16A</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="Disjoncteur4Pole16A" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Disjoncteur 4 Pole 20A</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="Disjoncteur4Pole20A" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Disjoncteur 4 Pole 25A</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="Disjoncteur4Pole25A" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Inter Diff 4 Pole 40A</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="InterDiff4Pole40A" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Inter Diff 4 Pole 63A</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="InterDiff4Pole63A" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Inter Diff 4 Pole 2A</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="InterDiff4Pole2A" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Inter Diff 4 Pole 6A</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="InterDiff4Pole6A" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Cache Coffret 24 Module</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="CacheCoff24Mod" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Filet De Securite</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="FiletSecu" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">ICTA Diam 25</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="IctaGaine25" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">ICTA Diam 50</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="IctaGaine50" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">ICTA Diam 63</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="IctaGaine63" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">IRL Tulipe Gris Diam 25</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="Tubiro25" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Coude Diam 25</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="CoudeDiam25" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Goulotte Elec 40x60</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="Goulotte40x60" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Goulotte Ivoire Beige</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="GoulotteIvoire" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Piquet De Terre 1,5</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="PiquetTerre" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Repartiteur De Terre</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="RepartiteurTerre" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Barette De Coupure</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="BaretteCoupure" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Repartiteur Bipolaire</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="RepBipolaire" /></td>
                </tr>
                <tr>
                  <td class="MatosElecTitre">Repartiteur Tetrapolaire</td>
                  <td class="MatosElecMysqlPrix"></td>
                  <td class="MatosElec"><input type="text" class="FormElec" name="RepTetrapolaire" /></td>
                </tr>
    
            </table>

        </form>

      </body> 

    </html>