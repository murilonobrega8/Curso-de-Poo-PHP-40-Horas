<?php

/**
 * Description of Livro
 * @author murilonobrega8
 */

require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao {
    // Atributos
    private $titulo;
    private $autor;
    private $totPag;
    private $pagAtual;
    private $aberto;
    private $leitor;

    // Métodos Públicos
    public function detalhes() {
        echo "<br><br>Livro: ".$this->getTitulo().". Autor: ".$this->getAutor();
        echo "<br>Páginas: ".$this->totPag;
        echo "<br>Sendo lido por: ".$this->leitor->getNome();                
    }
    
    // Métodos Epeciais
    public function __construct($tit, $aut, $ttp, $lei) {
        $this->titulo = $tit;
        $this->autor = $aut;
        $this->totPag = $ttp;
        $this->leitor = $lei;
        $this->aberto = false;
        $this->pagAtual = 0;
    }
    
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTotPag() {
        return $this->totPag;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setTitulo($tit): void {
        $this->titulo = $tit;
    }

    public function setAutor($aut): void {
        $this->autor = $aut;
    }

    public function setTotPag($ttp): void {
        $this->totPag = $ttp;
    }

    public function setPagAtual($pat): void {
        $this->pagAtual = $pat;
    }

    public function setAberto($abe): void {
        $this->aberto = $abe;
    }

    public function setLeitor($lei): void {
        $this->leitor = $lei;
    }
    
    // Métodos Abstratos
    public function abrir() {
        $this->setAberto(true);
        echo "<p>Abrindo o livro ".$this->getTitulo()."...</p>";
    }

    public function avancarPag() {
        $this->setPagAtual($this->getPagAtual() + 1);
        echo "<p>Avançando página do livro ".$this->getTitulo()."...</p>";
    }

    public function fechar() {
        $this->setAberto(false);
        echo "<p>Fechando o livro ".$this->getTitulo()."...</p>";
    }

    public function folhear($pag) {
        if ($pag > $this->totPag) {
            $this->setPagAtual(0);
        } else {
            $this->setPagAtual($pag);
            echo "<p>Folheando o livro ".$this->getTitulo()."!</p>";
        }
    }

    public function voltarPag() {
        $this->setPagAtual($this->getPagAtual() - 1);
        echo "<p>Voltando página do livro ".$this->getTitulo()."...</p>";
    }

}
