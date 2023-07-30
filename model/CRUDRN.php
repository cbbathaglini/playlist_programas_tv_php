<?php

interface CRUDRN{

    public function cadastrar($obj);
    public function consultar($obj);
    public function alterar($obj);
    public function remover($obj);
    public function listar($obj);
}