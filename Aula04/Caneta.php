<?php

/**
 * Description of Caneta
 *
 * @author KarlanniCristina
 */
class Caneta {

    public $modelo;
    public $cor;
    private $ponta;

    //protected $carga;
    //protected $tampada;
    
    public function __construct($m, $c, $p) { //Método construtor pode ter o mesmo nome da Classe. ex.: publica function Caneta(){}
        $this->modelo=$m;
//        $this->setModelo($modelo)
        $this->cor = $c;
//        $this->setCor($cor);
        $this->ponta = $p;
//        $this->setPonta($ponta);
        $this->tampar();
    }
    function getCor() {
        return $this->cor;
    }

    function setCor($cor){
        $this->cor = $cor;
    }

        function getModelo() {
        return $this->modelo;
    }

    function getPonta() {
        return $this->ponta;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setPonta($ponta) {
        $this->ponta = $ponta;
    }

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
