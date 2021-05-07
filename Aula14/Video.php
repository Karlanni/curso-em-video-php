<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Video
 *
 * @author KarlanniCristina
 */
include_once 'AcoesVideo.php';

class Video implements AcoesVideo {

    private $titulo;
    private $avaliacoes;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacoes = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    //put your code here
    public function like() {
        $this->curtidas++;
    }

    public function pause() {
        $this->reproduzindo = false;
    }

    public function play() {
        $this->reproduzindo = true;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAvaliacoes() {
        return $this->avaliacoes;
    }

    public function getViews() {
        return $this->views;
    }

    public function getCurtidas() {
        return $this->curtidas;
    }

    public function getReproduzindo() {
        return $this->reproduzindo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
        return $this;
    }

    public function setAvaliacoes($avaliacoes) {
        $media = 0;
        $media = ($this->avaliacoes + $avaliacoes)/$this->views;
        $this->avaliacoes = $media;
//        return $this;
    }

    public function setViews($views) {
        $this->views = $views;
        return $this;
    }

    public function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
        return $this;
    }

    public function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
        return $this;
    }

}
