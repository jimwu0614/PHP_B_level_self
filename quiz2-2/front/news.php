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
            <td class="w30 clo title" ><?=$value['title']?></td>
            <td class="w40 ">
                <span><?=$text?>...</span>
                <span style="display: none;"><?=$value['text']?></span>
            </td>
            <td class="w30 ">
        <?php
            if (isset($_SESSION['user'])) {
                $logs = $Log->math("count",'id',['user'=>$_SESSION['user'],'good'=>$value['id']]);
                if ($logs) {
                    echo "<span class='good blue' data-id=".$value['id']." id='good{$value['id']}'>收回讚</span>";
                } else {
                    echo "<span class='good blue' data-id=".$value['id']." id='good{$value['id']}'>讚</span>";
                    # code...
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
        if ($now!=1) {
            $per = ($now - 1) ;
            echo "<a href='?do=news&p=$per'><</a>";
        }


        for ($i=1; $i <=$pages ; $i++) { 
            $size = ($now==$i)?'24px':'18px';
            echo "<a style='font-size: $size;' href='?do=news&p=$i'>$i</a>";
        }




        if ($now<$pages) {
            $next = ($now + 1) ;
            echo "<a href='?do=news&p=$next'>></a>";
        }
    ?>
</fieldset>

<script>
    $(".title").on("click",function(){
        $(this).next().children().toggle();
    })



    $('.blue').on("click",function(){
        let good = $(this).text();
        let id = $(this).data('id')
        // console.log(id);
        if (good=='讚') {
            $(this).text('收回讚');
        }else if(good=='收回讚'){
            $(this).text('讚');
        }

        $.post("./api/good.php",{id,good},(res)=>{
            console.log(res);
        })
    })


</script>