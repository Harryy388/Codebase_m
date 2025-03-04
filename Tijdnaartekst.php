<?php
// Huidige tijd ophalen
$huidigeTijd = date("H:i");
$uren = (int)date("H");
$minuten = (int)date("i");

// Basisarray voor uur en minuten
$urenNamen = [
    0 => 'twaalf',
    1 => 'één',
    2 => 'twee',
    3 => 'drie',
    4 => 'vier',
    5 => 'vijf',
    6 => 'zes',
    7 => 'zeven',
    8 => 'acht',
    9 => 'negen',
    10 => 'tien',
    11 => 'elf',
    12 => 'twaalf'
];

$minutenNamen = [
    1 => 'één',
    2 => 'twee',
    3 => 'drie',
    4 => 'vier',
    5 => 'vijf',
    6 => 'zes',
    7 => 'zeven',
    8 => 'acht',
    9 => 'negen',
    10 => 'tien',
    11 => 'elf',
    12 => 'twaalf',
    13 => 'dertien',
    14 => 'veertien',
    15 => 'kwart',
    16 => 'zestien',
    17 => 'zeventien',
    18 => 'achttien',
    19 => 'negentien',
    20 => 'twintig',
    21 => 'eenentwintig',
    22 => 'tweeëntwintig',
    23 => 'drieëntwintig',
    24 => 'vierentwintig',
    25 => 'vijfentwintig',
    26 => 'zesentwintig',
    27 => 'zevenentwintig',
    28 => 'achtentwintig',
    29 => 'negenentwintig'
];

// Tijd omzetten naar tekst
if ($minuten == 0) {
    $tijdTekst = $urenNamen[$uren % 12] . " uur ";
} elseif ($minuten == 15) {
    $tijdTekst = "kwart over " . $urenNamen[$uren % 12];
} elseif ($minuten == 30) {
    $tijdTekst = "half " . $urenNamen[($uren + 1) % 12];
} elseif ($minuten == 45) {
    $tijdTekst = "kwart voor " . $urenNamen[($uren + 1) % 12];
} elseif ($minuten < 30) {
    $tijdTekst = $minutenNamen[$minuten] . " over " . $urenNamen[$uren % 12];
} else {
    $minutenTot60 = 60 - $minuten;
    $tijdTekst = $minutenNamen[$minutenTot60] . " voor " . $urenNamen[($uren + 1) % 12];
}

// Resultaat weergeven
echo "$huidigeTijd : $tijdTekst\n";
