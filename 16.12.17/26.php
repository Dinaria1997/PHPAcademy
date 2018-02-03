<?php
    $arr = [rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100)];
    $c = 1;
    foreach ($arr as $b){
        if ($b>0 and $b % 2 ==0){
            $c = $c * $b;
        }elseif ($b>0 and $b % 2 !==0){
            echo $b.'<br>';
        }
    }