<style>

</style>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
	<p class="t cent botli">最新消息資料管理</p>
	<form method="post"   action="./api/edit.php">
		<table width="100%" class="cent">
			<tbody>
				<tr class="yel">
					<td class="w80">最新消息資料</td>
					<td class="w10">顯示</td>
					<td class="w10">刪除</td>
				</tr>
				<?php
					$count = $Image->math('count','id');
					$div = 3;
					$pages = ceil($count/$div);
					$now = $_GET['p']??1;
					$start = ($now - 1)* $div;
					$rows = $News->all("limit $start,$div");
					foreach ($rows as $key => $value) {
				?>
				<tr >
					<td><textarea name="text[]"  cols="75" rows="3"><?=$value['text']?></textarea></td>
					<td><input type="checkbox" name="sh[]" value="<?=$value['id']?>" <?=$value['sh']==1?'checked':''?>></td>
					<td><input type="checkbox" name="del[]" value="<?=$value['id']?>"></td>
					<input type="hidden" name="id[]" value="<?=$value['id']?>">
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
		<div class="cent">


<?php
		if($now!=1){
			$pre = ($now - 1); 
			echo "<a href='?do=news&p=$pre'><</a>";
		}

		
		for ($i=1; $i<=$pages ; $i++) { 
			$size = ($i==$now) ? "24px" : "18px" ;
			echo "<a style='font-size: $size;' href='?do=news&p=$i'>$i</a>";

		}


		if($now<$pages){
			$aft = ($now + 1); 
			echo "<a href='?do=news&p=$aft'>></a>";
		}
?>

</div>
		<table style="margin-top:40px; width:70%;">
			<tbody>
				<tr>
					<input type="hidden" name="from" value="News">
					<td width="200px"><input type="button" onclick="op('#cover','#cvr','modal.php?from=News_add')" value="新增最新消息資料"></td>
					<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
				</tr>
			</tbody>
		</table>

	</form>
</div>