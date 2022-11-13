<?php

function show_numbers(int $n, string $m): string 
{
    return "the number {$n} in english is {$m}"; 
}

$numbers = [0,1,2,3]; 
$text = ['zero','one','two', 'three'];

$description = array_map('show_numbers', $numbers, $text ); 

print_r($description); 