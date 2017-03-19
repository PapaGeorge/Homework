<?php
$name = "George";
$age = 34;
if ($age > 18 && $age <= 59) {
    echo "Вам еще работать и работать";
} elseif ($age > 59) {
    echo "Вам пора на пенсию";
} elseif (!is_numeric($age) or $age <= 0){
    echo "Неизвестный возраст";
} elseif ($age > 0 && $age < 18) {
    echo "Вам еще рано работать";
}
?>