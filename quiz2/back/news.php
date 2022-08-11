
<style>
    table{
        width: 80%;
        margin: 5px auto;
        text-align: center;
    }
    .head1{
        width: 10%;
    }
    .head2{
        width: 70%;
    }
    .head3{
        width: 10%;
    }
    .head4{
        width: 10%;
    }

    .ct{
        margin: 3px 300px;
    }
    

</style>

<form action="./api/editnews.php" method="post">


<table >
    <tr class="head">
        <td class="head1">編號</td>
        <td class="head2">標題</td>
        <td class="head3">顯示</td>
        <td class="head4">刪除</td>
    </tr>


    <?php

    $count = $News->math("count","id");  //共幾筆
    $div = 3;                            //每頁有幾筆
    $page = ceil($count / $div);            //共幾頁
    $now = $_GET['p']??1;               //現在頁數
    $start = ($now - 1)*$div;              //每頁從第幾筆開始
    $news = $News->all("limit $start , 3");

    // dd($news);
    foreach ($news as  $value) {
?>
        <tr>
            <td class="clo"><?=$value['id']?>.</td>
            <td><?=$value['title']?></td>
            <td><input type="checkbox" name="sh[]" value="<?=$value['id']?>" <?=($value['sh']==1)?'checked':''?> ></td>
            <td><input type="checkbox" name="del[]" value="<?=$value['id']?>"></td>
            <input type="hidden" name="id[]" value="<?=$value['id']?>">
        </tr>
<?php
    }
    ?>


</table>

    <div class="ct">
<?php
    if ($now - 1>0) {
        $before = $now - 1
?>
    <a href="?do=news&p=<?=$before?>"><</a>
<?php
    }
?>

<?php
    for ($i=1; $i <= $page; $i++) { 
        $font = ($now==$i)?"24px":"18px";
?>
    <a style="font-size: <?=$font?>;" href="?do=news&p=<?=$i?>"><?=$i?></a>
<?php
    }

?>




<?php
    if (($now + 1)<=$page) {
        $after = $now + 1
?>
    <a href="?do=news&p=<?=$after?>">></a>
<?php
    }
?>
    </div>
    
    <input type="submit" value="確定修改" class="ct">



</form>