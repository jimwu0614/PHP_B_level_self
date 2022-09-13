<?php
session_start();
date_default_timezone_set("Asia/Taipei");

function dd($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

function to($url){
    header("location:".$url);
}


class DB {
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=web02_4";
    protected $table;
    protected $pdo;

    function __construct($table){
        $this->table=$table;
        $this->pdo = new PDO($this->dsn,'root','');
    }


    function all(...$arg){
        $sql = "SELECT * FROM $this->table ";
        if (isset($arg[0])) {
            if (is_array($arg[0])) {
             foreach ($arg[0] as $key => $value) {
                $tmp[]="`$key`='$value'";
             }   
             $sql .= " WHERE ".join(" AND ",$tmp);
            } else {
            $sql.= $arg[0];
            }
        }
        if (isset($arg[1])) {
            $sql.= $arg[1];
        }
        // echo $sql;
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }


    function math($math,$col,...$arg){
        $sql = "SELECT $math($col) FROM $this->table";
        if (isset($arg[0])) {
            if (is_array($arg[0])) {
             foreach ($arg[0] as $key => $value) {
                $tmp[]="`$key`='$value'";
             }   
             $sql .= " WHERE ".join(" AND ",$tmp);
            } else {
            $sql.= $arg[0];
            }
        }
        if (isset($arg[1])) {
            $sql.= $arg[1];
        }
        // echo $sql;
        return $this->pdo->query($sql)->fetchColumn();
    }


    function find($arg){
        $sql = "SELECT * FROM $this->table WHERE ";
        if (is_array($arg)) {
             foreach ($arg as $key => $value) {
                $tmp[]="`$key`='$value'";
             }   
             $sql .= join(" AND ",$tmp);
            } else {
            $sql.= "`id` = ".$arg;
            }
        
        // echo $sql;
        // echo "<br>";
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }


    function del($arg){
        $sql = "DELETE FROM $this->table WHERE ";
        if (is_array($arg)) {
             foreach ($arg as $key => $value) {
                $tmp[]="`$key`='$value'";
             }   
             $sql .= join(" AND ",$tmp);
            } else {
            $sql.= "`id` = ".$arg;
            }
        
        // echo $sql;
        // echo "<br>";
        return $this->pdo->exec($sql);
    }

    function save($ary){
        if (isset($ary['id'])) {
            // UPDATE `user` SET `acc` = 'testf', `pw` = '56789' WHERE `user`.`id` = 2
            foreach ($ary as $key => $value) {
                $tmp[]="`$key`='$value'";
             }   
             $sql ="UPDATE $this->table SET". join(" , ",$tmp)." WHERE `id` = ".$ary['id'];
        }else{
            // INSERT INTO `user` (`id`, `acc`, `pw`, `email`) VALUES (NULL, 'admin', '1234', 'admin@labor.gov.tw'), (NULL, 'test', '5678', 'test@labor.gov.tw');
            $key = join("` , `",array_keys($ary));
            $value = join("' , '",$ary);
            $sql = "INSERT INTO $this->table (`$key`) VALUES ('$value')";
        }
        // echo $sql;
        // echo "<br>";
        return $this->pdo->exec($sql);

    }
}

$User = new DB('user');
$Guest = new DB("guest");
$News = new DB("news");
$Que = new DB("que");
$Log = new DB("log");


$today = date("Y-m-d");
if (!isset($_SESSION['guest'])) {
    $chk = $Guest->math('count','id',['date'=>$today]);
    if ($chk) {
        $_SESSION['guest']=1;
        $guest = $Guest->find(['date'=>$today]);
        $guest['total']++;
        $Guest->save($guest);
    }else {
        $_SESSION['guest']=1;
        $Guest->save(['date'=>$today]);
    }
}
?>