<?php
include "../base.php";

dd($_POST);

if(isset($_POST['del'])){
    foreach ($_POST['id'] as $key => $del) {
        if (in_array($del,$_POST['del'])) {
            $News->del(['id'=>$del]);
        }
    }
}



if(isset($_POST['sh'])){
    foreach ($_POST['id'] as $key => $value) {
        if (in_array($value,$_POST['sh'])) {
            $News->save(['id'=>$value,'text'=>$_POST['text'][$key],'sh'=>1]);
        }else{
            $News->save(['id'=>$value,'text'=>$_POST['text'][$key],'sh'=>0]);
        }
    }
}


to("../back.php?do=news")

?>
