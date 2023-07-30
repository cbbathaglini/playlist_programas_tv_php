<?php


class FilmeCamposDB
{
    public static $TABLE_NAME = 'filmes';
    public static $INT_ID= 'idFilme';
    public static $STR_NOME = 'nome';
    public static $INT_DURACAO_MIN = 'duracao';
    public static $INT_ANO = 'ano';

    public function montar_consulta($objFilme,$array, $tipo){

        if($tipo == AcaoBanco::$CONSULTAR){
            $array = $array[0];
        }

        $objFilme->setIdFilme($array[self::$INT_ID]);
        $objFilme->setNome($array[self::$STR_NOME]);
        $objFilme->setAno($array[self::$INT_ANO]);
        $objFilme->setDuracao($array[self::$INT_DURACAO_MIN]);

    }

    public static function nome_tabela(){
        return self::$TABLE_NAME;
    }

    public static function idFilme(){
        return self::$TABLE_NAME.".".self::$INT_ID;
    }

    public static function nome(){
        return self::$TABLE_NAME.".".self::$STR_NOME;
    }

    public static function duracao(){
        return self::$TABLE_NAME.".".self::$INT_DURACAO_MIN;
    }

    public static function ano(){
        return self::$TABLE_NAME.".".self::$INT_ANO;
    }
}