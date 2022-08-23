<?php
include "../base.php";

$from = $_POST['from'];

switch ($from) {
    case 'total':
        $total = $_POST['total'];

        $Total->save(['id'=>1,'total'=>$total]);
        to("../back.php?do=total");
        break;
    
 
    case 'Title_add':
        $text = $_POST['text'];
        $img = $_FILES['img'];
        if(isset($img['tmp_name'])){
            move_uploaded_file($img['tmp_name'],"../img/{$img['name']}");
        }

        $Title->save(['text'=>$text,'img'=>$img['name'],'sh'=>0]);
        to("../back.php?do=title");
        break;
    
 
    case 'Title_edit':
        $id = $_POST['id'];
        $img = $_FILES['img'];
        if(isset($img['tmp_name'])){
            move_uploaded_file($img['tmp_name'],"../img/{$img['name']}");
        }

        // dd($id);
        $Title->save(['id'=>$id,'img'=>$img['name']]);
        to("../back.php?do=title");

        break;
    
 
    case 'Ad_add':
        $text = $_POST['text'];

        $Ad->save(['text'=>$text,'sh'=>1]);
        to("../back.php?do=ad");
        break;
    
 
    case '':

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