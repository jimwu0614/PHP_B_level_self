<style>
	input[type=text]{
		width: 80%;
	}
</style>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
	<p class="t cent botli">進站總人數管理</p>
	<form method="post" action="./api/update.php">
		<table width="100%">
			<tbody>
				<tr class="yel">
					<td width="45%">進站總人數:</td>
					<td style="background: #FFF;"><input type="text" name="total" value="<?=$Total->find(1)['total']?>" ></td>
					<input type="hidden" name="from" value="total">
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