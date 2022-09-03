<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">頁尾版權管理</p>
    <form method="post" action="./api/editBottom.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td class="w70">頁尾版權:</td>
                    <td class="w30"><input type="text" name="text" value="<?=$Bottom->find(1)['text']?>"></td>
                </tr>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>