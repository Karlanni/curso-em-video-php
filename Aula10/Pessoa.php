<?php

/**
 * Description of Pessoa
 *
 * @author KarlanniCristina
 */
class Pessoa {

    private $nome;
    private $idade;
    private $sexo;

    public function fazerAniversario() {
        $this->idade++;
    }

    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    function setIdade($idade) {
        $this->idade = $idade;
        return $this;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
        return $this;
    }

}
