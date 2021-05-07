<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Visualizacao
 *
 * @author KarlanniCristina
 */
require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualizacao {

    private $espectador;
    private $video;

    public function __construct($espectador, $video) {
        $this->espectador = $espectador;
        $this->video = $video;
        $this->video->setViews($this->video->getViews()+1);
        $this->espectador->settotAssistido($this->espectador->getTotAssistido()+1);
    }

    public function avaliar() {
        $this->video->setAvaliacoes(5);
                
    }

    public function avaliarNota($nota) {
        $this->video->setAvaliacoes($nota);
    }

    public function avaliarPorc($porc) {
        $nova = 0;
        if($porc <= 20){
            $nova = 3;
        }elseif($porc <= 50){
            $nova = 5;
        }elseif($porc <= 90){
            $nova = 8;
        }else{
            $nova = 10;
        }
        $this->video->setAvaliacoes($nova);
    }

    public function getEspectador() {
        return $this->espectador;
    }

    public function getVideo() {
        return $this->video;
    }

    public function setEspectador($espectador) {
        $this->espectador = $espectador;
        return $this;
    }

    public function setVideo($video) {
        $this->video = $video;
        return $this;
    }

}
