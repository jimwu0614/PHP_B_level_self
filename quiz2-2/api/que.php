<?php
include "../base.php";

$subject = $_POST['text'];
$opts = $_POST['opts']??[];


// dd($opts);

$Que->save(['text'=>$subject]);
$subjectId = $Que->find(['text'=>$subject])['id'];

foreach ($opts as $key => $value) {
    if (!empty($value)) {
        // echo $key."->".$value."<br>";
        $Que->save(['subject'=>$subjectId,'text'=>$value]);
    }
}


?>