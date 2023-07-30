<?php
require_once __DIR__.'/model/filme/Filme.php';
require_once __DIR__.'/model/filme/FilmeRN.php';


$obj_filme = new Filme();
$obj_filme->setNome("Operação Cúpido");
$obj_filme->setDuracao(128);
$obj_filme->setAno(1998);


$obj_filmeRN = new FilmeRN();
$obj_filme = $obj_filmeRN->cadastrar($obj_filme);
print_r($obj_filme);