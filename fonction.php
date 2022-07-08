<?php

// Connection MYSQL
$Hostname = 'mysql:host=localhost;dbname=autosun;charset=utf8';
$User = 'root';
$Password = 'root';

try
{
    $db = new PDO($Hostname, $User, $Password);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

// Partie Elec Yesss
if ($_POST['FournisseurElec'] == "Yesss")
{
    $SqlPrixElec = $db->query("SELECT prix FROM Elec_Yesss");
    
    while ($Result = $SqlPrixElec->fetch())
    { 
        $ResultPrixElec = $Result['prix'];
        echo "<br />", $ResultPrixElec;
    }
    $SqlLien = $db->query("SELECT lien FROM Elec_Yesss");

    while ($Result = $SqlLien->fetch())
    {    
        $ResultLienElec = $Result['lien'];
        echo "<br />", $ResultLienElec;
    }
}
/* elseif ($_POST['FournisseurElec'] == "Yesss")
{
    $SqlPrixElec = $db->query("SELECT prix FROM Elec_Yesss");
    
    while ($Result = $SqlPrixElec->fetch())
    { 
        $ResultPrixElec = $Result['prix'];
        echo "<br />", $ResultPrixElec;
    }
    $SqlLien = $db->query("SELECT lien FROM Elec_Yesss");

    while ($Result = $SqlLien->fetch())
    {    
        $ResultLienElec = $Result['lien'];
        echo "<br />", $ResultLienElec;
    }
} */

// Pour les Raspberry
function RaspberryOption1()
{
    $Raspberry_Farnell = 52.36;
    $Raspberry_DigiKey = 51.30;

    $Lien_Farnell = "https://fr.farnell.com/raspberry-pi/rpi4-modbp-4gb/raspberry-pi-4-model-b-4gb/dp/3051887";
    $Lien_Digikey = "https://www.digikey.fr/fr/products/detail/raspberry-pi/Raspberry-Pi-4B-4GB/10258781";

    if ($Raspberry_DigiKey < $Raspberry_Farnell)
    {
        return $Lien_Digikey;
    }
    elseif ($Raspberry_Farnell < $Raspberry_DigiKey)
    {
        return $Lien_Farnell;
    }  
}
function RaspberryOption2()
{
    $Raspberry_Amazon = 156.67;
    $Raspberry_RsComponents = 55.31;

    $Lien_Amazon = "https://www.amazon.fr/Raspberry-Mod%C3%A8le-ARM-Cortex-A72-WLAN-AC-Bluetooth/dp/B07TC2BK1X/ref=sr_1_2?crid=1U8NH82JEMI7Q&keywords=raspberry+pi+4&qid=1656519476&sprefix=%2Caps%2C61&sr=8-2";
    $Lien_RsComponents = "https://fr.rs-online.com/web/p/raspberry-pi/1822096";

    if ($Raspberry_RsComponents < $Raspberry_Amazon)
    {
        return $Lien_RsComponents;
    }
    elseif ($Raspberry_RsComponents > $Raspberry_Amazon)
    {
        return $Lien_Amazon;
    }
}

// Fournisseur Electricité
function FournisseurYesss()
{
    //Prix Professionnel
    $Cable7g1 = 1.83;
    $Cable3g1 = 0.75;
    $Cable4g1 = 1;
    $Cable3g2 = 1.13;
    $Cable5g2 = 1.85;
    $Cable3g4 = 1.80;
    $Cable5g4 = 2.88;
    $Cable3g6 = 2.60;
    $Cable5g6 = 4.27;
    $Cable3g10 = 4.13;
    $Cable5g10 = 6.66;
    $Cable6mm2Terre = 0.76;
    $Cable10mm2Terre = 1.26;
    $Cable16mm2Terre = 2.02;
    $Cable0_75mm2 = 0.57;
    $CableBleu6mm2 = 0.76;
    $CableRouge6mm2 = 0.76;
    $CableBleu10mm2 = 1.29;
    $CableRouge10mm2 = 1.29;
    $CableBleu16mm2 = 2.05;
    $CableRouge16mm2 = 2.05;
    $Boite80x80 = 0.70;
    $Tableau6Module = 6.10;
    $Tableau8Module = 8.10;
    $Tableau13Module = 9.81;
    $PriseApplique = 5.63;
    $PriseModulaire = 5.13;
    $Disjoncteur2A = 11.79;
    $Disjoncteur10A = 7.49;
    $Disjoncteur16A = 7.49;
    $Disjoncteur20A = 7.49;
    $Disjoncteur25A = 9.74;
    $Disjoncteur32A = 9.21;
    $Disjoncteur40A = 14.26;
    $InterDiffAC40A = 33.57;
    $InterDiffAC20A = 89.57;
    $InterDiffAC63A = 176.37;
    $Disjoncteur4Pole16A = 52.36;
    $Disjoncteur4Pole20A = 52.83;
    $Disjoncteur4Pole25A = 59.19;
    $InterDiff4Pole40A = 45.03;
    $InterDiff4Pole63A = 70.62;
    $InterDiff4Pole2A = 86.24;
    $InterDiff4Pole6A = 68.16;
    $CacheCoffret = 5.53;
    $FiletDeSecurite = 10.35;
    $IctaDiam25 = 0.55;
    $IctaDiam50 = 0.46;
    // $IctaDiam63 = "?";
    $IrlTulip25 = 1.39;
    $CoudeDiam25 = 0.49;
    $GoulotteElec = 8.87;
    $GoulotteIvoire = 13.95;
    $PiquetDeTerre = 3.06;
    $RepartiteurDeTerre = 8.30;
    $BaretteDeCoupure = 3.50;
    $RepartiteurBipolaire = 7.18;
    $RepartiteurTetrapolaire = 11.45;
    $CableGen1 = $Cable7g1 + $Cable3g1 + $Cable4g1 + $Cable3g2 + $Cable5g2 + $Cable3g4 + $Cable5g4 + $Cable3g6 + $Cable5g6 + $Cable3g10 + $Cable5g10 + $Cable6mm2Terre + $Cable10mm2Terre + $Cable16mm2Terre;
    $CableGen2 = $Cable0_75mm2 + $CableBleu6mm2 + $CableRouge6mm2 + $CableBleu10mm2 + $CableRouge10mm2 + $CableBleu16mm2 + $CableRouge16mm2;
    $Coffret = $Boite80x80 + $Tableau6Module + $Tableau8Module + $Tableau13Module + $PriseApplique + $PriseModulaire;
    $DisjoncteurGen1 = $Disjoncteur2A + $Disjoncteur10A + $Disjoncteur16A + $Disjoncteur20A + $Disjoncteur25A + $Disjoncteur32A + $Disjoncteur40A;
    $DisjoncteurGen2 = $InterDiffAC40A + $InterDiffAC20A + $InterDiffAC63A + $Disjoncteur4Pole16A + $Disjoncteur4Pole20A + $Disjoncteur4Pole25A +  $InterDiff4Pole40A +  $InterDiff4Pole63A + $InterDiff4Pole2A + $InterDiff4Pole6A;
    $Gaine = $CacheCoffret + $FiletDeSecurite + $IctaDiam25 + $IctaDiam50 + $IrlTulip25 + $CoudeDiam25 + $GoulotteElec + $GoulotteIvoire + $PiquetDeTerre + $RepartiteurDeTerre + $BaretteDeCoupure + $RepartiteurBipolaire + $RepartiteurTetrapolaire;
    $Result = $CableGen1 + $CableGen2 + $Coffret + $DisjoncteurGen1 + $DisjoncteurGen2 + $Gaine;
    return $Result;
}
function FournisseurRexel()
{
    //Prix Professionnel
    $Cable7g1 = 2.26;
    $Cable3g1 = 0.76;
    $Cable4g1 = 1.22;
    $Cable3g2 = 1.21;
    $Cable5g2 = 2.03;
    $Cable3g4 = 2.14;
    $Cable5g4 = 3.42;
    $Cable3g6 = 3.14;
    $Cable5g6 = 5.13;
    $Cable3g10 = 5.02;
    $Cable5g10 = 8.36;
    $Cable6mm2Terre = 0.95;
    $Cable10mm2Terre = 1.72;
    $Cable16mm2Terre = 2.83;
    // $Cable0_75mm2 = 0.57;
    // $CableBleu6mm2 = 0.76;
    // $CableRouge6mm2 = 0.76;
    // $CableBleu10mm2 = 1.29;
    // $CableRouge10mm2 = 1.29;
    // $CableBleu16mm2 = 2.05;
    // $CableRouge16mm2 = 2.05;
    $Boite80x80 = 2.12;
    $Tableau6Module = 22.74;
    $Tableau8Module = 29.74;
    $Tableau13Module = 21.44;
    $PriseApplique = 7.71;
    $PriseModulaire = 14.60;
    $Disjoncteur2A = 17.60;
    $Disjoncteur10A = 10.65;
    $Disjoncteur16A = 9.61;
    $Disjoncteur20A = 9.61;
    $Disjoncteur25A = 17.31;
    $Disjoncteur32A = 13.74;
    $Disjoncteur40A = 23.74;
    $InterDiffAC40A = 57.59;
    $InterDiffAC20A = 166.23;
    $InterDiffAC63A = 340.19;
    $Disjoncteur4Pole16A = 95.37;
    $Disjoncteur4Pole20A = 96.23;
    $Disjoncteur4Pole25A = 107.83;
    // $InterDiff4Pole40A = 45.03;
    // $InterDiff4Pole63A = 70.62;
    $InterDiff4Pole2A = 157.10;
    $InterDiff4Pole6A = 124.17;
    $CacheCoffret = 8.38;
    // $FiletDeSecurite = 10.35;
    $IctaDiam25 = 0.58;
    $IctaDiam50 = 1.24;
    // $IctaDiam63 = "?";
    $IrlTulip25 = 1.31;
    $CoudeDiam25 = 2.92;
    $GoulotteElec = 12.65;
    // $GoulotteIvoire = 13.95;
    $PiquetDeTerre = 8.02;
    // $RepartiteurDeTerre = 8.30;
    $BaretteDeCoupure = 9.32;
    $RepartiteurBipolaire = 16.68;
    $RepartiteurTetrapolaire = 32.98;
    $CableGen1 = $Cable7g1 + $Cable3g1 + $Cable4g1 + $Cable3g2 + $Cable5g2 + $Cable3g4 + $Cable5g4 + $Cable3g6 + $Cable5g6 + $Cable3g10 + $Cable5g10 + $Cable6mm2Terre + $Cable10mm2Terre + $Cable16mm2Terre;
    // $CableGen2 = $Cable0_75mm2 + $CableBleu6mm2 + $CableRouge6mm2 + $CableBleu10mm2 + $CableRouge10mm2 + $CableBleu16mm2 + $CableRouge16mm2;
    $Coffret = $Boite80x80 + $Tableau6Module + $Tableau8Module + $Tableau13Module + $PriseApplique + $PriseModulaire;
    $DisjoncteurGen1 = $Disjoncteur2A + $Disjoncteur10A + $Disjoncteur16A + $Disjoncteur20A + $Disjoncteur25A + $Disjoncteur32A + $Disjoncteur40A;
    $DisjoncteurGen2 = $InterDiffAC40A + $InterDiffAC20A + $InterDiffAC63A + $Disjoncteur4Pole16A + $Disjoncteur4Pole20A + $Disjoncteur4Pole25A +  /* $InterDiff4Pole40A */ +  /* $InterDiff4Pole63A */ + $InterDiff4Pole2A + $InterDiff4Pole6A;
    $Gaine = $CacheCoffret + /* $FiletDeSecurite */ + $IctaDiam25 + $IctaDiam50 + $IrlTulip25 + $CoudeDiam25 + $GoulotteElec + /* $GoulotteIvoire */ + $PiquetDeTerre + /* $RepartiteurDeTerre */ + $BaretteDeCoupure + $RepartiteurBipolaire + $RepartiteurTetrapolaire;
    $Result = $CableGen1 + /* $CableGen2  */ + $Coffret + $DisjoncteurGen1 + $DisjoncteurGen2 + $Gaine;
    return $Result;
}
function FournisseurCged()
{
    //Prix Professionnel
    $Cable7g1 = 1.20;
    $Cable3g1 = 0.75;
    $Cable4g1 = 1.30;
    $Cable3g2 = 1.36;
    $Cable5g2 = 2.23;
    $Cable3g4 = 2.19;
    $Cable5g4 = 3.55;
    $Cable3g6 = 3.28;
    $Cable5g6 = 2.73;
    $Cable3g10 = 5.23;
    $Cable5g10 = 8.84;
    $Cable6mm2Terre = 1;
    $Cable10mm2Terre = 1.76;
    $Cable16mm2Terre = 2.90;
    // $Cable0_75mm2 = 0.57;
    $CableBleu6mm2 = 0.99;
    $CableRouge6mm2 = 0.99;
    $CableBleu10mm2 = 1.72;
    $CableRouge10mm2 = 1.72;
    $CableBleu16mm2 = 2.72;
    $CableRouge16mm2 = 2.72;
    $Boite80x80 = 1.10;
    // $Tableau6Module = 6.10;
    // $Tableau8Module = 8.10;
    // $Tableau13Module = 9.81;
    $PriseApplique = 5.75;
    $PriseModulaire = 12.02;
    $Disjoncteur2A = 12.50;
    $Disjoncteur10A = 7.59;
    $Disjoncteur16A = 7.59;
    $Disjoncteur20A = 7.59;
    $Disjoncteur25A = 20.66;
    $Disjoncteur32A = 10.50;
    $Disjoncteur40A = 24.69;
    $InterDiffAC40A = 40.99;
    $InterDiffAC20A = 111.94;
    $InterDiffAC63A = 304.77;
    $Disjoncteur4Pole16A = 89;
    $Disjoncteur4Pole20A = 89.80;
    $Disjoncteur4Pole25A = 100.63;
    // $InterDiff4Pole40A = 45.03;
    // $InterDiff4Pole63A = 70.62;
    $InterDiff4Pole2A = 146.61;
    $InterDiff4Pole6A = 115.87;
    $CacheCoffret = 6.64;
    // $FiletDeSecurite = 10.35;
    $IctaDiam25 = 0.66;
    // $IctaDiam50 = 0.46;
    // $IctaDiam63 = "?";
    $IrlTulip25 = 3.19;
    // $CoudeDiam25 = 0.49;
    $GoulotteElec = 35.14;
    $GoulotteIvoire = 7.87;
    $PiquetDeTerre = 5.61;
    $RepartiteurDeTerre = 13.83;
    $BaretteDeCoupure = 6.20;
    $RepartiteurBipolaire = 14.32;
    $RepartiteurTetrapolaire = 31.94;
    $CableGen1 = $Cable7g1 + $Cable3g1 + $Cable4g1 + $Cable3g2 + $Cable5g2 + $Cable3g4 + $Cable5g4 + $Cable3g6 + $Cable5g6 + $Cable3g10 + $Cable5g10 + $Cable6mm2Terre + $Cable10mm2Terre + $Cable16mm2Terre;
    $CableGen2 = /* $Cable0_75mm2 */ + $CableBleu6mm2 + $CableRouge6mm2 + $CableBleu10mm2 + $CableRouge10mm2 + $CableBleu16mm2 + $CableRouge16mm2;
    $Coffret = $Boite80x80 + /* $Tableau6Module */ + /* $Tableau8Module */ + /* $Tableau13Module */ + $PriseApplique + $PriseModulaire;
    $DisjoncteurGen1 = $Disjoncteur2A + $Disjoncteur10A + $Disjoncteur16A + $Disjoncteur20A + $Disjoncteur25A + $Disjoncteur32A + $Disjoncteur40A;
    $DisjoncteurGen2 = $InterDiffAC40A + $InterDiffAC20A + $InterDiffAC63A + $Disjoncteur4Pole16A + $Disjoncteur4Pole20A + $Disjoncteur4Pole25A +  /* $InterDiff4Pole40A */ +  /* $InterDiff4Pole63A */ + $InterDiff4Pole2A + $InterDiff4Pole6A;
    $Gaine = $CacheCoffret + /* $FiletDeSecurite */ + $IctaDiam25 + /* $IctaDiam50 */ + $IrlTulip25 + /* $CoudeDiam25 */ + $GoulotteElec + $GoulotteIvoire + $PiquetDeTerre + $RepartiteurDeTerre + $BaretteDeCoupure + $RepartiteurBipolaire + $RepartiteurTetrapolaire;
    $Result = $CableGen1 + $CableGen2 + $Coffret + $DisjoncteurGen1 + $DisjoncteurGen2 + $Gaine;
    return $Result;
}
/* function Fournisseur123Elec()
{
    
    return
} */
function FournisseurOption1()
{
    $Yesss = FournisseurYesss();
    $Rexel = FournisseurRexel();
    $Cged = FournisseurCged();

    if ($Yesss < $Rexel && $Yesss < $Cged)
    {
        return "https://www.yesss-fr.com/yessspro3/accueil";
    }
    elseif ($Rexel < $Yesss && $Rexel < $Cged)
    {
        return "https://www.rexel.fr/frx/?gclid=Cj0KCQjwn4qWBhCvARIsAFNAMijc41ysOAqLxHY5f-QHqzXoQSqIkYngmQS8mA3qGht-kh7akazDUD0aAsytEALw_wcB";
    }
    elseif ($Cged < $Yesss && $Cged < $Rexel)
    {
        return "https://www.cged.fr/INTERSHOP/web/WFS/Sonepar-CGED-Site/fr_FR/cged-private/EUR/ViewUserAccount-Start";
    }
    else
    {
        return "Error";
    }
}
function FournisseurOption2()
{
    $Rexel = FournisseurRexel();
    $Cged = FournisseurCged();

    if ($Cged < $Rexel)
    {
        return "https://www.cged.fr/INTERSHOP/web/WFS/Sonepar-CGED-Site/fr_FR/cged-private/EUR/ViewUserAccount-Start";
    }
    elseif ($Rexel < $Cged)
    {
        return "https://www.rexel.fr/frx/?gclid=Cj0KCQjwn4qWBhCvARIsAFNAMigmS3nKOJ_CZv9jkPBSzMnV16s6gA-WEGb7VfWq7hDx1cWXUGacDKkaAkq0EALw_wcB";
    }
    else
    {
        return "Error";
    }
}

?>