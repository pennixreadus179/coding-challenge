<?php
function reverseArray($arr) {
    $reversed = array();
    foreach ($arr as $value) {
        $reversed[] = $value;
    }
    return $reversed;
}

$myArray = [1, 2, 3, 4, 5];
$result = reverseArray($myArray);
print_r($result);
?>
