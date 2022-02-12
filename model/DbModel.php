<?php

class DbModel {
    public $pdo=null;
    function __construct()
    {
        var_dump(10);
        $this->pdo= new PDO("mysql:host=". HOST .";dbname=".DATABASE, USER, PW);
        $this->pdo->query('set names utf8');
    }

   protected function select($sql, $param=[])
    {
        $stm= $this->pdo->prepare($sql);
        $stm->execute($param);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    protected function store($sql, $param=[])
    {
        $stm= $this->pdo->prepare($sql);
        $stm->execute($param);
        return $stm->rowCount();
    }

    protected function delete($sql, $param=[])
    {
        $stm= $this->pdo->prepare($sql);
        $stm->execute($param);
        return $stm->rowCount();
    }

    protected function update($sql, $param=[])
    {
        $stm= $this->pdo->prepare($sql);
        $stm->execute($param);
        return $stm->rowCount();
    }
}
