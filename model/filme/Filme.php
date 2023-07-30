<?php

class Filme {
    private $idFilme;
    private $duracao;
    private $nome;
    private $ano;


    public function getIdFilme()
    {
        return $this->idFilme;
    }

    /**
     * @param mixed $idFilme
     */
    public function setIdFilme($idFilme)
    {
        $this->idFilme = $idFilme;
    }

    public function getDuracao()
    {
        return $this->duracao;
    }

    /**
     * @param mixed $duracao
     */
    public function setDuracao($duracao)
    {
        $this->duracao = $duracao;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getAno()
    {
        return $this->ano;
    }

    /**
     * @param mixed $ano
     */
    public function setAno($ano)
    {
        $this->ano = $ano;
    }



}