<?php
$a = [4, 2, 5, 19, 13, 0, 10];
    foreach ($a as $e){
        if ($e == 2 || $e == 3 || $e == 4){
            echo 'Ecть!';
            exit();
    }else{
        echo 'Нет!';
        }
    }