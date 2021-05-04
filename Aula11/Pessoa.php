<?php

/**
 * Description of Pessoa
 *
 * @author KarlanniCristina
 */
abstract class Pessoa {
    
    //Classe abstrata nõa pode virar objeto

    protected $nome;
    protected $idade;
    protected $sexo;

    public function fazerAniversario() {
        $this->idade++;
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

}
