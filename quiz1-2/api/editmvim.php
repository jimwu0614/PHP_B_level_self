<?php
include "../base.php";

$id = $_POST['id'];
$sh = $_POST['sh'];

if(!empty($_POST['sh'])){
    $sh = $_POST['sh'];
    
}


if(isset($_POST['del'])){
    $del = $_POST['del'];
    foreach($del as $value){
        $Mvim->del(['id'=>$value]);
    }
}



foreach ($id as $key =>$value){

        if(isset($sh)&&in_array($value,$sh)){
            // (isset($_POST['sh']) && in_array($id,$_POST['sh']))
                $Mvim->save(['id'=>$value,'sh'=>1]);
                
    
        }else{
            
                $Mvim->save(['id'=>$value,'sh'=>0]);
                
    
        }
    
}
to('../back.php?do=mvim');


?>