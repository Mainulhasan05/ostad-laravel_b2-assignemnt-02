<!-- Looping with Increment using a Function -->
<?php
function IncrementUsingFor($start, $end){
    for($i = $start; $i <= $end; $i++){
        printNumber($i, $end);
    }
}

function IncrementUsingWhile($start, $end){
    $i = $start;
    while($i <= $end){
        printNumber($i, $end);
        $i++;
    }
}

function IncrementUsingDoWhile($start, $end){
    $i = $start;
    do{
        printNumber($i, $end);
        $i++;
    }while($i <= $end);
}
function printNumber($num,$end){
    if($num < $end){
        echo $num . ", ";
    }
    else{
        echo $num . ".\n";
    }
}

IncrementUsingFor(1,20);
IncrementUsingWhile(1,20);
IncrementUsingDoWhile(1,20);