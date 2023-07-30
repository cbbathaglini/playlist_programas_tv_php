<?php
interface CRUDBD{

    public function cadastrar($obj,$connection);
    public function consultar($obj,$connection);
    public function alterar($obj,$connection);
    public function remover($obj,$connection);
    public function listar($obj,$connection);
}