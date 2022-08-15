<?php
include "../base.php";

$img = $_FILES['img'];
$from = $_POST['from'];
$id = $_POST['id'];

switch ($from) {
    case 'title_update':
        // $data=[];
        // $data['id']=$id;
        if(isset($img['tmp_name'])){
            move_uploaded_file($img['tmp_name'],"../img/{$img['name']}");
        }

        $Title->save(['id'=>$id,'img'=>$img['name']]);
        to('../back.php?do=title');
        
        break;

    case 'title_add':
        
        if(isset($img['tmp_name'])){
            move_uploaded_file($img['tmp_name'],"../img/{$img['name']}");
        }
        $text = $_POST['text'];

        $Title->save(['text'=>$text,'img'=>$img['name'],'sh'=>0]);
        to('../back.php?do=title');
        
        break;

    case 'ad':
        
        $text = $_POST['text'];

        $Ad->save(['text'=>$text,'sh'=>1]);
        to('../back.php?do=ad');


        
        break;

    case 'ad':
        
        


        
        break;

    case 'ad':
        
        


        
        break;

    case 'ad':
        
        


        
        break;

    case 'ad':
        
        


        
        break;

    case 'ad':
        
        


        
        break;

    case 'ad':
        
        


        
        break;

    


}





// dd( $img);
// echo "<br>";
// echo $from;
// echo "<br>";
// echo $id;
// echo "<br>";

?>