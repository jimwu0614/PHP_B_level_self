<?php
include "../base.php";

$Que->save(['text'=>$_POST['subject']]);

$subjectId = $Que->find(['text'=>$_POST['subject']])['id'];

foreach ($_POST['opts'] as $key => $value) {
    
    if (!empty($value)) {
        $Que->save(['text'=>$value,'parent'=>$subjectId]);

}

}

to('../back.php?do=que');
?>