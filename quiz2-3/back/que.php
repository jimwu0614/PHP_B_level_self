<style></style>
<fieldset>
    <legend>新增問卷</legend>
    <form action="./api/que.php" method="post">
        <span class="clo w40">問卷名稱</span><span class="w40"><input type="text" name="subject"></span>
        <div class="clo" id="content">
            <span>選項:</span><span><input type="text" name="opts[]"></span><input type="button" value="更多" onclick="more()">
        </div>

        <div>
            <input type="submit" value="新增">|
            <input type="reset" value="清空">
        </div>
    </form>
</fieldset>

<script>
    function more() {
        $("#content").prepend('<span>選項:</span><span><input type="text" name="opts[]" ></span><br>')
    }
</script>