<?php

//tem que testar tudo isso


$db = new PDO($dsn, $dbUsername, $dbPassword);

$stmt = $db->query('SELECT * FROM party_member');
$result = $stmt->fetchAll(PDO::FETCH_CLASS, 'PartyMember');

$partyCollection = new ArrayObject($result);

foreach ($partyCollection as $member) {
    echo $member->getName() . "\n";
}

$arr = array("sitepoint", "phpmaster", "buildmobile", "rubysource",
    "designfestival", "cloudspring");
 
// create a new ArrayIterator and pass in the array
$iter = new ArrayIterator($arr);
 
// loop through the object
foreach ($iter as $key => $value) {
    echo $key . ":  " . $value . "<br>";
}