<?php


function addItemToArray($array, $item) {
    $array1 = $array;
    $array1[] = $item;
    return $array1;
}
print_r(addItemToArray(['apple', 'pear'], 'melon9'));


function addItemToArray2($array, $item) {
    $array[] = $item;
    return $array;
}
print_r(addItemToArray2(['apple', 'pear', 'banana', 'mango'], 'melon9')); 