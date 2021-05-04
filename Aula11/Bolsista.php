<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bolsista
 *
 * @author KarlanniCristina
 */
require_once 'Aluno.php';

class Bolsista extends Aluno {

    private $bolsa;

    public function renovarBolsa() {
        echo 'Bolsa renovada';
    }

    public function pagarMensalidade() {
        echo $this->getNome().' é bolsista! Então pague com desconto.';
    }

    public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
        return $this;
    }

}
