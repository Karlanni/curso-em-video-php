<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa
 *
 * @author KarlanniCristina
 */
abstract class Pessoa {

    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
    }

    protected function ganharExp($exp) {
        $this->experiencia += $exp;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getExperiencia() {
        return $this->experiencia;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
        return $this;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
        return $this;
    }

    public function setExperiencia($experiencia) {
        $this->experiencia = $experiencia;
        return $this;
    }

}
