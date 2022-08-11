<?php
include_once "../base.php";

$ids = $_POST['id'];
// dd($id);
foreach ($ids as  $id) {
    $row=$News->find($id);
    if(isset($_POST['sh']) && in_array($id,$_POST['sh'])){
        $row['sh']=1;
    }else{
       $row['sh']=0;
   }
   $News->save($row);
}

// $show = $News->all();
// if (!empty($_POST['sh'])) {

//     foreach ($show as  $value){
   
//     dd($_POST['sh']);

//         if (in_array($value['id'],$_POST['sh'])) {
//             $value["sh"]=1;
//         }else{
//             $value["sh"]=0;
//         }
//         $News->save($value);

//     }
// }else{
//     foreach ($show as  $value){
//         $value["sh"]=0;
//         $News->save($value);
//     }
// }


if (!empty($_POST['del'])) {
    # code...
    $list = $_POST['del'];
    echo "del";

    // dd($list);
    foreach ($list as $value){
        echo $value;
        
        // $News->del($value);
    };
}

to("./back.php?do=news");
?>