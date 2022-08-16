<div class="di" style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
	<marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
		<?php
		$ads = $Ad->all(['sh' => 1]);
		foreach ($ads as  $value) {
			echo $value['text'] . "  /  ";
		}
		?>
	</marquee>
	<div style="height:32px; display:block;"></div>
	<!--正中央-->

	<h1>更多最新消息顯示區</h1>

	<hr>

	<?php
	        $count = $News->math("count","id");
			$div = 5; 
			$pages = ceil($count/$div);
			$now = $_GET['p']??1;  //現在第幾頁
			$start = ($now - 1 ) * $div;
		
			$order = $start + 1 
	?>

		<ol class="ssaa" start="<?=$order?>" style="list-style-type:decimal;">
			<?php
				$news = $News->all(['sh'=>1],"limit $start,$div");
				foreach ($news as   $new) {
					echo '<li class="sswww">';
					echo mb_substr($new['text'],0,15);
					echo '<div class="all" style="display:none;">';
					echo $new['text'];
					echo '</div>';
					echo '...</li>';
				}	
			?>
		</ol>






	
        <div class="cent">
        <?php
            if($now - 1>0){
                $before = $now - 1
        ?>
            <a href="?do=news&p=<?=$before?>"><</a>
        <?php
            }
        ?>
        
        <?php
        for ($i=1; $i <= $pages; $i++) {
            $font = ($now==$i)?"24px":"18px";
        ?>
        <a style="font-size: <?=$font?>;" href="?do=news&p=<?=$i?>"><?=$i?></a>
        <?php
        }
        
        ?>
        <?php
            if(($now + 1)<=$pages){
                $after = $now - 1
        ?>
            <a href="?do=news&p=<?=$after?>">></a>
        <?php
            }
        ?>
    </div>
</div>
<div id="alt" style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
</div>
<script>
	$(".sswww").hover(
		function() {
			$("#alt").html("" + $(this).children(".all").html() + "").css({
				"top": $(this).offset().top - 50
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