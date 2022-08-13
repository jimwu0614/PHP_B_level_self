<fieldset class="w100 ">
    <legend>目前位置：首頁＞最新文章區</legend>


    <table class="w100 ma">
        <tr >
            <td class="w30 ">標題</td>
            <td class="w50 ">內容</td>
            <td class="w20 "></td>
        </tr>

        <?php

        $count = $News->math("count","id", ['sh'=>1]);  //共幾筆
        $div = 5;                            //每頁有幾筆
        $page = ceil($count / $div);            //共幾頁
        $now = $_GET['p'] ?? 1;               //現在頁數
        $start = ($now - 1) * $div;              //每頁從第幾筆開始
        $news = $News->all(['sh' => 1],"limit $start , $div");
        foreach ($news as  $value) {
        ?>

            <tr >
                <td class="clo title"><?= $value['title'] ?></td>
                <td>
                    <span ><?= mb_substr($value['text'],0,20) ?>...</span>
                    <span  style='display:none'><?=nl2br($value['text']);?></span>
                </td>
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
</fieldset>

<script>
    $(".title").on("click",function(){
        $(this).next().children().toggle();
    })

</script>