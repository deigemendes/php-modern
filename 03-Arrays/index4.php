<?php 

$teste = array(
    'nome' => 'Deige', 
    'idade' => '35'
);

$teste2 = [1,2,3,4,5,6]; 

$frutas = array (
    "frutas" => array("a"=>"laranja", "b"=>"banana", "c"=>"maçã"),
    "numeros" => array(1, 2, 3, 4, 5, 6),
    "buracos" => array("primeiro", 5 => "segundo", "terceiro")
);

foreach($teste2 as $key => $value) {
    echo "{$key} => {$value} ";
}

//var_dump($frutas); 