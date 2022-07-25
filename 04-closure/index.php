<?php 

$name = 'Deige'; 

$closure = function ($n) {
    echo $n;
}; 

$closure($name); 

var_dump($closure); 