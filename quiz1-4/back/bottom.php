<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">頁尾版權資料管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="45%">頁尾版權資料</td>
                    <td width="45%"><input type="text" name="text" value="<?=$Bottom->find(1)['text']?>"></td>
                </tr>

            </tbody>
        </table>
        <div class="ct">
            <input type="hidden" name="from" value="Bottom">
            <input type="submit" value="修改確定"><input type="reset" value="重置"></td>
        </div>

    </form>
</div>