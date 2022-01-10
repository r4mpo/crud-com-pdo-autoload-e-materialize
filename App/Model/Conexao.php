<?php namespace App\Model;
Class Conexao {
    private static $instancia;
    public static function GetConn() {
        if(!isset(self::$instancia)){
            self::$instancia = new \PDO("mysql:host=localhost;dbname=db_colaboradores;charset=utf8","root","");
        }
        return self::$instancia;
    }
}
/* Neste script é criada a conexão com o banco de dados. */