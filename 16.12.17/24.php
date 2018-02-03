<?php
    $arr = [442158755745];
    $d = 0;
    $w = 5;
    foreach ($arr as $i){
        $b = str_split($i);
        foreach ($b as $c){
            if ($c == $w){
                $d++;
            }
        }
    }echo $d;