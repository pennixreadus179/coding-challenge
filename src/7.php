  <?php
    $myArray = array(1, 2, 3);

    function getSum($arr) {
        $total = 0;
        foreach ($arr as $num) {
            $total += $num;
        }
        return $total;
    }

    echo getSum($myArray);
?>