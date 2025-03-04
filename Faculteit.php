<?php
Echo "Van welk getal wil je de faculteit berekenen : " ;
$faculteit = trim(fgets(STDIN)) ;
$einde = 1 ;

for ($i = 1 ; $i <= $faculteit ; $i++ ){
    $einde *= $i ;
 
}
if ($faculteit == 0){
    echo "Je kan 0 niet in een faculteit zetten" ;
}
echo $einde . "\n" ;
