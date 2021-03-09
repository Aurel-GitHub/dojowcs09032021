<?php
include("header.php");
// Daniela écrit Aurélien dicte

$porteur  = "Frodon";
$createur = "Sauron";
$menbresDeLaCompagnie = 7;
$anneauAuDoigt = true;

$porteur = "John Doe";
echo $porteur . ' porte actuellement l\'anneau';
// thierry  écrit Vanessa dicte
$menbresDeLaCompagnie++;
echo "$membresDeLaCompagnie";
// vanessa ecrit aurélien dicte
/**
 *  TODO => bug ici
 */
$middleEarth;
$middleEarth = "";
echo $middleEarth;

// Aurélien écrit Daniela dicte 
echo
$phrase = " Le porteur est : " . $porteur;
$phrase .= " et " . $createur . " le recherche";
echo $phrase;
$variable = strtoupper($phrase);
echo $variable;

//Thierry dicte et Vanessa écrit
echo strtoupper($createur);

include("footer.php"); // ça marche
// include("wizard.php");

$wizard = 'Gandalf';

require 'wizard.php'; 
 