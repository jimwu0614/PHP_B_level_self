<style>
    input[type="text"]{
        width: 50%;
    }
</style>
<fieldset>
    <legend>新增問卷</legend>
    <form action="./api/que.php" method="post">
        <div class="">
            <span class="clo">問卷名稱</span><input type="text" name="subject"><br>
        </div>
        <div class=" clo w100" id="box">
            <span class="clo w90">選項<input type="text" name="opt[]" ><input  type="button" value="更多" onclick="more()"></span>
        </div>
        <div>
            <input type="submit" value="新增">|
            <input type="reset" value="清空">
        </div>
    </form>
</fieldset>
<script>
    function more() {
        $("#box").prepend('<span class="clo w90">選項<input type="text" name="opt[]" ></span><br>')
    }
</script>