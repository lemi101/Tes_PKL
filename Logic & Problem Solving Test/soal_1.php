<?php

function hashtags($n){
    for ($i = 0; $i < $n; $i++) { 
        echo('#');
    }
}

function spaces($n){
    for ($i = 0; $i < $n; $i++) { 
        echo(' ');
    }

}

function ladder($n){
    echo('n = '.$n."\r\n"."\r\n");

    for ($i = 0; $i < $n; $i++) { 
        spaces($n - ($i + 1));
        hashtags($i + 1);
        echo("\r\n");
    }
}

$n = 4;

echo('<pre>');

ladder($n);

echo('</pre>');
?>
