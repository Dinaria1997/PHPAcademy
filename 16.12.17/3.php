<?php
$a = array(26, 17, 136, 12, 79, 15);
$result = 0;
    foreach($a as $z){
        $result = $z * $z +$result;
    }echo $result;