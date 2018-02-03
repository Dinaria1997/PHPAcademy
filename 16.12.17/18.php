<?php
    $arr = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
    foreach ($arr as $day){
        if ($day=='saturday' or $day=='sunday'){
            echo '<b>'.$day.'</b><br>';
        }else{
            echo $day.'<br>';
        }
    }