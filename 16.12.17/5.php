<?php
$arr = array('Коля' => 200, 'Вася' => 300, 'Петя' => 400);
    foreach ($arr as $key => $value){
        $b = $key . " — зарплата " . $value . " долларов.";
        echo $b;
        echo '<br>';
    }