<?php

/**
 * @author murilonobrega8
 */

interface Publicacao {
    public function abrir();
    public function fechar();
    public function folhear($pag);
    public function avancarPag();
    public function voltarPag();
}