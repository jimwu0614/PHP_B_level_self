<?php
session_start();
date_default_timezone_set("Asia/Taipei");

function dd($array){
echo "<pre>";
print_r($array);
echo "</pre>";
}



function to($url){
header("location:$url");
}


class DB{

    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=b_quiz_1";
    protected $user = "root";
    protected $pw = "";
    protected $table;
    protected $pdo;

    function __construct($table) {
        $this->table = $table;
        $this->pdo =  new PDO($this->dsn,$this->user,$this->pw);
        
    }


    function all(...$arg){
        $sql = "SELECT * FROM $this->table ";
        if (isset($arg[0])) {
            if (is_array($arg[0])) {
                foreach ($arg[0] as $key=>$value){
                    $tmp[]="`$key` = '$value'";
                }
                $sql.= " WHERE ".join(" AND ",$tmp) ;
            }else{
                $sql.= $arg[0];
            }
        }


        if (isset($arg[1])) {
            $sql.=$arg[1];
        }
        // echo $sql;
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }


    function find($id){
        $sql = "SELECT * FROM $this->table WHERE ";

            if (is_array($id)) {
                foreach ($id as $key=>$value){
                    $tmp[]="`$key` = '$value'";
                }
                $sql.= join(" AND ",$tmp) ;
            }else{
                $sql.= "`id` =" .$id;
            }


        // echo $sql;
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }


    function del($id){
        $sql = "DELETE FROM $this->table WHERE ";

            if (is_array($id)) {
                foreach ($id as $key=>$value){
                    $tmp[]="`$key` = '$value'";
                }
                $sql.= join(" AND ",$tmp) ;
            }else{
                $sql.= "`id` =" .$id;
            }


        // echo $sql;
        return $this->pdo->exec($sql);
    }


    function math($math,$col,...$arg){
        $sql = "SELECT $math($col) FROM $this->table ";

        if (isset($arg[0])) {
            if (is_array($arg[0])) {
                foreach ($arg[0] as $key=>$value){
                    $tmp[]="`$key` = '$value'";
                }
                $sql.= " WHERE ".join(" AND ",$tmp) ;
            }else{
                $sql.= $arg[0];
            }
        }


        if (isset($arg[1])) {
            $sql.=$arg[1];
        }
        // echo $sql;
        return $this->pdo->query($sql)->fetchColumn();
    }
    

    function save($array){

        if (isset($array['id'])) {
            # UPDATE `ad` SET `text` = '2', `sh` = '11' WHERE `id` = 2
            foreach ($array as $key => $value){
                $tmp[]="`$key` = '$value'";

            }
        $sql = "UPDATE $this->table SET". join(" , ",$tmp)." WHERE `id`=".$array['id'];
        }else{
            #INSERT INTO `ad` (`id`, `text`, `sh`) VALUES (NULL, 'dsfaf', '01')
            $key = join("`, `",array_keys($array));
            $val = join("', '",$array);
            $sql = "INSERT INTO $this->table (`".$key."`) VALUES ('".$val."')";
        }
        // echo $sql;
        return $this->pdo->exec($sql);
    }
}



$Ad = new DB('b_quiz_1_ad');
$Title = new DB('b_quiz_1_title');
$Total = new DB('b_quiz_1_total');
$Mvim = new DB('b_quiz_1_mvim');
$Image = new DB('b_quiz_1_image');
$Bottom = new DB('b_quiz_1_bottom');
$News = new DB('b_quiz_1_news');


if (!isset($_SESSION['visit'])) {
    $_SESSION['visit']=1;
    $total = $Total->find(['id'=>1]);
    $total['total']++;
    $Total->save($total);
}

?>

    