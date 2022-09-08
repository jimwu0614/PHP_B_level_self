<fieldset>
    <legend>目前位置：首頁＞最新文章區</legend>

    <table class="ma w100">
        <tr>
            <td class="w30">標題</td>
            <td class="w50">內容</td>
            <td ></td>
        </tr>

        <?php
            $count = $News->math('count','id',['sh'=>1]);
            $div = 5;
            $pages = ceil($count / $div);
            $now = $_GET['p']??'1';
            $start = ($now - 1)* $div;
            $rows = $News->all(['sh'=>1],"limit $start,$div");
            foreach ($rows as $key => $value) {
        ?>
        <tr>
            <td class="clo title"><?=$value['title']?></td>
            <td>
                <span><?=mb_substr($value['text'],0,15)?>...</span>
                <span style="display: none;"><?=$value['text']?></span>
            </td>
            <td></td>
        </tr>
        <?php
            }
        ?>
    </table>
    
        <div class="ct" >
            <?php
            if ($now > 1) {
                $pev = $now - 1;
                echo "<a href='?do=news&p=$pev'><</a>";
            }
            for ($i=1; $i <=$pages ; $i++) { 
                $size = ($now==$i)?"24px":"18px";
                echo "<a style='font-size: $size;' href='?do=news&p=$i'>$i</a>";
            }
            if ($now < $pages) {
                $aft = $now + 1;
                echo "<a href='?do=news&p=$aft'>></a>";
            }
            ?>
        </div>
</fieldset>
<script>
    $(".title").on("click",function(){
        let gg = $(this).text()
        console.log(gg);
    })
</script>