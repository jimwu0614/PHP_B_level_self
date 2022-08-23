<?php
include "../base.php";

$from = $_POST['from'];


switch ($from) {
    case 'Title':
        $text = $_POST['text'];
        $sh = $_POST['sh'];

        $id = $_POST['id'];
        if (!empty($_POST['del'])) {
            $del = $_POST['del'];
            foreach ($del as $value) {
                if(in_array($value,$_POST['id'])){
                $Title->del($value);
                }
            }
        }

        foreach ($id as $key => $value) {
            if ($sh==$value) {
                $Title->save(['id'=>$value,'text'=>$text[$key],'sh'=>1]);
                
            }else{
                $Title->save(['id'=>$value,'text'=>$text[$key],'sh'=>0]);
            }
        }

        to("../back.php?do=title");
        break;
    
        case 'Ad':
            $id = $_POST['id'];

            if(isset($_POST['sh'])){
                $sh = $_POST['sh'];
            }
            $text = $_POST['text'];
    
            $id = $_POST['id'];
            if (!empty($_POST['del'])) {
                $del = $_POST['del'];
                foreach ($del as $value) {
                    if(in_array($value,$_POST['id'])){
                    $Ad->del($value);
                    }
                }
            }

            foreach ($id as $key => $value) {
                if (isset($_POST['sh']) && in_array($value,$sh)) {
                    $Ad->save(['id'=>$value,'text'=>$text[$key],'sh'=>1]); 
                }else{
                    $Ad->save(['id'=>$value,'text'=>$text[$key],'sh'=>0]);
                }
            }

            to("../back.php?do=ad");
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