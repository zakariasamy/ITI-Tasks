<?php

$stop = 5;

for($i = 1; $i<=$stop; $i++){
    for($j = 1; $j<=$i; $j++){
        echo "* ";
    }
    echo "<br>";
}
for($i = $stop; $i>=1; $i--){
    for($j = 1; $j<=$i; $j++){
        echo "* ";
    }
    echo "<br>";
}
