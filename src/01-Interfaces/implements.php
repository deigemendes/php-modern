<?php

# classe_Analise Gerador 
require_once iAnalise.php; 

use iAnalise; 


class analiseGerador implements iAnalise {

public function getVariable($numero, $coletor)
{
    return 'teste';
}

public function getCalculo($valor)
{

    return 'teste'; 
}
}


$analise = new analiseGerador; 


