<?php
session_start();
date_default_timezone_set("Asia/Taipei");



function dd($arr){
echo "<pre>";
print_r($arr);
echo "</pre>";
}

function to($url){

    header("location:.$url");
}

class DB{
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=web05_02";
    protected $user = "root";
    protected $pw = "";
    protected $pdo;
    protected $table;


    function __construct($table){
        $this->table = $table;
        $this->pdo = new PDO($this->dsn,$this->user,$this->pw);
    }


    function all(...$arg){
        $sql = "SELECT * FROM $this->table ";
        if (isset($arg[0])) {
            if(is_array($arg[0])){
                foreach($arg[0] as $key=>$value){
                    $tmp[]="`$key`='$value'";
                }
                $sql .= " WHERE ".join(" AND ",$tmp);
            }else{
                $sql.=$arg[0];
            }
        }
        if (isset($arg[1])) {
            $sql.=$arg[1];
        }
        // echo $sql; 
        return $this->pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);

    }


    function find($id){
        $sql = "SELECT * FROM $this->table WHERE";
            if(is_array($id)){
                foreach($id as $key=>$value){
                    $tmp[]="`$key`='$value'";
                }
                $sql .= join(" AND ",$tmp);
            }else{
                $sql.= " `id` = ".$id;
            }
            
            // echo $sql;
            return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
        }

    
    function del($id){
        $sql = "DELETE FROM $this->table WHERE";
            if(is_array($id)){
                foreach($id as $key=>$value){
                    $tmp[]="`$key`='$value'";
                }
                $sql .= join(" AND ",$tmp);
            }else{
                $sql.= " `id` = ".$id;
            }
            
            // echo $sql;
            return $this->pdo->exec($sql);
        }


        function save($arg){

            if (isset($arg['id'])) {
                //UPDATE `user` SET `acc` = 'mem023', `pw` = 'mem023' WHERE `user`.`id` = 4
                    foreach($arg as $key=>$value){
                        $tmp[]="`$key`='$value'";
                    }
                    $sql = " UPDATE $this->table SET ".join(" , ",$tmp) ." WHERE `id` = ".$arg['id'];
                }else {
                    //INSERT INTO `user` (`id`, `acc`, `pw`, `email`) VALUES (NULL, 'sad', 'sa', 'a')
                    $key = join("`, `" ,array_keys($arg));
                    $value = join("', '" ,$arg);
                    $sql = "INSERT INTO $this->table (`$key`) VALUES ('$value')";
            }
            // echo $sql;
            return $this->pdo->exec($sql);

    
        }



        function math($mat,$col,...$arg){
            $sql = "SELECT $mat($col) FROM $this->table ";
            if (isset($arg[0])) {
                if(is_array($arg[0])){
                    foreach($arg[0] as $key=>$value){
                        $tmp[]="`$key`='$value'";
                    }
                    $sql .= " WHERE ".join(" AND ",$tmp);
                }else{
                    $sql.=$arg[0];
                }
            }
            if (isset($arg[1])) {
                $sql.=$arg[1];
            }
            // echo $sql;
            return $this->pdo->query($sql)->fetchColumn();
    
        }





}


$User = new DB('b_quiz_2_user');
$News = new DB('b_quiz_2_news');
$Que = new DB('b_quiz_2_que');
$Log = new DB('b_quiz_2_log');
$Total = new DB('b_quiz_2_total');


$today = date('Y-m-d');
// echo $today;
if (!isset($_SESSION['guest'])) {
    $chk = $Total->math("count",'id',['date'=>$today]);
    if ($chk>0) {
        $_SESSION['guest']=1;
        $rec = $Total->find(['date'=>$today]);
        $rec['total']++;
        $Total->save($rec);
    }else{
        $_SESSION['guest']=1;
        $rec = $Total->save(['date'=>$today,'total'=>1]);
        

    }
}
?>

