
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

    $count = $News->math("count","id");
    $page = ceil($count / 3);
    // echo $page;
    // $now = get['']
    $news = $News->all();

    // dd($news);
    foreach ($news as  $value) {
?>
        <tr>
            <td class="clo"><?=$value['id']?>.</td>
            <td><?=$value['title']?></td>
            <td><input type="checkbox" name="sh[]" value="<?=$value['id']?>" <?=($value['sh']==1)?'checked':''?> ></td>
            <td><input type="checkbox" name="del[]" value="<?=$value['id']?>"></td>
        </tr>
<?php
    }
    ?>


</table>
 <input type="submit" value="確定修改" class="ct">

    

</form>