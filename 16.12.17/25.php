<?php
    $arr = [rand(1, 100), rand(1, 100), rand(1,100), rand(1,100)];
    $max = 0;
    $min = 0;
    foreach ($arr as $d){
        if ($max < $d){
            $max = $d;
        }else{
            $min = $d;
        }
        if ($min > $d){
            $min = $d;
        }
    }echo $min;
    echo '<br>';
    echo $max;
    echo '<br>';
    $max = $max - $min;
    $min = $min + $max;
    $max = $min - $max;
    echo $min.'<br>'.$max;
