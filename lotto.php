<?php
$trekking = [];
for ($i = 0; $i < 6; $i++) {
$random = rand(1, 42);
$trekking[] = $random; 
}

echo "Vul hier uw lotto cijfers in ↓↓↓" . "\n";
for ($i = 1; $i < 7; $i++) {
    while (true) {
    $input = readline("Geef lotto nummer $i: ");
    if(is_numeric($input) && !empty($input) && (int)$input >= 1 && (int)$input <=42){
        $gekozen_cijfers[] = $input;
       break; } else echo "Vul een geldig nummer in." . "\n";
    }
}   

sort($gekozen_cijfers);
sort($trekking);

if (count($gekozen_cijfers) == 6 ){ 
 echo "Uw gekozen nummers zijn " . implode(" ", $gekozen_cijfers) . "\n";
 echo "De trekking cijfers zijn: " . implode(" ", $trekking) . "\n";
}

$matches = array_intersect($gekozen_cijfers, $trekking);
$aantal_hetzelfde = $matches;

switch ($aantal_hetzelfde) {

case 3: $pijs = 10;
    break; 
case 4: $prijs = 1000;
    break;
case 5: $prijs = 100.000;
    break;
case 6: $prijs = 10000000;
    break;
default: $prijs = 0;
    break;
}

$prijs_format = number_format($prijs, 0, ',', '.');

echo "Je hebt €$prijs_format euro gewonnen!";