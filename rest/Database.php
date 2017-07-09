<?php

class Database {
    private $pdo;

    function __construct($dsn, $db_pass, $db_user){
        $this->pdo = new PDO($dsn,$db_user,$db_pass);
    }

    function query($sql, $params_arr){
        $query = $this->pdo->prepare($sql);
        $result = $query->execute($params_arr);
        return $result;
    }

    function getData($sql, $params_arr){
        $query = $this->pdo->prepare($sql);
        $result = $query->execute($params_arr);
        return $result->getAssoc();
    }

}