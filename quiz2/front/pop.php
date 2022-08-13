<fieldset>
    <legend>目前位置：首頁＞人氣文章</legend>

    <table class="w100 ma">
        <tr>
            <td class="w30 ">標題</td>
            <td class="w50 ">內容</td>
            <td class="w20 ">人氣</td>
        </tr>

        <?php

        $count = $News->math("count","id", ['sh'=>1]);  //共幾筆
        $div = 5;                            //每頁有幾筆
        $page = ceil($count / $div);            //共幾頁
        $now = $_GET['p'] ?? 1;               //現在頁數
        $start = ($now - 1) * $div;              //每頁從第幾筆開始
        $news = $News->all(['sh' => 1],"order by `good` desc limit $start , $div");
        foreach ($news as  $value) {
        ?>

            <tr>
                <td class="clo"><?= $value['title'] ?></td>
                <td><?= mb_substr($value['text'],0,20) ?>...</td>
                <td><?= $value['good'] ?>個人說讚</td>
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
    <a href="?do=pop&p=<?=$before?>"><</a>
<?php
    }
?>


<?php
    for ($i=1; $i <= $page; $i++) { 
        $font = ($now==$i)?"24px":"18px";
?>
    <a style="font-size: <?=$font?>;" href="?do=pop&p=<?=$i?>"><?=$i?></a>
<?php
    }

?>


<?php
    if (($now + 1)<=$page) {
        $after = $now + 1
?>
    <a href="?do=pop&p=<?=$after?>">></a>
<?php
    }
?>
    </div>
</fieldset>