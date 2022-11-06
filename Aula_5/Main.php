<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Main
 *
 * @author Usuario
 */
require_once 'Conta.php';


$p1 = new Conta();
$p1->setDono('Jubileu');
$p1->abrirConta('CC');
$p1->setNumconta(1111);
$p1->depositar(300);
$p1->sacar(100);
$p1->pagarMensal();

$p2 = new Conta();
$p2->setDono('Creuza');
$p2->abrirConta('CP');
$p2->setNumconta(2222);
$p2->depositar(500);
$p2->sacar(200);
$p2->pagarMensal();

print_r($p1);
echo '</br>';
print_r($p2);

