<?php

$arr = array("Banana", "Abacaxi", "Abacate", "Morango");
$iter = new ArrayIterator($arr);

// loop through the object
foreach ($iter as $key => $value) {
    echo $key . ":  " . $value . "<br>";
}

$iter->rewind();
echo 'O primeiro - '. $iter->current();
