<?php

//namespace Controller;

/**
 *
 * @author KarlanniCristina
 */

/** @var \Controller\Publicacao */
interface Publicacao {

    public function abrir();

    public function fechar();

    public function folhear($pag);

    public function avancarPagina();

    public function voltarPagina();
}
