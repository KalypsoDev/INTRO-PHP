<?php
$myName = "Ángela";
$kidAge = "10";
$myAge = $kidAge + 24;
$myNumber = 13;
$myBoolean = true;
$myFloat = 65.5;
$myInt = 65;
$nullVar = null;
$undefinedVar;

$myVariable = 34;
const MY_CONST = 1989;
define("MY_DOG1", "Rocky");
const MY_DOG2 = "Sira";

var_dump($myAge);
$kidAge2 = (int) $kidAge;
var_dump($kidAge);
var_dump($kidAge2);
var_dump($myAge);
$mySentence = "My name is " . $myName . " and my favourite number is $myNumber";
