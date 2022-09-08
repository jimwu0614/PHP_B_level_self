<fieldset>
    <legend>註冊會員</legend>
    <form  method="post">
        <h3 class="ct" style="color:red;">*請設定您要註冊的帳號及密碼(最長12個字元)</h3>
        <table class="ma w80">
            <tr>
                <td class="clo w30">Step1:登入帳號</td>
                <td class="w70"><input class="w80" type="text" name="acc" id="acc"></td>
            </tr>
            <tr>
                <td class="clo w30">Step2:登入密碼</td>
                <td class="w70"><input class="w80" type="password" name="pw" id="pw"></td>
            </tr>
            <tr>
                <td class="clo w30">Step3:再次確認密碼</td>
                <td class="w70"><input class="w80" type="password" name="pw2" id="pw2"></td>
            </tr>
            <tr>
                <td class="clo w30">Step4:信箱(忘記密碼時使用)</td>
                <td class="w70"><input class="w80" type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td><input type="submit" value="註冊" onclick="reg()"><input type="reset" value="重置"></td>
                <td></td>
            </tr>
        </table>
    </form>
</fieldset>
<script>
    function reg(){
        let acc = $("#acc").val();
        let pw = $("#pw").val();
        let pw2 = $("#pw2").val();
        let email = $("#email").val();

        if (acc==''|| pw==''|| pw2==''|| email=='') {
            alert("不可空白");
        }else if(pw != pw2){
            alert("密碼錯誤");
        }else{
            $.post("./api/reg.php",{acc,pw,email},(res)=>{
                console.log(res);
                alert(res)
            })
        }
    }
</script>