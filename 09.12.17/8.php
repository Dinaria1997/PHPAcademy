<?php
$name = 'Диана';
$age = '20test';
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
?>