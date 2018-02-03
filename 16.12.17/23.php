<?php
    $arr = [123];
    $d = 0;
    foreach ($arr as $i){
        $b = str_split($i);
        foreach ($b as $a){
            $d = $d + $a;

        }
    } echo $d;