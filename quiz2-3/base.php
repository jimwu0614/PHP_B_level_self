<?php
session_start();
date_default_timezone_set("Asia/Taipei");;


function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function to($url){
    header("location:".$url);
}

class DB{
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=web0503";
    protected $table;
    protected $pdo;

    public function __construct($table){
        $this->table = $table;
        $this->pdo = new PDO($this->dsn,"root",'');
    }
    
    
    function all(...$arg){
        $sql = "SELECT * FROM $this->table ";
        if (isset($arg[0])) {
            if (is_array($arg[0])) {
                foreach ($arg[0] as $key => $value) {
                    $tmp[]=" `$key` = '$value'";
                }   
                $sql .= " WHERE " .join(" AND ",$tmp);
            } else {
            $sql .= $arg[0];
            }
            
        }
        if (isset($arg[1])) {
            $sql .= $arg[1];
        }
        // echo $sql;
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    
    
    function find($arg){
        $sql = "SELECT * FROM $this->table WHERE ";

            if (is_array($arg)) {
                foreach ($arg as $key => $value) {
                    $tmp[]=" `$key` = '$value'";
                }   
                $sql .= join(" AND ",$tmp);
            } else {
            $sql .= "`id` =".$arg;
            }
            
        
        // echo "<br>";
        // echo $sql;
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    
    
    function del($arg){
        $sql = "DELETE FROM `$this->table` WHERE ";

            if (is_array($arg)) {
                foreach ($arg as $key => $value) {
                    $tmp[]=" `$key` = '$value'";
                }   
                $sql .= join(" AND ",$tmp);
            } else {
            $sql .= "`id` =".$arg;
            }
            
        

        // echo $sql;
        return $this->pdo->exec($sql);
    }

        
    function math($math,$col,...$arg){
        $sql = "SELECT $math($col) FROM $this->table ";
        if (isset($arg[0])) {
            if (is_array($arg[0])) {
                foreach ($arg[0] as $key => $value) {
                    $tmp[]=" `$key` = '$value'";
                }   
                $sql .= " WHERE " .join(" AND ",$tmp);
            } else {
            $sql .= $arg[0];
            }
            
        }
        if (isset($arg[1])) {
            $sql .= $arg[1];
        }
        // echo $sql;
        return $this->pdo->query($sql)->fetchColumn();
    }


    function save($array){
        if (isset($array['id'])) {
        // UPDATE `total` SET `date` = '2022-08-25', `total` = '54' WHERE `total`.`id` = 1
            foreach ($array as $key => $value) {
                $tmp[]=" `$key` = '$value'";
            }   
            $sql = "UPDATE `$this->table` SET ".join(" , ",$tmp)." WHERE `id` = ".$array['id'];
        } else {
            
            $key = join("` , `",array_keys($array));
            $value = join("' , '",$array);

            $sql = "INSERT INTO `$this->table` (`$key`) VALUES ('$value')";
            // INSERT INTO `user` (`id`, `acc`, `pw`, `email`) VALUES (NULL, 'admin', '1234', 'admin@labor.gov.tw'), (NULL, 'test', '5678', 'test@labor.gov.tw');
        }
        
        // echo "<br>";
        // echo $sql;
        return $this->pdo->exec($sql);

    }
    
}


$User = new DB('user');
$Total = new DB('total');
$News = new DB('news');
$Que = new DB('Que');
$Log = new DB('log');

$today = date("Y-m-d");




if (!isset($_SESSION['visit'])) {
    $vis = $Total->math("count",'id',['date'=>$today]);

    if ($vis>=1) {
        $viss = $Total->find(['date'=>$today]);
        $viss['total']++;
        $Total->save($viss);
        $_SESSION['visit']=1;
    } else {
        $Total->save(['date'=>date("Y-m-d"),'total'=>1]);
        $_SESSION['visit']=1;
    }
    
}





?>
