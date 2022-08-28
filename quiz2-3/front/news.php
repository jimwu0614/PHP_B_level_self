<fieldset>
    <legend>目前位置：首頁＞最新文章區</legend>

    <table class="w80 ma">
        <tr>
            <td class="w30">標題</td>
            <td class="w40">內容</td>
            <td class="w30"></td>
        </tr>

    <?php
        $rows = $News->all(['sh'=>1]);
        foreach ($rows as $key => $value) {
    ?>
        <tr>
            <td class="clo title" ><?=$value['title']?></td>
            <td class="">
                <span><?=mb_substr($value['text'],0,10)?>...</span>
                <span style="display: none;"><?=$value['text']?></span>
            </td>
            <td class="">
    <?php
        if (isset($_SESSION['user'])) {
            $log = $Log->math('count','id',['user'=>$_SESSION['user']]);
            if ($log) {
                echo "<span data-id='{$value['id']}' class='blue good'>收回讚</span>";
            } else {
                echo "<span data-id='{$value['id']}' class='blue good'>讚</span>";
            }
        }                    
    ?>
            </td>
        </tr>
    <?php
            
        }
    ?>
    </table>
</fieldset>
<script>
    $('.title').on('click',function(){
        $(this).next().children().toggle();
    })

    $('.good').on('click',function(){
        let like = $(this).text();

        if (like=="讚") {
            $(this).text("收回讚");
                 
        } else if(like=="收回讚"){
            $(this).text("讚");
            
        }

    })


    

</script>