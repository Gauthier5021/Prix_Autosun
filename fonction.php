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
    $SqlPrixElec = $db->query("SELECT prix, lien FROM Elec_Yesss");
    
    while ($Result = $SqlPrixElec->fetch())
    { 
        $ResultPrixElec = $Result['prix'];
        $ResultLienElec = $Result['lien'];
        echo $ResultPrixElec, " ", "<a href='$ResultLienElec' class='LienYesss' >Cliquez Ici</a><br />";
    }
}
elseif ($_POST['FournisseurElec'] == "Rexel")
{
    $SqlPrixElec = $db->query("SELECT prix FROM Elec_Rexel");
    
    while ($Result = $SqlPrixElec->fetch())
    { 
        $ResultPrixElec = $Result['prix'];
        $ResultLienElec = $Result['lien'];
        echo $ResultPrixElec, " ", "<a href='$ResultLienElec'>Cliquez Ici</a><br />";
    }
}
elseif ($_POST['FournisseurElec'] == "Cged")
{
    $SqlPrixElec = $db->query("SELECT prix FROM Elec_Cged");
    
    while ($Result = $SqlPrixElec->fetch())
    { 
        $ResultPrixElec = $Result['prix'];
        $ResultLienElec = $Result['lien'];
        echo $ResultPrixElec, " ", "<a href='$ResultLienElec'>Cliquez Ici</a><br />";
    }
}
elseif ($_POST['FournisseurElec'] == "123Elec")
{
    $SqlPrixElec = $db->query("SELECT prix FROM Elec_123Elec");
    
    while ($Result = $SqlPrixElec->fetch())
    { 
        $ResultPrixElec = $Result['prix'];
        $ResultLienElec = $Result['lien'];
        echo $ResultPrixElec, " ", "<a href='$ResultLienElec'>Cliquez Ici</a><br />";
    }
}

//Somme Yesss
$SommeYesss = $db->query("SELECT SUM(prix) as somme FROM Elec_Yesss");

while ($Prix = $SommeYesss->fetch())
{
    $PrixYesss = round($Prix['somme'], PHP_ROUND_HALF_EVEN);
}

//Somme Rexel
$SommeRexel = $db->query("SELECT SUM(prix) as somme FROM Elec_Rexel");

while ($Prix = $SommeRexel->fetch())
{
    $PrixRexel = round($Prix['somme'], PHP_ROUND_HALF_EVEN);
}

// Somme Cged
$SommeCged = $db->query("SELECT SUM(prix) as somme FROM Elec_Cged");

while ($Prix = $SommeCged->fetch())
{
    $PrixRexel = round($Prix['somme'], PHP_ROUND_HALF_EVEN);
}

// Somme 123Elec
$SommeCged = $db->query("SELECT SUM(prix) as somme FROM Elec_123Elec");

while ($Prix = $SommeCged->fetch())
{
    $PrixRexel = round($Prix['somme'], PHP_ROUND_HALF_EVEN);
}

// Test Display

?>