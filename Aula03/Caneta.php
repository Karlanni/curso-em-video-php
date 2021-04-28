<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Caneta
 *
 * @author KarlanniCristina
 */
class Caneta {

    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar() {
        if ($this->tampada == true) {
            echo 'Erro! Não posso rabiscar';
        } else {
            echo 'Estou rabiscando...';
        }
    }

    private function tampar() {
        $this->tampada = true;
    }

    private function destampar() {
        $this->tampada = false;
    }

}
