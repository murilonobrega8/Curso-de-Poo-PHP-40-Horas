<?php

/**
 * Description of Pessoa
 * @author murilonobrega8
 */

class Pessoa {
    // Atributos
    private $nome;
    private $idade;
    private $sexo;
    
    // Métodos Públicos
    public function fazerAniver() {
        $this->setIdade($this->getIdade() + 1);
        echo "<p>Feliz aniversário, ".$this->getNome()."!</p>";
    }
    
    public function status() {
        echo "<p>".$this->getNome()." é do sexo ".$this->getSexo()." e tem ".$this->getIdade()." anos!</p>";
    }
    
    // Métodos Especiais
    public function __construct($nom, $ida, $sex) {
        $this->nome = $nom;
        $this->idade = $ida;
        $this->sexo = $sex;
        echo "<p>Bem vindo(a), ".$this->getNome()."!</p>";
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setNome($nom): void {
        $this->nome = $nom;
    }

    public function setIdade($ida): void {
        $this->idade = $ida;
    }

    public function setSexo($sex): void {
        $this->sexo = $sex;
    }
    
}
