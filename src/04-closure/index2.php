<?php 

$closure = function() { 
    $ola = 'ola'; 

    return function() use ($ola) { 
        echo $ola.' mundo!'; 
    };
}; 

$a = $closure; 
$a(); 