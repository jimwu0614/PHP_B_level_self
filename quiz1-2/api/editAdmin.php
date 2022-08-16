<?php
include "../base.php";





if(isset($_POST['del'])){
    $del = $_POST['del'];
    foreach($del as $value){
        $Admin->del(['id'=>$value]);
    }
}



to('../back.php?do=admin');


?>