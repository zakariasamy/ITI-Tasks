<?php

// task 7
function factorial($num){
    if($num <= 0)
        return false;
        
    $fac = 1;
    for($i=2; $i<=$num; $i++)
        $fac*=$i;

    return $fac;
}
echo factorial(5);

