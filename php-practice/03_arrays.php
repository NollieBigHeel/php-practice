<?php
/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/

// Simple array
$numbers = [1, 2, 3, 4, 5];
$fruits = array('apple', 'orange', 'kiwi');

//print_r($numbers);
//var_dump($fruits);

// echos orange
//echo $fruits[1];

// Associative array - Mainly used for Tabula data( blog post, users)
$colors = [
//  key   value
    1 => 'red',
    4 => 'blue',
    6 => 'green',
];
//echo $colors[4];

$hex = [
  'red' => '#f00',
  'blue' => '#0f0',
  'green' => '#00f'
];

//echo $hex['blue'];

$person = [
  'firstName' => 'Brad',
  'lastName' => 'Smith',
  'email' => 'bradsmith@email.com'
];
//echo " Hello ${person['firstName']} ${person['lastName']}";

// Multidimensional arrays - arrays in arrays(used mainly to turn to an array of json objects)


$people = [
  [
  'firstName' => 'Brad',
  'lastName' => 'Smith',
  'email' => 'bradsmith@email.com'
],
[
  'firstName' => 'John',
  'lastName' => 'Doe',
  'email' => 'johndoe@email.com'
],
[
  'firstName' => 'Jayne',
  'lastName' => 'Payne',
  'email' => 'jaynepayne@email.com'
]
];

//echo $people[1]['email']; // Gets the second persons email

//JSON encode
var_dump(json_encode($people));

/*json decode useed if you have an JSON object and need to decode it to php

var_dump(json_decode($))
*/


  

