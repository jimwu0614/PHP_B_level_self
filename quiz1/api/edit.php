<?php
include "../base.php";

$from = $_POST['from'];

switch ($from) {
    case 'Title':
    $id = $_POST['id'];
        if (!empty($_POST['del'])) {
            $del = $_POST['del'];
            foreach ($del as $value) {
                if(in_array($value,$_POST['id'])){
                $Title->del($value);
                }
            }
        }

        $text = $_POST['text'];
        $sh = $_POST['sh'];

        foreach ($id as $key => $value) {
            if ($sh==$value) {
                $Title->save(['id'=>$value,'text'=>$text[$key],'sh'=>1]);
                
            }else{
                $Title->save(['id'=>$value,'text'=>$text[$key],'sh'=>0]);
            }
        }

        to("../back.php?do=title");
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
    
    case 'value':
        # code...
        break;
    

}












?>