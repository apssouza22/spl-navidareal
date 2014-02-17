<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');
ini_set('display_startup_errors', 'On');


$dir = new DirectoryIterator(__DIR__);  
foreach ($dir as $file) {
    echo $file->getFilename().'<br>';
}

//retirando as pastas ./ e ../ da listagem
class DirectoryFilterDots extends FilterIterator
{
    public function __construct($path)
    {
        parent::__construct(new RecursiveDirectoryIterator($path));
    }

    public function accept()
    {
        return !$this->getInnerIterator()->isDot();
    }
}

$path = new DirectoryFilterDots(dirname(__FILE__));

foreach ($path as $file) {
    if($file->isDir()){
        echo '<b>diretorio</b> - ';
    }
    echo $file->getFilename() . '</br>';
}

