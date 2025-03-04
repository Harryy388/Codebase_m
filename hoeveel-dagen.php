<?php
$dag = readline("Voer een dag in : ");

$maand = readline("Voer een maand in : ");

$jaar = readline("Voer een jaar in : ") ;

$date = DateTime::createFromFormat("d/m/Y" , "$dag/$maand/$jaar" ) ;
$currentdate = new DateTime () ;

if ($date === false){
    echo "Je moet wel een echte datum doen" . "\n";
}
else {
$verschil = $date -> diff($currentdate) ;

echo "De verschil met dagen van " . $date-> format("d/m/Y") . " tot vandaag is ".  $verschil->days. " dagen". "\n" ;
}

