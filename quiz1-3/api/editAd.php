<?php
include "../base.php";

dd($_POST);

if(isset($_POST['del'])){
    foreach ($_POST['id'] as $key => $del) {
        if (in_array($del,$_POST['del'])) {
            $Ad->del(['id'=>$del]);
        }
    }
}



if(isset($_POST['sh'])){
    foreach ($_POST['sh'] as $key => $value) {
        if (in_array($value,$_POST['sh'])) {
            $Ad->save(['id'=>$value,'sh'=>1]);
        }else{
            $Ad->save(['id'=>$value,'sh'=>0]);
        }
    }
}


to("../back.php?do=ad")

?>
