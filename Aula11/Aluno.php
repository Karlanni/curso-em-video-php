<?php

/**
 * Description of Aluno
 *
 * @author KarlanniCristina
 */
require_once 'Pessoa.php';

//final class  Aluno extends Pessoa {
class Aluno extends Pessoa {
    
    // Herança para Diferença

    private $matricula;
    private $curso;

//    public final function pagarMensalidade() {
    public function pagarMensalidade() {
        echo 'Pagando mensalidade do aluno'. $this->getNome();
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
        return $this;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
        return $this;
    }

}
