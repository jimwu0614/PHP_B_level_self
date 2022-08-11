<?php
include "../base.php";

$que=$_POST['que'];
$opts=$_POST['opt'];

if (!empty($_POST['que'])) {
    // $Que->save(['text'=>$que,'count'=>0, 'queid'=>0]);
}
if (!empty($_POST['opt'])) {
    $subject=$Que->find(['text'=>$que]);
    foreach($opts as $opt){

        $queid=$subject['queid'];
        echo "<br>";
        
        dd($opt);
        echo "<hr>";
        $Que->save(['text'=>$opt,'queid'=>$subject['id']]);
    }
    
}


to("../back.php?do=que")
// dd($que);
// echo "<br>";
// dd($opt);

?>