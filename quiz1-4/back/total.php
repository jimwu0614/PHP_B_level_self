

<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">進站總人數管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="45%">進站總人數</td>
                    <td width="45%"><input type="text" name="total" value="<?=$Total->find(1)['total']?>"></td>
                </tr>

            </tbody>
        </table>
        <div class="ct">
            <input type="hidden" name="from" value="Total">
            <input type="submit" value="修改確定"><input type="reset" value="重置"></td>
        </div>

    </form>
</div>