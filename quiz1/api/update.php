<?php
include "../base.php";

$from = $_POST['from'];

switch ($from) {
    case 'Total':
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
    
 
    case 'Mvim_add':

        $img = $_FILES['img'];
        if(isset($img['tmp_name'])){
            move_uploaded_file($img['tmp_name'],"../img/{$img['name']}");
        }

        $Mvim->save(['img'=>$img['name'],'sh'=>1]);
        to("../back.php?do=mvim");

        break;
    
 
    case 'Mvim_edit':
        $id = $_POST['id'];
        $img = $_FILES['img'];
        if(isset($img['tmp_name'])){
            move_uploaded_file($img['tmp_name'],"../img/{$img['name']}");
        }

        // dd($id);
        $Mvim->save(['id'=>$id,'img'=>$img['name']]);
        to("../back.php?do=mvim");
        break;
    
 
    case 'Image_add':
        $img = $_FILES['img'];
        if(isset($img['tmp_name'])){
            move_uploaded_file($img['tmp_name'],"../img/{$img['name']}");
        }

        $Image->save(['img'=>$img['name'],'sh'=>1]);
        to("../back.php?do=image");
        break;
    
 
    case 'Image_edit':
        $id = $_POST['id'];
        $img = $_FILES['img'];
        if(isset($img['tmp_name'])){
            move_uploaded_file($img['tmp_name'],"../img/{$img['name']}");
        }

        // dd($id);
        $Image->save(['id'=>$id,'img'=>$img['name']]);
        to("../back.php?do=image");
        break;
    
 
        case 'Bottom':
            $bottom = $_POST['text'];
    
            $Bottom->save(['id'=>1,'text'=>$bottom]);
            to("../back.php?do=bottom");
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