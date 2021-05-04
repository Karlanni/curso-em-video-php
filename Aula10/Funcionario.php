<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Funcionario
 *
 * @author KarlanniCristina
 */
require_once 'Pessoa.php';

class Funcionario extends Pessoa {

    private $setor;
    private $trabalhando;

    public function mudarTrabalho($param) {
        
    }
    
    public function getSetor() {
        return $this->setor;
    }

    public function getTrabalhando() {
        return $this->trabalhando;
    }

    public function setSetor($setor) {
        $this->setor = $setor;
        return $this;
    }

    public function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
        return $this;
    }



}
