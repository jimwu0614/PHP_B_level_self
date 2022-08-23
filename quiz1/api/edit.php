<?php
include "../base.php";

$from = $_POST['from'];

switch ($from) {
    case 'total':
        $total = $_POST['total'];

        $Total->save(['id'=>1,'total'=>$total]);
        to("../back.php?do=total");
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
    
 
    case 'value':
        # code...
        break;
    
 
    case 'value':
        # code...
        break;
    
 
}

?>