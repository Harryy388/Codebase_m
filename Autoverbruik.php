<?php 
$Litervoor = readline("Hoeveel liter in de tank voor de rit");
$Literna = readline("Hoeveel liter in de tank na de rit");
$KMstandvoor = readline("Hoeveel is de kilometer stand voor de rit");
$KMstandna = readline("Hoeveel is de kilometer stand na de rit");
Echo "Het gemiddelde gebruik van de auto tijdens de rit was : ";
Echo (100 * ($Litervoor - $Literna) / ($KMstandna - $KMstandvoor));