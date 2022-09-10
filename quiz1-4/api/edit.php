<?php
include_once "../base.php";
$from = $_POST['from'];
switch ($from) {
    case 'Title':

        if (isset($_POST['del'])) {
            foreach ($_POST['id'] as $key => $value) {
                if (in_array($value,$_POST['del'])) {
                    $Title->del($value);
                }
            }
        }

        foreach ($_POST['id'] as $key => $value) {
            if ($_POST['sh']==$value) {
                $Title->save(['id'=>$value,'text'=>$_POST['text'][$key],'sh'=>1]);
            }else{
                $Title->save(['id'=>$value,'text'=>$_POST['text'][$key],'sh'=>0]);
            }
        }

        to('../back.php?do=title');
        break;
    
    case 'Ad':
        if (isset($_POST['del'])) {
            foreach ($_POST['id'] as $key => $value) {
                if (in_array($value,$_POST['del'])) {
                    $Ad->del($value);
                }
            }
        }

        if (isset($_POST['sh'])) {
            foreach ($_POST['id'] as $key => $value) {
                if (in_array($value,$_POST['sh'])) {
                    $Ad->save(['id'=>$value,'text'=>$_POST['text'][$key],'sh'=>1]);
                }else{
                    $Ad->save(['id'=>$value,'text'=>$_POST['text'][$key],'sh'=>0]);
                }
            }
        }

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
    
    case 'value':

        break;
    
    case 'value':

        break;
    
    case 'value':

        break;
    
 
}

?>