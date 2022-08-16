<?php
include "../base.php";

$id = $_POST['id'];
$text = $_POST['text'];
$url = $_POST['url'];

if(!empty($_POST['sh'])){
    $sh = $_POST['sh'];
    
}


if(isset($_POST['del'])){
    $del = $_POST['del'];
    foreach($del as $value){
        $Menu->del(['id'=>$value]);
    }
}

// dd($id);

foreach ($id as $key =>$value){
    

        if(isset($sh)&&in_array($value,$sh)){

                $Menu->save(['id'=>$value,'text'=>$text[$key],'url'=>$url[$key],'sh'=>1]);
                
    
        }else{
            
                $Menu->save(['id'=>$value,'text'=>$text[$key],'url'=>$url[$key],'sh'=>0]);
                
    
        }
    
}
to('../back.php?do=menu');



?>