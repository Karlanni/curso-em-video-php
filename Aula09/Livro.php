<?php

//namespace Model;
//
//use Model\Pessoa;
//use Controller\Publicacao;

require_once 'Pessoa.php';
require_once 'Publicacao.php';

/**
 * Description of Livro
 *
 * @author KarlanniCristina
 */
class Livro implements Publicacao {

    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual = 0;
    private $aberto = false;
    private $leitor;

    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
    }

    function detalhes() {
        echo "Livro " . $this->titulo . " escrito por: " . $this->autor;
        echo '<br />Páginas> '. $this->totPaginas;
        echo '<br />Sendo lido por: ' . $this->leitor->getNome();
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPaginas() {
        return $this->totPaginas;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
        return $this;
    }

    function setAutor($autor) {
        $this->autor = $autor;
        return $this;
    }

    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
        return $this;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
        return $this;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
        return $this;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
        return $this;
    }

    public function abrir() {
        $this->aberto = true;
    }

    public function avancarPagina() {
        $this->pagAtual++;
    }

    public function fechar() {
        $this->aberto = false;
    }

    public function folhear($pag) {
        if ($pag > $this->totPaginas) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $pag;
        }
    }

    public function voltarPagina() {
        $this->pagAtual--;
    }

}
