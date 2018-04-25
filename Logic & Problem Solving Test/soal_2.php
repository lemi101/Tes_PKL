<?php

function get_second_biggest($arr){
    rsort($arr);
  
    $res = $arr[1];
    
    echo($res);
}

$arr = [5, 5, 1, 6, 4, 3];

get_second_biggest($arr);

?>