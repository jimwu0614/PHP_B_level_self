<?php
include "../base.php";


$user = $User->all();

// dd($user);
foreach($user as $key=>$value){
echo '<tr>';
echo "<td>{$value['acc']}</td>";
echo "<td>{$value['pw']}</td>";
echo "<td><input type='checkbox' name='del[]' value='{$value['id']}'></td>";
echo '</tr>';
}
?>