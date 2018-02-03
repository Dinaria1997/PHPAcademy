<?php
$name = 'Диана';
$age = 20;
echo "Меня зовут: $name";
echo "Мне $age лет";
if (($age <=59) && ($age >18)) {
    echo 'Вам еще работать и работать';
} elseif ($age >59) {
    echo 'Вам пора на пенсию';
} elseif (($age <=17) && ($age >=0)) {
    echo 'Вам еще рано работать';
} elseif (($age <0)(!is_numeric($age))) {
    echo 'Неизвестный возраст';
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
}
?>