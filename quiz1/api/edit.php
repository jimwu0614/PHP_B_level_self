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
        $text = $_POST['text'];
        
        $id = $_POST['id'];
        if(isset($_POST['sh'])){
            $sh = $_POST['sh'];
        }

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

    case 'Mvim':
        $id = $_POST['id'];
        
        if(isset($_POST['sh'])){
            $sh = $_POST['sh'];
        }

        $id = $_POST['id'];
        if (!empty($_POST['del'])) {
            $del = $_POST['del'];
            foreach ($del as $value) {
                if(in_array($value,$_POST['id'])){
                $Mvim->del($value);
                }
            }
        }

        foreach ($id as $key => $value) {
            if (isset($_POST['sh']) && in_array($value,$sh)) {
                $Mvim->save(['id'=>$value,'sh'=>1]); 
            }else{
                $Mvim->save(['id'=>$value,'sh'=>0]);
            }
        }

        to("../back.php?do=mvim");

    break;

    case 'Image':
        $id = $_POST['id'];
        
        if(isset($_POST['sh'])){
            $sh = $_POST['sh'];
        }

        $id = $_POST['id'];
        if (!empty($_POST['del'])) {
            $del = $_POST['del'];
            foreach ($del as $value) {
                if(in_array($value,$_POST['id'])){
                $Image->del($value);
                }
            }
        }

        foreach ($id as $key => $value) {
            if (isset($_POST['sh']) && in_array($value,$sh)) {
                $Image->save(['id'=>$value,'sh'=>1]); 
            }else{
                $Image->save(['id'=>$value,'sh'=>0]);
            }
        }

        to("../back.php?do=image");

        break;

    case 'Total':
        $total = $_POST['total'];

        $Total->save(['id'=>1,'total'=>$total]);
        to("../back.php?do=total");
        break;


    case 'Bottom':
        $bottom = $_POST['text'];

        $Bottom->save(['id'=>1,'text'=>$bottom]);
        to("../back.php?do=bottom");
        break;
 
    
    case 'News':
        $text = $_POST['text'];
        
        $id = $_POST['id'];
        if(isset($_POST['sh'])){
            $sh = $_POST['sh'];
        }

        $id = $_POST['id'];
        if (!empty($_POST['del'])) {
            $del = $_POST['del'];
            foreach ($del as $value) {
                if(in_array($value,$_POST['id'])){
                $News->del($value);
                }
            }
        }

        foreach ($id as $key => $value) {
            if (isset($_POST['sh']) && in_array($value,$sh)) {
                $News->save(['id'=>$value,'text'=>$text[$key],'sh'=>1]); 
            }else{
                $News->save(['id'=>$value,'text'=>$text[$key],'sh'=>0]);
            }
        }

        to("../back.php?do=news");
        break;
    
    case 'Admin':
        $acc = $_POST['acc'];
        $pw = $_POST['pw'];

        $id = $_POST['id'];
        if (!empty($_POST['del'])) {
            $del = $_POST['del'];
            foreach ($del as $value) {
                if(in_array($value,$_POST['id'])){
                $Admin->del($value);
                }
            }
        }

        foreach ($id as $key => $value) {
                $Admin->save(['id'=>$value,'acc'=>$acc[$key],'pw'=>$pw[$key]]); 
        }
        to("../back.php?do=admin");


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