<?php
include "../base.php";

$from = $_POST['from'];

switch ($from) {

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
    
 
    case 'News_add':
        $text = $_POST['text'];

        $News->save(['text'=>$text,'sh'=>1]);
        to("../back.php?do=news");
        break;
    
 
    case 'Admin_add':
        $acc = $_POST['acc'];
        $pw = $_POST['pw'];

        $Admin->save(['acc'=>$acc,'pw'=>$pw]);
        to("../back.php?do=admin");
        break;
    
 
    case 'Menu_add':



        $text = $_POST['text'];
        $url = $_POST['url'];

        $Menu->save(['text'=>$text,'url'=>$url,'sh'=>1]);
        to("../back.php?do=menu");
        break;
    
 
    case 'Sub_edit':



        $mainid = $_POST['mainid'];
        $subid = $_POST['subid'];

        $text = $_POST['text'];
        $url = $_POST['url'];

        if (!empty($_POST['del'])) {
            $del = $_POST['del'];
            foreach ($del as $value) {
                if(in_array($value,$subid)){
                $Menu->del($value);
                }
            }
        }

        foreach ($subid as $key => $value) {
            $Menu->save(['id'=>$value,'text'=>$text[$key],'url'=>$url[$key]]); 
        }



if (!empty($_POST['text2']) && !empty($_POST['url2'])) {
    # code...

        $text2 = $_POST['text2'];
        $url2 = $_POST['url2'];

        foreach ($subid as $key => $value) {
            $Menu->save(['text'=>$text2[$key],'url'=>$url2[$key],'par'=>$mainid]); 
        }

    }



            to("../back.php?do=menu");
        break;
    
 
}

?>