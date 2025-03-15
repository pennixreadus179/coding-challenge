
<?php
function getRandomColor() {
    $colors = array('red', 'green', 'blue', 'yellow');
    return $colors[array_rand($colors)];
}
?>