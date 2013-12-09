<?php

$path = new DirectoryIterator(dirname(__FILE__));
   
foreach (new LimitIterator($path, 1, 1) as $file) {
    echo $file . '</br>';
}

?>