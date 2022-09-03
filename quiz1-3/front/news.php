<div class="di" style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
    <marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
        <?php
        $rows = $Ad->all(['sh' => 1]);
        foreach ($rows as $key => $value) {
            echo "{$value['text']}";
        }
        ?>
    </marquee>

    <div style="height:32px; display:block;">
        <h2 class="cent">更多最新消息顯示區</h2>
        <hr>
        <ol>

        
        <?php
        $count = $News->math('count', 'id');
        $div = 5;
        $pages = ceil($count / $div);
        $now = $_GET['p'] ?? '1';
        $start = ($now - 1) * $div;
        $rows = $News->all("limit $start,$div");
        foreach ($rows as $key => $value) {
        ?>
            <li class="sswww"><?=mb_substr($value['text'],0,15)?>
                <span class="all"><?=$value['text']?></span>
            </li>
        <?php
        }
        ?>
        </ol>
    </div>
    <div id="alt" style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: -150px; left: 200px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
    </div>

    <!--正中央-->
    <div class="cent page">

        <?php
        if ($now > 1) {
            $pre = ($now - 1);
            echo "<a href='?do=news&p=$pre'><</a>";
        }
        for ($i = 1; $i <= $pages; $i++) {
            $size = ($i == $now) ? '24px' : '18px';
            echo "<a style='font-size: $size;' href='?do=news&p=$i'>$i</a>";
        }
        if ($now < $pages) {
            $aft = ($now + 1);
            echo "<a href='?do=news&p=$aft'>></a>";
        }

        ?>
    </div>
</div>
<script>
    $(".sswww").hover(
        function() {
            $("#alt").html("" + $(this).children(".all").html() + "").css({
                "top": $(this).offset().top - 150
            })
            $("#alt").show()
        }
    )
    $(".sswww").mouseout(
        function() {
            $("#alt").hide()
        }
    )
</script>