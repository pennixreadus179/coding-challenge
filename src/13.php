<?php

function getRandomNumber($min, $max) {
    return mt_rand($min, $max);
}

$random = getRandomNumber(1, 100);
echo "The random number is: $random";

?>
