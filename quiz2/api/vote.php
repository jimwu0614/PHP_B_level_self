<?php
include "../base.php";


$id = $_POST['id'];
$opt = $_POST['opt'];
$count = $Que->find($id)['count'];
$count++;
$subcount = $Que->find($opt)['count'];
$subcount++;


echo $id."<br>";
echo $opt."<br>";
echo $count."<br>";
// echo "$queid";
$Que->save(['id'=>$id,'count'=>$count]);
$Que->save(['id'=>$opt,'count'=>$subcount]);

to("./index.php?do=que");

?>