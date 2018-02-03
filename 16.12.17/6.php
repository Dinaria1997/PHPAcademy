<?php
    $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
    $ru = [];
    $en = [];
    foreach ($arr as $key => $value){
       array_push($ru, $value);
       array_push($en, $key);
    }
        echo '<pre>';
        print_r($ru);
        print_r($en);