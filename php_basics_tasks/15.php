<?php
$a = 8;
$b = 5;
$operator = "%";
if ($operator == "+") {
    echo $a + $b;
} elseif ($operator == "-") {
    echo $a - $b;
} elseif ($operator == "*") {
    echo $a * $b;
} elseif ($operator == "/") {
    if ($b != 0) {
        echo $a / $b;
    }
    else {
        echo "На ноль делить нельзя!";
    }
} elseif ($operator == "%") {
    echo $a % $b;
}
?>