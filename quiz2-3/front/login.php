<fieldset>
    <legend>會員登入</legend>
    <form>
    <table class="w80 ma">
        <tr>
            <td class="w30 clo">帳號</td>
            <td class="w50"><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td class="clo">密碼</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td><button type="button" onclick="login()">登入</button><button type="reset">清除</button></td>
            <td><a href="?do=forget">忘記密碼</a>|<a href="?do=reg">尚未註冊</a></td>
        </tr>
        
    </table>
    </form>
</fieldset>

<script>
    function login() {
        let acc = $("#acc").val();
        let pw = $("#pw").val();
        
        $.post("./api/chkacc.php",{acc},(res)=>{
            if (res==1) {
                $.post("./api/chkpw.php",{acc,pw},(res2)=>{
                    if (res2=='2') {
                        // console.log(res2);
                        location.href="./back.php";
                    }else if(res2=='1') {
                        // console.log(res2);
                        location.href="./index.php";
                    }else{
                        // console.log(res2);
                        alert("密碼錯誤")
                        location.reload();
                    }
                })
            }else{
                alert("查無帳號")
                location.reload();
            }
        })

    }
</script>