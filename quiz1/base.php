<?php

date_default_timezone_set("Asia/Taipei");
session_start();


class DB {
    // public $dsn = "mysql:host=localhost;charset=utf8;dbname=s1110205";
    // public $user = "s1110205";
    // public $pw = "s1110205";
    public $dsn = "mysql:host=localhost;charset=utf8;dbname=btest";
    public $user = "root";
    public $pw = "";
    public $table;
    public $pdo;

    public function __construct($table)
    {
        $this->table = $table;
        $this->pdo = new PDO($this->dsn,$this->user,$this->pw);
        
    
    }

    // 查

    public function all(...$arg){
        $sql = "SELECT * FROM $this->table ";
        //如果陣列的第一個值存在
        if (isset($arg[0])) {
            if(is_array($arg[0])){
                foreach ($arg[0] as $key => $value) {
                    $tmp[] = "`$key`='$value'";
                }

                //     WHERE `id`='1' and `room` = '101'
                $sql .= " WHERE " . join(" AND ", $tmp);
            }else{
                $sql .= $arg[0];
            }

        //如果陣列有第二個  基本上只會給字串 
        }elseif(isset($arg[1])){
            $sql .= $arg[1];
        }
        
        echo $sql; 
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }


    public function find($id){
        $sql = "SELECT * FROM $this->table ";
        if (is_array($id)){
            foreach($id as $key => $value){
                $tmp[] = " `$key` = '$value' ";
            }
            $sql = $sql . " WHERE " . join(" AND ", $tmp);
            
        }else{
            $sql .= " WHERE `id` = '$id' ";
        }

        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }


    public function del($id){
        $sql = "DELETE  FROM $this->table ";
        if (is_array($id)){
            foreach($id as $key => $value){
                $tmp[] = " `$key` = '$value' ";
            }
            $sql = $sql . " WHERE " . join(" AND ", $tmp);
            
        }else{
            $sql .= " WHERE `id` = '$id' ";
        }

        //會回傳被刪除的筆數  若成功會>=1   若為0表示失敗
        
        return $this->pdo->exec($sql);
        
    }


    public function save($array){

        // 如果有['id']的KEY值  表示是更新  
        if (isset($array['id'])) {
            
            foreach($array as $key => $value){
                if($key!='id'){
                    $tmp[] = " `$key` = '$value' ";
                }
            }
            $sql = "UPDATE $this->table SET ". join(' , ',$tmp)." WHERE `id` = '{$array['id']}'";
            
        // 如果沒有就是新增
        }else{
            // "INSERT INTO `b_quiz_2_title` (`img`, `text`) VALUES ('01B03.jpg' , '5678')";
            $keys=join("`,`" , array_keys($array));
            $values = join("','",$array);

            $sql = "INSERT INTO $this->table (`$keys`) VALUES ('$values')";
        }


        //會回傳被刪除的筆數  若成功會>=1   若為0表示失敗
        
        return $this->pdo->exec($sql);
        
    }





}

function dd($array){
echo "<pre>";
print_r($array);
echo "</pre>";

}


// 增

// 改

// 刪

$Bottom = new DB('b_levelq1_bottom');
$Ad = 

//$sql = SELECT * FROM B_levelQ1_bottom where `id` = '1'
// print_r($Bottom->all());                   //Array ( [0] => Array ( [id] => 1 [bottom] => 2022-07-20頁尾版權 ) [1] => Array ( [id] => 2 [bottom] => 2022-07-25 ) )
print_r($Bottom->all(['id'=>1]));          //Array ( [0] => Array ( [id] => 1 [bottom] => 2022-07-20頁尾版權 ) )
// print_r($Bottom->all(" where `id` = '1'"));   //Array ( [0] => Array ( [id] => 1 [bottom] => 2022-07-20頁尾版權 ) )

?>