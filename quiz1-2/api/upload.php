<?php
include "../base.php";

$from = $_POST['from'];
$id = $_POST['id'];

if(isset($_FILES['img'])){
    $img = $_FILES['img'];
}

switch ($from) {
    case 'Title_update':

        if(isset($img['tmp_name'])){
            move_uploaded_file($img['tmp_name'],"../img/{$img['name']}");
        }

        $Title->save(['id'=>$id,'img'=>$img['name']]);
        to('../back.php?do=title');
        
        break;

    case 'Title_add':
        
        if(isset($img['tmp_name'])){
            move_uploaded_file($img['tmp_name'],"../img/{$img['name']}");
        }
        $text = $_POST['text'];

        $Title->save(['text'=>$text,'img'=>$img['name'],'sh'=>0]);
        to('../back.php?do=title');
        
        break;

    case 'Ad':
        
        $text = $_POST['text'];

        $Ad->save(['text'=>$text,'sh'=>1]);
        to('../back.php?do=ad');


        
        break;

    case 'Mvim_add':
        
        if(isset($img['tmp_name'])){
            move_uploaded_file($img['tmp_name'],"../img/{$img['name']}");
        }


        $Mvim->save(['img'=>$img['name'],'sh'=>1]);
        to('../back.php?do=mvim');
        
        
        break;

    case 'Mvim_update':
        
        if(isset($img['tmp_name'])){
            move_uploaded_file($img['tmp_name'],"../img/{$img['name']}");
        }

        $Mvim->save(['id'=>$id,'img'=>$img['name']]);
        to('../back.php?do=mvim');


        
        break;

    case 'Image_add':
        
        if(isset($img['tmp_name'])){
            move_uploaded_file($img['tmp_name'],"../img/{$img['name']}");
        }


        $Image->save(['img'=>$img['name'],'sh'=>1]);
        to('../back.php?do=image');

        
        break;

    case 'Image_update':
        
        if(isset($img['tmp_name'])){
            move_uploaded_file($img['tmp_name'],"../img/{$img['name']}");
        }

        $Image->save(['id'=>$id,'img'=>$img['name']]);
        to('../back.php?do=image');

        
        break;

    case 'News':
        
        $text = $_POST['text'];
        
        $News->save(['text'=>$text[0],'sh'=>1]);
        to('../back.php?do=news');


        break;

    case 'Admin':
        
                
        $acc = $_POST['acc'];
        $pw = $_POST['pw'];

        $Admin->save(['acc'=>$acc,'pw'=>$pw]);
        to('../back.php?do=admin');



        
        break;

    
    case '__':
        
        


        
        break;

    
    case '__':
        
        


        
        break;

    
    case '__':
        
        


        
        break;

    


}





// dd( $img);
// echo "<br>";
// echo $from;
// echo "<br>";
// echo $id;
// echo "<br>";

?>