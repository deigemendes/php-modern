<?php

$array = [1,2,3,4,5]; 

$teste2 = (array_map(fn($value): int => $value * 2, $array)); 

print_r($teste2); 

