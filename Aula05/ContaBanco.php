<?php

class ContaBanco {

    public $numero;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo 'Conta criada com sucesso!';
    }

    function getMumero() {
        return $this->numero;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDono() {
        return $this->dono;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function getStatus() {
        return $this->status;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setDono($dono) {
        $this->dono = $dono;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    public function abrirConta($tipo) {
        $this->setTipo($tipo);
        $this->setStatus(true);
        if ($this->getTipo() == "cc") {
            $this->setSaldo(50);
        } elseif ($this->getTipo() == "cp") {
            $this->setSaldo(150);
        }
    }

    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo 'Conta ainda tem dinheiro. Zere a conta antes de fechar!';
        } elseif ($this->getStatus() < 0) {
            echo 'Conta em débito. Você não pode encerrá-la';
        } else {
            $this->setStatus(false);
            echo 'Conta encerrada com sucesso!';
        }
    }

    public function depositar($v) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
        } else {
            echo 'Conta fechada, não é possível depositar!';
        }
        echo '<p>Depósito no valor de'.$v. 'na sua conta' .$this->getDono().'</p>';
    }

    public function sacar($v) {
        if ($this->getStatus()) {
            if ($this->getSaldo() > $v) {
                $this->setSaldo($this->getSaldo() - $v);
            } else {
                echo 'Saldo insuficiente para saque';
            }
        } else {
            echo 'Não posso sacar de uma conta fechada';
        }
        
        echo '<p>Saldo autorizado no valor de'.$v. 'na sua conta'. $this->getDono().'</p>';
    }

    public function pagarMensalidade() {
        if ($this->getTipo() == 'cc') {
            $v = 12;
        } else if ($this->getTipo() == 'cp') {
            $v = 20;
        }
        if ($this->getStatus() == true) {
            $this->setStatus($this->getSaldo() - $v);
        }else{
            echo 'Error com a conta!';
        }
    }

}
