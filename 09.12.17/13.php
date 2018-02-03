<?php
$name = 'Диана';
$age = 20;
echo "Меня зовут: $name";
echo '<br>';
echo "Мне $age лет";
echo '<br>';
if (($age <=59) && ($age >18)) {
    echo 'Вам еще работать и работать';
    echo '<br>';
} elseif ($age >59) {
    echo 'Вам пора на пенсию';
    echo '<br>';
} elseif (($age <=17) && ($age >=0)) {
    echo 'Вам еще рано работать';
    echo '<br>';
} elseif (($age <0)(!is_numeric($age))) {
    echo 'Неизвестный возраст';
    echo '<br>';
}
$day = 15;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Это рабочий день';
        break;
    case 6:
    case 7:
        echo 'Это выходной день';
        break;
    default:
        echo 'Неизвестный день';
        break;
}
echo '<br>';
$s = 150;
$t = 3;
$n = $s / $t;
$d = $s * 1000;
$f = $t * 360;
$c = $d / $f;
echo "$n км/час";
echo '<br>';
echo "$c м/с";
echo '<br>';

$foo = 'bar';
$bar = 10;
echo $$foo;
?>