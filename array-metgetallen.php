<?php
$vergelijkingsgetal = 56;
$array = [];

for ($x = 0; $x <= 20; $x++) {

    $array[] = rand(0, 500);
}
foreach ($array as $getal) {
    echo "$waarde \n ";
}

echo "en nu word  erbij gezet \n";

if ($array > 56) {
    $patat = $waarde + 10;
    echo $patat . "\n";
}
if ($array < 56) {
    $kaas = $waarde - 5;
    echo $kaas . "\n";
}
