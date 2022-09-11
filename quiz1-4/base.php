<?php
session_start();
date_default_timezone_set('Asia/Taipei');

function dd($ary){
    echo "<pre>";
    print_r($ary);
    echo "</pre>";
}
function to($url){
    header('location:'.$url);
}

class DB{
    protected $dsn = "mysql:host=localhost;chatset=utf8;dbname=web01_4";
    protected $table;
    protected $pdo;

    function __construct($table){
        $this->table = $table;
        $this->pdo = new PDO($this->dsn,'root','');
    }

    function save($ary){
        if (isset($ary['id'])) {
            foreach ($ary as $key => $value) {
                $tmp[] = "`$key` = '$value'";
            }
            $sql = "UPDATE `$this->table` SET". join(" , ",$tmp) ." WHERE `id` = {$ary['id']}";
        }else{
            
            $key = join("` , `",array_keys($ary));
            $val = join("' , '",$ary);
            $sql = "INSERT INTO `$this->table` (`$key`) VALUES ('$val')";
        }
        // echo $sql;
        // echo "<br>";
        return $this->pdo->exec($sql);
    }

    function all(...$ary){
        $sql = "SELECT * FROM $this->table ";
        if (isset($ary[0])) {
            if(is_array($ary[0])){
                foreach ($ary[0] as $key => $value) {
                    $tmp[] = "`$key` = '$value'";
                   
                }
                $sql.=" WHERE ".join(" AND ",$tmp);
            }else {
                $sql.=$ary[0];
            }
        }
        if (isset($ary[1])) {
            $sql.=$ary[1];
        }
        // echo $sql;
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    

    function find($ary){
        $sql = "SELECT * FROM $this->table WHERE ";
   
            if(is_array($ary)){
                foreach ($ary as $key => $value) {
                    $tmp[] = "`$key` = '$value'";
                }
                $sql.=join(" AND ",$tmp);
            }else {
                $sql.= "`id` = $ary";
            }
        
        // echo $sql;
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    
    
    function del($ary){
        $sql = "DELETE FROM $this->table WHERE ";
   
            if(is_array($ary)){
                foreach ($ary as $key => $value) {
                    $tmp[] = "`$key` = '$value'";
                }
                $sql.=join(" AND ",$tmp);
            }else {
                $sql.= "`id` = $ary";
            }
        
        // echo $sql;
        // echo "<br>";
        return $this->pdo->exec($sql);
    }
    
    
    function math($math,$col,...$ary){
        $sql = "SELECT $math($col) FROM $this->table ";
        if (isset($ary[0])) {
            if(is_array($ary[0])){
                foreach ($ary[0] as $key => $value) {
                    $tmp[] = "`$key` = '$value'";
                   
                }
                $sql.=" WHERE ".join(" AND ",$tmp);
            }else {
                $sql.=$ary[0];
            }
        }
        if (isset($ary[1])) {
            $sql.=$ary[1];
        }
        // echo $sql;
        return $this->pdo->query($sql)->fetchColumn();
    }
    

}
$Admin = new DB('admin');
$Title = new DB('title');
$Total = new DB('total');
$Ad = new DB('ad');
$Mvim = new DB('mvim');
$Image = new DB('image');
$Bottom = new DB('Bottom');
$News = new DB('news');
$Menu = new DB('menu');


if (!isset($_SESSION['total'])) {
    $_SESSION['total']=1;
    $total = $Total->find(1);
    $total['total']++;
    $Total->save($total);
}
?>