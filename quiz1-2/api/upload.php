<?php
include "../base.php";

$from = $_POST['from'];


if(isset($_POST['id'])){
    $id = $_POST['id'];
}
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

    
    case 'Menu_add':
        
        $text = $_POST['text'];
        $url = $_POST['url'];

        $Menu->save(['text'=>$text,'url'=>$url,'sh'=>1]);
        to('../back.php?do=menu');



        
        break;

    
    case 'Menu_update':
        
        
        $texts = $_POST['text'];
        $urls = $_POST['url'];
        $subid = $_POST['subid'];
  

        if(isset($_POST['del'])){
            $del = $_POST['del'];
            foreach($del as $value){
                $Menu->del(['id'=>$value]);
            }
        }
   
        foreach ($subid as $key=>$value) {
            $Menu->save(['id'=>$value,'text'=>$texts[$key],'url'=>$urls[$key]]);
        }




        if (!empty($_POST['text2']) && !empty($_POST['url2'])) {

            $text2s = $_POST['text2'];
            $url2s = $_POST['url2'];

            foreach ($text2s as $key=>$text) {
   
                    $Menu->save(['text'=>$text,'url'=>$url2s[$key],'sh'=>1,'parent'=>$_POST['parent']]);

            }
        }
    


        to('../back.php?do=menu');

        
        break;

}








// dd( $img);
// echo "<br>";
// echo $from;
// echo "<br>";
// echo $id;
// echo "<br>";
