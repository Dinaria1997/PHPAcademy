<?php
    $arr = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
    foreach ($arr as $day){
        if ($day == 'thursday'){
            echo "<i>$day</i><br>";
        }else {
            echo $day.'<br>';
        }
    }