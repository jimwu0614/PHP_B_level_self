<?php
include "../base.php";

$from = $_POST['from'];

switch ($from) {
    case 'total':
        $total = $_POST['total'];

        $Total->save(['id'=>1,'total'=>$total]);
        to("../back.php?do=total");
        break;
    
 
    case 'addTitle':
        $text = $_POST['text'];
        $img = $_FILES['img'];
        if(isset($img['tmp_name'])){
            move_uploaded_file($img['tmp_name'],"../img/{$img['name']}");
        }

        $Title->save(['text'=>$text,'img'=>$img['name'],'sh'=>0]);
        to("../back.php?do=title");
        break;
    
 
    case 'editTitle':
        $id = $_POST['id'];
        $img = $_FILES['img'];
        if(isset($img['tmp_name'])){
            move_uploaded_file($img['tmp_name'],"../img/{$img['name']}");
        }

        // dd($id);
        $Title->save(['id'=>$id,'img'=>$img['name']]);
        to("../back.php?do=title");

        break;
    
 
    case 'value':
        # code...
        break;
    
 
    case 'value':
        # code...
        break;
    
 
    case 'value':
        # code...
        break;
    
 
    case 'value':
        # code...
        break;
    
 
    case 'value':
        # code...
        break;
    
 
    case 'value':
        # code...
        break;
    
 
    case 'value':
        # code...
        break;
    
 
    case 'value':
        # code...
        break;
    
 
    case 'value':
        # code...
        break;
    
 
    case 'value':
        # code...
        break;
    
 
}

?>