<style>
    .img{
        width: 25px;
    }
</style>
<fieldset>
    <legend>目前位置：首頁＞人氣文章區</legend>

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
            $rows = $News->all(['sh'=>1],"order by good desc limit $start,$div");
            foreach ($rows as $key => $value) {
        ?>
        <tr>
            <td class="clo title"><?=$value['title']?></td>
            <td>
                <span><?=mb_substr($value['text'],0,15)?>...</span>
                <div id="alerr" style="background:rgba(51,51,51,0.8); color:#FFF; min-height:100px; width:300px; position:fixed; display:none; z-index:9999; overflow:auto;">
		        <pre id="ssaa"><?=$value['text']?></pre>
	            </div>
            </td>
            <td>
                <span><?=$value['good']?>個人說<img class="img" src="./icon/02B03.jpg" alt="">-</span>
                <?php
                if (isset($_SESSION['user'])) {
                    $good = $Log->math('count','id',['user'=>$_SESSION['user'],'good'=>$value['id']]);
                    if ($good) {                        
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
    $(".title").on("mouseover",function(){
         $(this).next().children().toggle()
    })
    $(".title").on("mouseout",function(){
         $(this).next().children().toggle()
    })
    $(".good").on("click",function(){
        let good = $(this).text();
        let id = $(this).data('id');
        console.log(id);
        if (good=="讚") {
            $(this).text('收回讚')
        } else {
            $(this).text('讚')
        }
        $.post("./api/good.php",{good,id},()=>{
            location.reload()
        })
    })
</script>