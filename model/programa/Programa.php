<?php

class Programa{
    private $nome;
    private $ano;

    public function getNome(){
        return $this->nome;
    }  

    public function setNome($nome){
        $this->$nome  = $nome;
    }  

    public function getAno(){
        return $this->ano;
    }  

    public function setAno($ano){
        $this->$ano  = $ano;
    } 

}