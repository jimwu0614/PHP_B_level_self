<?php
include "../base.php";

dd($_POST);

if(isset($_POST['del'])){
    foreach ($_POST['id'] as $key => $del) {
        if (in_array($del,$_POST['del'])) {
            $Image->del(['id'=>$del]);
        }
    }
}



if(isset($_POST['sh'])){
    foreach ($_POST['id'] as $key => $value) {
        if (in_array($value,$_POST['sh'])) {
            echo "123";
            $Image->save(['id'=>$value,'sh'=>1]);
        }else{
            echo "456";
            $Image->save(['id'=>$value,'sh'=>0]);
        }
    }
}else{
    foreach ($_POST['id'] as $key => $value) {
        $Image->save(['id'=>$value,'sh'=>0]);
    }
}


to("../back.php?do=image")

?>