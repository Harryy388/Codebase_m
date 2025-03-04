<?php
date_default_timezone_set("Europe/Amsterdam ");

while (true) {

    $tijd = date("H:i:s");


echo "\033[2J\033[;H";

echo "huidge tijd is: " .  $tijd . "\n";

sleep(1);

}
