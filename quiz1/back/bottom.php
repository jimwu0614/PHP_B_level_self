<style>
	input[type=text]{
		width: 80%;
	}
</style>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
	<p class="t cent botli">頁尾版權資料管理</p>
	<form method="post" action="./api/update.php">
		<table width="100%">
			<tbody>
				<tr class="yel">
					<td width="45%">頁尾版權資料:</td>
					<td style="background: #FFF;"><input type="text" name="text" value="<?=$Bottom->find(1)['text']?>" ></td>
					<input type="hidden" name="from" value="Bottom">
				</tr>
			</tbody>
		</table>
		<table style="margin-top:40px; width:70%;">
			<tbody>
				<tr>
					<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
				</tr>
			</tbody>
		</table>

	</form>
</div>