<?php

require_once 'Caneta.php';

$c1 = new Caneta("BIC",0.4,'Vermelho');



print("Temos uma caneta {$c1->getModelo()} com ponta {$c1->getPonta()}, cor {$c1->getCor()} e {$c1->tampar()}.");
//print_r($c1);