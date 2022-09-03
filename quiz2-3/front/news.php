<fieldset>
    <legend>目前位置：首頁＞最新文章區</legend>

    <table class="w80 ma">
        <tr>
            <td class="w30">標題</td>
            <td class="w40">內容</td>
            <td class="w30"></td>
        </tr>

    <?php
        $count = $News->math('count','id',['sh'=>1]);
        $div = 5;
        $pages = ceil($count / $div);
        $now = $_GET['p']??'1';
        $start = ($now - 1)*$div;
        $rows = $News->all(['sh'=>1],"limit $start,$div");
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
            $log = $Log->math('count','id',['user'=>$_SESSION['user'],'good'=>$value['id']]);
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
    <?php

        if ($now > 1) {
            $pre = ($now - 1);
           echo" <a href='index.php?do=news&p=$pre'><</a>";

        }

        for ($i=1; $i <=$pages ; $i++) { 
            $size = ($i==$now)?'24px':'18px';
            echo" <a style='font-size: $size;'  href='index.php?do=news&p=$i'>$i</a>";
        }


        if ($now < $pages) {
            $aft = ($now + 1);
           echo" <a href='index.php?do=news&p=$aft'>></a>";

        }


    ?>
</fieldset>
<script >
    $('.title').on('click',function(){
        $(this).next().children().toggle();
    })

    $('.good').on('click',function(){
        let like = $(this).text();
        let id = $(this).data('id');
        // console.log(like);
        if (like=="讚") {
            $(this).text("收回讚");
                $.post("./api/good.php",{like,id},(res)=>{
                    console.log(res);
                })
        } else if(like=="收回讚"){
            $(this).text("讚");
                $.post("./api/good.php",{like,id},(res)=>{
                    console.log(res);
                })
        }

    })


    

</script>