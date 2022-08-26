<fieldset>
    <legend>會員登入</legend>

    <form action="./api/deluser.php" method="post">
        <table class="ma w80" id="userlist">
            <tr>
                <td class="clo w40">帳號</td>
                <td class="clo w40">密碼</td>
                <td class="clo w20">刪除</td>
            </tr>
            <?php
            $rows = $User->all();
            foreach ($rows as $key => $value) {
            ?>
                <tr>
                    <td><?= $value['acc'] ?></td>
                    <td>****</td>
                    <td><input type="checkbox" name="del[]" value="<?= $value['id'] ?>"></td>
                    <input type="hidden" name="id[]" value="<?= $value['id'] ?>">
                </tr>

            <?php
            }
            ?>
        </table>
        <div class="ct">
            <input type="submit" value="確定刪除">
            <input type="reset" value="清空選取">
        </div>
    </form>
    <h4>*請設定您要註冊的帳號及密碼(最長12個字元)</h4>
    <table>
        <tr>
            <td class="clo">Step1:登入帳號</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td class="clo">Step2:登入密碼</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td class="clo">Step3:再次確認密碼</td>
            <td><input type="password" name="pw2" id="pw2"></td>
        </tr>
        <tr>
            <td class="clo">Step4:信箱(忘記密碼時使用)</td>
            <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
            <td>
                <input type="button" value="註冊" onclick="reg()">
                <input type="button" value="清除" onclick="reset()">
            </td>
            <td></td>
        </tr>
    </table>
</fieldset>
<script>
    function reset() {
        $('#acc,#pw').val('');
    }

    function reg() {
        let acc = $('#acc').val();
        let pw = $('#pw').val();
        let email = $('#email').val();

        if (acc == '' || pw == '' || pw2 == '' || email == '') {
            alert('不可空白')
        }

        $.post('./api/reg.php', {
            acc,
            pw,
            email
        }, (res) => {

            if (res == "帳號重複") {
                alert(res);
            } else {
                alert(res);
                location.href = '?do=user'
            }

        })


    }
</script>