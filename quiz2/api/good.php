<?php
include "../base.php";
$type = $_POST['type'];
$id = $_POST['id'];
$user = $_SESSION['user'];

$news = $News->find($id);

switch ($type) {
    case '讚':
        $news['good']++;
        $News->save($news);
        $Log->save(['news'=>$id,'user'=>$user]);
        break;
        
        
    case '收回讚':
        $news['good']--;
        $News->save($news);
        $Log->del(['news'=>$id,'user'=>$user]);
        break;
    
    
}



?>