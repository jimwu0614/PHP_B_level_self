<?php
include_once "../base.php";
$from = $_POST['from'];
switch ($from) {
    case 'addTitle':
        $img = $_FILES['img'];
        if (isset($img['tmp_name'])) {
            move_uploaded_file("{$img['tmp_name']}","../upload/{$img['name']}");
        }
        $Title->save(['text'=>$_POST['text'],'img'=>$img['name']]);
        to('../back.php?do=title');
        break;
    
    case 'editTitle':
        $img = $_FILES['img'];
        if (isset($img['tmp_name'])) {
            move_uploaded_file("{$img['tmp_name']}","../upload/{$img['name']}");
        }
        $Title->save(['id'=>$_POST['id'],'text'=>$_POST['text'],'img'=>$img['name']]);
        to('../back.php?do=title');
        break;
    
    case 'addAd':
        $Ad->save(['text'=>$_POST['text']]);
        to('../back.php?do=ad');
        break;
    
    case 'addMvim':
        $img = $_FILES['img'];
        if (isset($img['tmp_name'])) {
            move_uploaded_file("{$img['tmp_name']}","../upload/{$img['name']}");
        }
        $Mvim->save(['img'=>$img['name']]);
        to('../back.php?do=mvim');
        break;
    
    case 'editMvim':
        $img = $_FILES['img'];
        if (isset($img['tmp_name'])) {
            move_uploaded_file("{$img['tmp_name']}","../upload/{$img['name']}");
        }
        $Mvim->save(['id'=>$_POST['id'],'img'=>$img['name']]);
        to('../back.php?do=mvim');
        break;
    
    case 'addImage':
        $img = $_FILES['img'];
        if (isset($img['tmp_name'])) {
            move_uploaded_file("{$img['tmp_name']}","../upload/{$img['name']}");
        }
        $Image->save(['img'=>$img['name']]);
        to('../back.php?do=image');
        break;
    
    case 'editImage':
        $img = $_FILES['img'];
        if (isset($img['tmp_name'])) {
            move_uploaded_file("{$img['tmp_name']}","../upload/{$img['name']}");
        }
        $Image->save(['id'=>$_POST['id'],'img'=>$img['name']]);
        to('../back.php?do=image');
        break;
    
    case 'addNews':
        $News->save(['text'=>$_POST['text']]);
        to('../back.php?do=news');
        break;
    
    case 'addAdmin':
        $Admin->save(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
        to('../back.php?do=admin');
        break;
    
    case 'addMenu':
        $Menu->save(['text'=>$_POST['text'],'url'=>$_POST['url']]);
        to('../back.php?do=menu');
        break;
    
    case 'editMenu':
        if (isset($_POST['del'])) {
            foreach ($_POST['id'] as $key => $value) {
                if (in_array($value,$_POST['del'])) {
                    $Menu->del($value);
                }
            }
        }

        if (isset($_POST['text1'])&&isset($_POST['url1'])) {
            foreach ($_POST['id'] as $key => $value) {
                $Menu->save(['id'=>$value,'text'=>$_POST['text1'][$key],'url'=>$_POST['url1'][$key]]);                
            }
        }

        if (isset($_POST['text2'])&&isset($_POST['url2'])) {
            foreach ($_POST['text2'] as $key => $value) {
                $Menu->save(['text'=>$value,'url'=>$_POST['url2'][$key],'parent'=>$_POST['parent']]);                
            }
        }
        to('../back.php?do=menu');

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

?>