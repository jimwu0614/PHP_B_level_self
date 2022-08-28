<?php
session_start();
date_default_timezone_set("Asia/Taipei");

function dd($arr){
echo "<pre>";
print_r($arr);
echo "</pre>";

}
function to($url){
    header('location:'.$url);
}

class DB{

    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=web0502";
    protected $user = "root";
    protected $pw = '';
    protected $table;
    protected $pdo;

    function __construct($table){
        $this->table = $table;
        $this->pdo = new PDO($this->dsn,$this->user,$this->pw);
        
    }

public function all(...$arg){
    $sql = "SELECT * FROM $this->table ";
    if (isset($arg[0])) {
        if (is_array($arg[0])) {
            foreach($arg[0] as $key=>$value){
                $tmp[]="`$key`='$value' ";
            }
            $sql .= " WHERE ".join("AND",$tmp);
        } else {
            $sql.=$arg[0];
        }
        
    }
    if (isset($arg[1])) {
        $sql.=$arg[1];
    }
    // echo $sql;
    return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}


public function find($arg){
    $sql = "SELECT * FROM $this->table WHERE ";

        if (is_array($arg)) {
            foreach($arg as $key=>$value){
                $tmp[]="`$key`='$value' ";
            }
            $sql .= join("AND",$tmp);
        } else {
            $sql .= $arg;
        }
        

    // echo $sql;
    return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}


public function del($arg){
    $sql = "DELETE FROM $this->table WHERE ";

        if (is_array($arg)) {
            foreach($arg as $key=>$value){
                $tmp[]="`$key`='$value' ";
            }
            $sql .= join("AND",$tmp);
        } else {
            $sql .= $arg;
        }
        

    // echo $sql;
    return $this->pdo->exec($sql);
}



public function math($math,$col,...$arg){
    $sql = "SELECT $math($col) FROM $this->table ";
    if (isset($arg[0])) {
        if (is_array($arg[0])) {
            foreach($arg[0] as $key=>$value){
                $tmp[]="`$key`='$value' ";
            }
            $sql .= " WHERE ".join("AND",$tmp);
        } else {
            $sql.=$arg[0];
        }
        
    }
    if (isset($arg[1])) {
        $sql.=$arg[1];
    }
    // echo $sql;
    return $this->pdo->query($sql)->fetchColumn();
}

public function save($array){
    if (isset($array['id'])) {
        // UPDATE `total` SET `date` = '2022-08-23', `total` = '23' WHERE `total`.`id` = 4
        foreach($array as $key=>$value){
            $tmp[]="`$key`='$value' ";
        }
        $sql = " UPDATE `$this->table` SET ".join(",",$tmp)." WHERE `id` = {$array['id']}" ;


    } else {
        // INSERT INTO `total` (`id`, `date`, `total`) VALUES (NULL, '2022-08-22', '22'), (NULL, '2022-08-23', '23'), (NULL, '2022-08-24', '24');
        $key = join("` , `",array_keys($array));
        $value = join("' , '",$array);

        $sql ="INSERT INTO `$this->table` (`$key`) VALUES ('$value')";


    }
    // echo $sql;
    // echo "<br>";
    return $this->pdo->exec($sql);
}



}

$Total = new DB("total");
$User = new DB("user");
$News = new DB("news");
$Log = new DB("log");
$Que = new DB("que");




$today = date('Y-m-d');
if (!isset($_SESSION['visit'])) {
    $visit=$Total->find(['date'=>date('Y-m-d')]);

    if (!empty($visit)) {
        $_SESSION['visit']=1;
        $visit['total']++;
        $Total->save($visit);
    } else {
        $_SESSION['visit']=1;
        $Total->save(['date'=>date('Y-m-d'),'total'=>1]);

    }
    
}

?>