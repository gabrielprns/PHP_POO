<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Usuario
 */
interface Controlador {
    public abstract function ligar();
    public abstract function desligar();
    public abstract function abrirMenu();
    public abstract function fecharMenu();
    public abstract function maisVolume();
    public abstract function menosVolume();
    public abstract function ligarMudo();
    public abstract function desligarMudo();
    public abstract function play();
    public abstract function pause();
}
