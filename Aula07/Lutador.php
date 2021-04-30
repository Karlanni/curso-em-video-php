<?php

/**
 * Description of Lutador
 *
 * @author KarlanniCristina
 */
class Lutador {

    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    public function apresentar() {
        echo '<p>----------------------</p>';
        echo '<p>Chegou a hora! O Lutador' . $this->getNome() . '<br />';
        echo '<p>Nacionalidade:' . $this->getNacionalidade() . '<br />';
        echo '<p>Idade:' . $this->getIdade() . '<br />';
        echo '<p>Altura:' . $this->getAltura() . '<br />';
        echo '<p>Pesando>:' . $this->getPeso() . 'kg<br />';
        echo '<p>Vitórias:' . $this->getVitorias() . '<br />';
        echo '<p>Derrotas:' . $this->getDerrotas() . '<br />';
        echo '<p>Empates:' . $this->getEmpates() . '</p>';
    }

    public function status() {
        echo '<p>----------------------</p>';
        echo '<p>' . $this->getNome();
        echo '<p>Pesando:' . $this->getPeso() . 'kg<br />';
        echo '<p>Categoria:' . $this->getCategoria(). '<br />';
        echo '<p>Vitórias:' . $this->getVitorias() . '<br />';
        echo '<p>Derrotas:' . $this->getDerrotas() . '<br />';
        echo '<p>Empates:' . $this->getEmpates() . '</p>';
    }

    public function ganharLuta() {

        $this->setVitorias($this->getVitorias() + 1);
//        $this->vitorias = $this->vitorias + 1;
    }

    public function perderLuta() {

        $this->setVitorias($this->getDerrotas() + 1);
    }

    public function empatar() {

        $this->setEmpates($this->getEmpates() + 1);
    }

    function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpates() {
        return $this->empates;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    function setCategoria() {
        if ($this->peso < 52.2) {
            $this->categoria = "Inválida";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválida";
        }
    }

    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates) {
        $this->empates = $empates;
    }

}
