
<?php
$gewichten = [9, 8, 7, 6, 5, 4, 3, 2, 1,] ;
$som = 0 ;

echo "Voer je Bankrekeningnummer, typ 0 als je de programma wilt stoppen : " ;
$bankrekeningnummer = trim(fgets(STDIN)) ;

if ($bankrekeningnummer == 0){
    echo "Programma gestopt " ;
    exit;
}

if (strlen($bankrekeningnummer) !== 9 ) {  
    echo "Je bankrekeningnummer klopt niet, het moet precies 9 cijfers zijn.\n";  
    exit;  
}

for($i = 0 ; $i < 9 ; $i++){
    $som += $bankrekeningnummer[$i] * $gewichten[$i] ;
}

$rest = $som % 11 ;

echo "int rest = ". $rest . "\n" ;

if ($rest == 0) {  
    echo "$bankrekeningnummer is een correct banknummer."  ;  
} else {  
    echo "$bankrekeningnummer is geen correct banknummer." ;  
}  


