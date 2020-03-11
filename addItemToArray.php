<?php

$fruit = ['appel', 'banaan'];
$item = 'mandarijn';

function addItemToArray($array, $item){
    $array[] = $item;
    return $array;
}

function addItemToArray2(&$array, $item){
    $array[] = $item;
    return $array;
}

$fruitmand = addItemToArray($fruit, $item);
var_dump($fruitmand);
var_dump($fruit);

$fruitmand = addItemToArray2($fruit, $item);
var_dump($fruitmand);
var_dump($fruit);


