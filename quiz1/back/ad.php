<style>

</style>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
	<p class="t cent botli">動態文字廣告管理</p>
	<form method="post"   action="./api/edit.php">
		<table width="100%">
			<tbody>
				<tr class="yel">
					<td class="w80">動態文字廣告</td>
					<td class="w10">顯示</td>
					<td class="w10">刪除</td>
				</tr>
				<?php
					$rows = $Ad->all();
					foreach ($rows as $key => $value) {
				?>
				<tr >
					<td><input class="w90" type="text" name="text[]" value="<?=$value['text']?>"></td>
					<td><input type="checkbox" name="sh[]" value="<?=$value['id']?>" <?=$value['sh']==1?'checked':''?>></td>
					<td><input type="checkbox" name="del[]" value="<?=$value['id']?>"></td>
					<input type="hidden" name="id[]" value="<?=$value['id']?>">
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
		<table style="margin-top:40px; width:70%;">
			<tbody>
				<tr>
					<input type="hidden" name="from" value="Ad">
					<td width="200px"><input type="button" onclick="op('#cover','#cvr','modal.php?from=Ad_add')" value="新增動態文字廣告"></td>
					<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
				</tr>
			</tbody>
		</table>

	</form>
</div>