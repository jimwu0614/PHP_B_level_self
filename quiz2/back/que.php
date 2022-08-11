<style>
    fieldset {
        display: flex;
        width: 400px;
        margin: 0 auto;

    }

    input {
        width: 300px;
        display: block;
    }

    span {
        display: inline-block;
    }

    .opt {
        display: inline-block;
    }
</style>
<fieldset>
    <legend>新增問卷</legend>
    <form action="./api/addque.php" method="post">
        <div class="w100">
            <div>
                <span class="clo">問卷名稱</span>
                <span> <input type="text" name="que" id="que"></span>
            </div>
            <div class="clo w100" id="opts">

                <span class='clo'>選項</span>
                <input class="opt" type="text" name="opt[]">
                <button type="button" id="btn" onclick="more()">更多</button>
            </div>
            <div>
                <button type="submit">新增</button>
                <button onclick="$('input').val('')">清空</button>

            </div>
        </div>
    </form>
</fieldset>

<script>
    function more() {
        $("#btn").before("<br><span class='clo'>選項</span><input class='opt' type='text' name='opt[]' >")
    }
</script>