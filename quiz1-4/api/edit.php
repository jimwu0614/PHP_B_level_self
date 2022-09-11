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
    
    case 'Mvim':

        if (isset($_POST['del'])) {
            foreach ($_POST['id'] as $key => $value) {
                if (in_array($value,$_POST['del'])) {
                    $Mvim->del($value);
                }
            }
        }

        if (isset($_POST['sh'])) {
            foreach ($_POST['id'] as $key => $value) {
                if (in_array($value,$_POST['sh'])) {
                    $Mvim->save(['id'=>$value,'sh'=>1]);
                }else{
                    $Mvim->save(['id'=>$value,'sh'=>0]);
                }
            }
        }

        to('../back.php?do=mvim');
        break;
    
    case 'Image':
        if (isset($_POST['del'])) {
            foreach ($_POST['id'] as $key => $value) {
                if (in_array($value,$_POST['del'])) {
                    $Image->del($value);
                }
            }
        }

        if (isset($_POST['sh'])) {
            foreach ($_POST['id'] as $key => $value) {
                if (in_array($value,$_POST['sh'])) {
                    $Image->save(['id'=>$value,'sh'=>1]);
                }else{
                    $Image->save(['id'=>$value,'sh'=>0]);
                }
            }
        }

        to('../back.php?do=image');
        break;
    
    case 'Total':
        $Total->save(['id'=>1,'total'=>$_POST['total']]);
        to('../back.php?do=total');
        break;
    
    case 'Bottom':
        $Bottom->save(['id'=>1,'text'=>$_POST['text']]);
        to('../back.php?do=bottom');
        break;
    
    case 'News':
        if (isset($_POST['del'])) {
            foreach ($_POST['id'] as $key => $value) {
                if (in_array($value,$_POST['del'])) {
                    $News->del($value);
                }
            }
        }

        if (isset($_POST['sh'])) {
            foreach ($_POST['id'] as $key => $value) {
                if (in_array($value,$_POST['sh'])) {
                    $News->save(['id'=>$value,'text'=>$_POST['text'][$key],'sh'=>1]);
                }else{
                    $News->save(['id'=>$value,'text'=>$_POST['text'][$key],'sh'=>0]);
                }
            }
        }

        to('../back.php?do=news');
        break;
    
    case 'Admin':
        if (isset($_POST['del'])) {
            foreach ($_POST['id'] as $key => $value) {
                if (in_array($value,$_POST['del'])) {
                    $Admin->del($value);
                }
            }
        }

        
        foreach ($_POST['id'] as $key => $value) {
            $Admin->save(['id'=>$value,'acc'=>$_POST['acc'][$key],'pw'=>$_POST['pw'][$key]]);
        }
        

        to('../back.php?do=admin');
        break;
    
    case 'Menu':
        if (isset($_POST['del'])) {
            foreach ($_POST['id'] as $key => $value) {
                if (in_array($value,$_POST['del'])) {
                    $Menu->del($value);
                }
            }
        }

       
            foreach ($_POST['id'] as $key => $value) {
                $Menu->save(['id'=>$value,'text'=>$_POST['text'][$key],'url'=>$_POST['url'][$key]]);                
            }
        
            to('../back.php?do=menu');
        break;
    

    
 
}

?>