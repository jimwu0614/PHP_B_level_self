<?php
include "../base.php";

$id = $_POST['id'];
$text = $_POST['text'];

if(!empty($_POST['sh'])){
    $sh = $_POST['sh'];
}


if(isset($_POST['del'])){
    $del = $_POST['del'];
    foreach($del as $value){
        $Ad->del(['id'=>$value]);
    }
}



foreach ($id as $key =>$value){

    if(isset($sh)&&in_array($value,$sh)){
            $Ad->save(['id'=>$value,'text'=>$text[$key],'sh'=>1]);
    }else{
            $Ad->save(['id'=>$value,'text'=>$text[$key],'sh'=>0]);
    }
    
}
to('../back.php?do=ad');



?>