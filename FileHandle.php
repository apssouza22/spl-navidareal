<?php
//escrevendo arquivos
$path = new DirectoryIterator(dirname(__FILE__).'/files');  
foreach (new LimitIterator($path, 2, 1) as $file) {
    $file->openFile('w')->fwrite('writed 1');
}

//todos os arquivos q comecem com a letra a
$dir = dirname(__FILE__).'/files/a*.*';
$files = new GlobIterator($dir);
foreach ($files as $file) {
    echo $file->getPathname() . '<br>';
}

$file = new SplFileObject(dirname(__FILE__).'/files/read.html');

foreach ($file as $line_num => $line) {
    echo "Line $line_num is $line<br/>";
}