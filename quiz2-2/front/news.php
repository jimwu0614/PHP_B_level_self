<style>
    .ma{
        margin-top: 30px;
    }
</style>

<fieldset>
    <legend>目前位置：首頁＞最新文章區</legend>
    <table class="ma w80">
        <tr>
            <td>標題</td>
            <td>內容</td>
            <td></td>
        </tr>
        <?php
            $count = $News->math('count','id',['sh'=>1]);
            $div = 5;
            $pages = ceil($count/$div);
            $now = $_GET['p']??1;
            $start = ($now - 1 ) * $div; 
            $rows = $News->all(['sh'=>1],"limit $start,$div");
            foreach ($rows as $key => $value) {
                $text = mb_substr($value['text'],0,20);
        ?>
        <tr>
            <td class="w30 clo"><?=$value['title']?></td>
            <td class="w40 "><?=$text?></td>
            <td class="w30 ">         </td>
        </tr>

        <?php
            }

        ?>
    </table>

    <?php
        if ($now!=1) {
            $per = ($now - 1) ;
            echo "<a href='?do=news&p=$per'><</a>";
        }







        if ($now==$pages) {
            $next = ($now + 1) ;
            echo "<a href='?do=news&p=$next'>></a>";
        }
    ?>
</fieldset>