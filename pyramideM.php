<?php
      
$aantal_stapels = readline ("hoeveel stapels wil je hebben?");

if ($aantal_stapels == 1) {
    echo "Je hebt gekozen voor: 1 Stapel. \n";

} else {

    echo "Je hebt gekozen voor: $aantal_stapels Stapels. \n";

}

for($i = 1; $i <= $aantal_stapels; $i++) {    
    
    for($j = 1; $j <= $i; $j++) {

    echo "*";
    }
        echo "\n";
}








