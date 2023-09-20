<?php
function printFibo($n){
    $first = 0;
    $second = 1;
    $next = 0;
    for($i=0; $i<$n; $i++){
        if($i<=1){
            $next = $i;
        }else{
            $next = $first + $second;
            $first = $second;
            $second = $next;
        }
        if($next > 100){
            break;
        }
        echo $next . ", ";
    }
    echo "\n";
}
printFibo(100);