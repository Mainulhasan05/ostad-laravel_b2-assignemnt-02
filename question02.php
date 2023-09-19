
<?php
// <!-- Task 2: Skip Multiples of 5 -->
function skipMulplesOfGivenValue($value){
    for($i=1; $i<=50; $i++){
        if($i % $value == 0){
            continue;
        }
        echo $i . ", ";
    }
    echo "\n";
}

skipMulplesOfGivenValue(5);