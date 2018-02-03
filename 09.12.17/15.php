<?php
$a = 8;
$b = 0;
$operator = '%';
switch ($operator){
    case '+':
        echo $a + $b;
        break;
    case '-':
        echo $a - $b;
        break;
    case '*':
        echo $a * $b;
        break;
    case '%':
        if ($b == 0){
            echo 'Делить на 0 нельзя!';
        }else {
            echo $a % $b;
        }
        break;
    case '/':
        if ($b == 0){
            echo 'Делить на 0 нельзя!';
        }else {
           echo $a / $b;
        }
}
?>