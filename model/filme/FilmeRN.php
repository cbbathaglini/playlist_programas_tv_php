<?php
require_once __DIR__.'/../CRUDRN.php';
require_once __DIR__.'/FilmeBD.php';
require_once __DIR__.'/../banco/Banco.php';
class FilmeRN implements CRUDRN{

    private static $LEN_STR_NOME = 120;
    private static $DURACAO_MAIOR = 0;
    private static $ANO_MAIOR_QUE = 1900;


    private function validar_nome($objFilme,$objExcecao){
        $nome = trim($objFilme->getNome());
        if(strlen($nome) > self::$LEN_STR_NOME){
            //$objExcecao
        }
        $objFilme->setNome($nome);
    }


    private function validar_duracao($objFilme,$objExcecao){
        $duracao = $objFilme->getDuracao();
        if($duracao <= self::$DURACAO_MAIOR){
            //$objExcecao
        }
        $objFilme->setDuracao($duracao);
    }


    private function validar_ano($objFilme,$objExcecao){
        $ano = $objFilme->getAno();
        if($ano < self::$ANO_MAIOR_QUE){
            //$objExcecao
        }
        $objFilme->setDuracao($ano);
    }

    public function cadastrar($objFilme){
        $objBanco = new Banco();
        try{
            $objBanco->abrirConexao();
            
            $objFilmeBD = new FilmeBD();
            $objFilmeCadastrado =$objFilmeBD->cadastrar($objFilme,$objBanco);

            $objBanco->fecharConexao();
            return $objFilmeCadastrado;
        }catch(Throwable $e){

        }
    }

    public function consultar($objFilme){
        //TODO
    }

    public function alterar($objFilme){
        //TODO
    }

    public function remover($objFilme){
        //TODO
    }

    public function listar($objFilme){
        //TODO
    }


}