<?php
$db = new PDO("mysql:host=localhost; dbname=mysql; ", 'root', '5834');

$stmt = $db->query('SELECT * FROM help_keyword');
$result = $stmt->fetchAll(PDO::FETCH_CLASS, 'stdClass');

$collection = new ArrayObject($result);
echo 'Total - '. $collection->count() .  '<br>';
echo "Posição 10 - " .$collection->offsetGet(10)->name . '<br>';
foreach ($collection->getIterator() as $member) {
    echo $member->name . "<br>";
}


