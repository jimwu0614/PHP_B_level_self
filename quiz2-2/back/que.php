<fieldset>
    <legend>目前位置：首頁＞新增問卷</legend>

    <form action="./api/que.php" method="post">
        <table class="w80 ma ">
            <tr>
                <td class="clo w50">問卷名稱</td>
                <td class="w50"><input type="text" name="text"></td>
            </tr>
            <tr id="tbody">
                <td>選項 <input type="text" name="opts[]"></td>
                <td>
                    <button type="button" onclick="more()">更多</button>
                </td>

            </tr>
            <tr>
                <td>
                    <button type="submit">新增</button>|
                    <button type="reset">清除</button>
                </td>
            </tr>
        </table>
    </form>
</fieldset>
<script>
    function more(){
        $('#tbody').before('<br><td>選項 <input type="text" name="opts[]"></td><td></td>');
    }
</script>