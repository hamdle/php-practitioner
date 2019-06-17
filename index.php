<?php

$person = [
    'age' => 34,
    'hair' => 'brown',
    'career' => 'web developer'
];

$person['name'] = 'Eric';

// Remove from array
unset($person['age']);

// Normal array

$names = ['Eric', 'Marty'];
$names[] = 'Cat';

//die(var_dump($person));
// OR
var_dump($person);
die();

// No longer executed
echo $person['age'];

require 'index.view.php';