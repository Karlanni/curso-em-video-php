<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Luta
 *
 * @author KarlanniCristina
 */
require_once 'Lutador.php';

class Luta {

    private $desafiante;
    private $desafiado;
    private $rounds;
    private $aprovada;

    public function marcarLuta($l1, $l2) {
        if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
//            echo 'v';
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
//            echo 'f';
        }
    }

    public function lutar() {
        if ($this->aprovada) {

            $this->desafiado->apresentar();
            $this->desafiante->apresentar();

            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0: // Emparte
                    echo '<p>----------------</p>';
                    echo '<p>Empate</p>';
                    $this->desafiado->empatar();
                    $this->desafiante->empatar();
                    break;
                case 1: // Desafiado vence
                    echo '<p>E o vencedor é: ' . $this->desafiado->getNome() . '</p>';
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();

                    break;
                case 2: // Desafiante vence
                    echo '<p>----------------</p>';
                    echo '<p>E o vencedor é: ' . $this->desafiante->getNome() . '</p>';
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        } else {
            echo '<p>Luta não pode acontecer!</p>';
        }
    }

    function getDesafiante() {
        return $this->desafiante;
    }

    function getDesafiado() {
        return $this->desafiado;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovada() {
        return $this->aprovada;
    }

    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
        return $this;
    }

    function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
        return $this;
    }

    function setRounds($rounds) {
        $this->rounds = $rounds;
        return $this;
    }

    function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
        return $this;
    }

}
