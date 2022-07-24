<?php

date_default_timezone_get("Asia/Taipei");
session_start();


class DB {
    public $dsn = "mysql:host=localhost;charset=utf8;dbname=s1110205";
    public $user = "root";
    public $pw = "";
    public $table;
    public $pdo;

    public function __construct($table)
    {
        $this->table = $table;
        $this->pdo = new PDO($this->dsn,$this->user,$this->pw);
        
    
    }

    public function all(...$arg){
        $sql = "SELECT * FROM $this->table";
        if (isset($arg[0])) {
            
        }
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }


    public function find($id){

    }
}


// 增

// 改

// 刪

// 查
?>