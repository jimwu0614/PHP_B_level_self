<?php
include_once "../base.php";
$from = $_POST['from'];


switch ($from) {
    case 'add_Title':

        $img = $_FILES['img'];
        if (isset($img['tmp_name'])) {
            move_uploaded_file($img['tmp_name'],"../img/{$img['name']}");
        }

        $Title->save(['text'=>$_POST['text'],'img'=>$img['name'],'sh'=>0]);


        to("../back.php?do=title");
        
        break;
    
    case 'edit_Title':
        
        $img = $_FILES['img'];
        if (isset($img['tmp_name'])) {
            move_uploaded_file($img['tmp_name'],"../img/{$img['name']}");
        }

        $Title->save(['id'=>$_POST['id'],'img'=>$img['name']]);


        to("../back.php?do=title");
        
        
        break;
    
    case 'Ad':
        
        $Ad->save(['text'=>$_POST['text']]);
        
        to("../back.php?do=ad");
        
        break;
    
    case 'add_Mvim':
        
        $img = $_FILES['img'];
        if (isset($img['tmp_name'])) {
            move_uploaded_file($img['tmp_name'],"../img/{$img['name']}");
        }

        $Mvim->save(['img'=>$img['name']]);


        to("../back.php?do=mvim");
        
        
        break;
    
    case 'edit_Mvim':
        
        $img = $_FILES['img'];
        if (isset($img['tmp_name'])) {
            move_uploaded_file($img['tmp_name'],"../img/{$img['name']}");
        }

        $Mvim->save(['id'=>$_POST['id'],'img'=>$img['name']]);


        to("../back.php?do=mvim");
        
        
        break;
    
    case 'add_Image':
        
        $img = $_FILES['img'];
        if (isset($img['tmp_name'])) {
            move_uploaded_file($img['tmp_name'],"../img/{$img['name']}");
        }

        $Image->save(['img'=>$img['name']]);


        to("../back.php?do=image");
        
        
        break;
    
    case 'edit_Image':
        
        $img = $_FILES['img'];
        if (isset($img['tmp_name'])) {
            move_uploaded_file($img['tmp_name'],"../img/{$img['name']}");
        }

        $Image->save(['id'=>$_POST['id'],'img'=>$img['name']]);


        to("../back.php?do=image");
        
        
        break;
    
    case 'value':
        

        
        
        break;
    
    case 'value':
        

        
        
        break;
    
    case 'value':
        

        
        
        break;
    
    case 'value':
        

        
        
        break;
    
    case 'value':
        

        
        
        break;
    
    case 'value':
        

        
        
        break;
    
    case 'value':
        

        
        
        break;
        
    

}