<fieldset>
    <legend>會員註冊</legend>

    <table>
        <h4 style="color: red;">*請設定您要註冊的帳號及密碼(最長12個字元)</h4>
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
            <td><input type="password" name="ppw" id="ppw"></td>
        </tr>
        <tr>
            <td class="clo">Step4:信箱(忘記密碼時使用)</td>
            <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
            <td>
                <button onclick="reg()">註冊</button>
                <button onclick="$('input').val('')">清除</button></td>
            </td>
            
        </tr>
    </table>

</fieldset>

<script>
    function reg(){
        let acc = $('#acc').val();
        let pw = $('#pw').val();
        let ppw = $('#ppw').val();
        let email = $('#email').val();

        if(acc==''||pw=='' ||ppw=='' ||email=='' ){
            alert("不可空白");
        }

        $.post("./api/chkacc.php",{acc:acc},(res)=>{
            if (res==1) {
                alert("帳號重複")
            }else{
            $.post("./api/reg.php",{acc:acc,pw:pw,email:email},(res2)=>{
            alert("註冊完成，歡迎加入");
            location.href="?do=login";
        })

            }
        })


    }
</script>