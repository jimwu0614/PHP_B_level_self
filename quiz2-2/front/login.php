<fieldset>
    <legend>會員登入</legend>
    <table class="ma">
        <tr >
            <td class="clo">帳號:</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td class="clo">密碼:</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td>
                <input type="button" value="登入" onclick="login()">
                <input type="button" value="清除" onclick="reset()">
            </td>
            <td>
                <span class="blue" onclick="location.href='?do=forget'">忘記密碼</span>|
                <span class="blue" onclick="location.href='?do=reg'">尚未註冊</span>
            </td>
        </tr>
    </table>
</fieldset>

<script>
    function reset(){
        $('#acc,#pw').val('');
    }

    function login() {
        let acc = $('#acc').val();
        let pw = $('#pw').val();
            $.post("./api/chkacc.php",{acc},(res)=>{
                if (res>=1) {
                $.post("./api/chkpw.php",{acc,pw},(res2)=>{
                        if (res2>=1) {
                            if (acc=='admin' && pw=='1234') {
                                location.href="./back.php";
                            } else {
                                location.href="./index.php";
                            }
                        } else {
                            alert('密碼錯誤');
                        }
                     })
                } else {
                    alert('查無帳號');
                }
            })
        
    }
</script>