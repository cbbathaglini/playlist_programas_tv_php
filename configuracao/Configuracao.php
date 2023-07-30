<?php
class Configuracao{
    private static $instance;

    public static function getInstance(){
        if(self::$instance == null){
            return new Configuracao();
        }

        return self::$instance;
    }

    private function getConfigurations(){
        return array(
            'versao' => '1.0.0',
            "producao" => false,
            "banco_de_dados" => array(
                "host"=>  "localhost",
                "user"=>  "root",
                "password"=>  "",
                "port"=>  "3306",
                "database"=>  "playlists_php",
            )
        );
    }

    public function getValor($chave){
        $arr = $this->getConfigurations();
        if(!isset($arr[$chave])){
            throw new Exception("Configuração ".$chave." não encontrada.");
        }
        return $arr[$chave];
    }
}