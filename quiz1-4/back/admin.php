<style>

    input[type=text],input[type=password]
    {
        width:80%;
    }
</style>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">管理者帳號管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td class="w40">帳號</td>
                    <td class="w40">密碼/td>
                    <td class="w20">刪除</td>
                </tr>
                <?php
                $rows = $Admin->all();
                foreach ($rows as $key => $value) {
                ?>
                <tr>
                    <td><input type="text" name="acc[]" value="<?=$value['acc']?>"></td>
                    <td><input type="password" name="pw[]" value="<?=$value['pw']?>"></td>
                    <td><input type="checkbox" name="del[]" value="<?=$value['id']?>"></td>
                </tr>
                <input type="hidden" name="from" value="Admin">
                <input type="hidden" name="id[]" value="<?=$value['id']?>">
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','model.php?from=addAdmin')" value="新增管理者帳號"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>