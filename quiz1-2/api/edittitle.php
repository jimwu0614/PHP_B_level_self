<?php
include "../base.php";

$id = $_POST['id'];
$text = $_POST['text'];
$sh = $_POST['sh'];



if(isset($_POST['del'])){
    $del = $_POST['del'];
    foreach($del as $value){
        $Title->del(['id'=>$value]);
    }
}



foreach ($id as $key =>$value){
    if($sh==$value){
            $Title->save(['id'=>$value,'text'=>$text[$key],'sh'=>1]);

    }else{
            $Title->save(['id'=>$value,'text'=>$text[$key],'sh'=>0]);

    }
}
to('../back.php?do=title');



?>