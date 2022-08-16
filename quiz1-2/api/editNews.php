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
        $News->del(['id'=>$value]);
    }
}



foreach ($id as $key =>$value){
    
    // dd($sh);


        // echo "<br>";
        // echo $sh[$value];
        echo "<hr>";
        if(isset($sh)&&in_array($value,$sh)){
            // (isset($_POST['sh']) && in_array($id,$_POST['sh']))
                $News->save(['id'=>$value,'text'=>$text[$key],'sh'=>1]);
                
    
        }else{
            
                $News->save(['id'=>$value,'text'=>$text[$key],'sh'=>0]);
                
    
        }
    
}
to('../back.php?do=news');



?>