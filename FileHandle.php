<?php

$path = new DirectoryIterator(dirname(__FILE__).'/files');
   
foreach (new LimitIterator($path, 2, 1) as $file) {
    $file->openFile('w')->fwrite('foo');
}


$file = new SplFileObject(dirname(__FILE__).'/files/read.html');

foreach ($file as $line_num => $line) {
    echo "Line $line_num is $line<br/>";
}