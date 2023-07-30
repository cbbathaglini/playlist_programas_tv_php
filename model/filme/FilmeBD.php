<?php
require_once __DIR__."/../CRUDDB.php";
require_once __DIR__."/FilmeCamposDB.php";
class FilmeBD implements CRUDBD{

    public function cadastrar($objFilme,$connection){
        try{

            $INSERT = "INSERT INTO ".FilmeCamposDB::nome_tabela()." ( ".
                FilmeCamposDB::nome().", ".
                FilmeCamposDB::duracao().", ".
                FilmeCamposDB::ano()." )
             VALUES (?,?,?) ";

            $arrayBind = array();
            $arrayBind[] = array("s", $objFilme->getNome());
            $arrayBind[] = array("i", $objFilme->getDuracao());
            $arrayBind[] = array("i", $objFilme->getAno());

            //echo $INSERT;
            //print_r($arrayBind);
            $connection->executarSql($INSERT, $arrayBind);

            $objFilme->setIdFilme($connection->obterUltimoID());
            return $objFilme;
        } catch (Throwable $ex) {
            throw new Exception("Erro ao cadastrar filme");
        }

    }
    public function consultar($objFilme,$connection){
        try{

        } catch (Throwable $ex) {
            throw new Exception("Erro ao consultar filme");
        }
    }
    public function alterar($objFilme,$connection){
        try{

        } catch (Throwable $ex) {
            throw new Exception("Erro ao alterar filme");
        }
    }
    public function remover($objFilme,$connection){
        try{

        } catch (Throwable $ex) {
            throw new Exception("Erro ao remover filme");
        }
    }
    public function listar($objFilme,$connection){
        try{

        } catch (Throwable $ex) {
            throw new Exception("Erro ao listar filme");
        }
    }


}