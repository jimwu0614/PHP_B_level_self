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
    
    case 'News':
        
        $News->save(['text'=>$_POST['text']]);
        
        to("../back.php?do=news");
        
        
        break;
    
    case 'Admin':
        
        $Admin->save(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
        
        to("../back.php?do=admin");
        
        
        break;
    
    case 'add_Menu':
        
        $Menu->save(['text'=>$_POST['text'],'url'=>$_POST['url']]);
        
        to("../back.php?do=menu");
        
        
        break;
    
    case 'edit_Menu':
        // dd($_POST);
        $id = $_POST['id']??'';
        $subjectid = $_POST['subjectid'];

        if(isset($_POST['del'])){
            foreach ($_POST['id'] as $key => $del) {
                if (in_array($del,$_POST['del'])) {
                    $Menu->del(['id'=>$del]);
                }
            }
        }

        if (isset($_POST['id'])) {            
            foreach ($id as $key => $value) {
                $Menu->save(['id'=>$value,'text'=>$_POST['text'][$key],'url'=>$_POST['url'][$key]]);
            }
        }

        if(isset($_POST['text2']) ){
            foreach ($_POST['text2'] as $key => $value) {
                if (!empty($value)) {
                    $Menu->save(['text'=>$value,'url'=>$_POST['url2'][$key],'parent'=>$subjectid]);
                }
            }
        }
        
        to("../back.php?do=menu");
        
        break;
    
    case 'value':
        

        
        
        break;
    
    case 'value':
        

        
        
        break;
    
    case 'value':
        

        
        
        break;
        
    

}