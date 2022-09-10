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
        $Ad->save(['id'=>$_POST['id'],'img'=>$img['name']]);
        to('../back.php?do=ad');
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
    
    case 'value':

        break;
    
    case 'value':

        break;
    
    case 'value':

        break;
    
 
}

?>