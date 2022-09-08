<fieldset>
    <legend>會員登入</legend>
    <form action="">
        <table class="ma">
            <tr>
                <td class="clo">帳號</td>
                <td><input type="text" name="acc" id="acc"></td>
            </tr>
            <tr>
                <td class="clo">密碼</td>
                <td><input type="password" name="pw" id="pw"></td>
            </tr>
            <tr>
                <td><input type="button" onclick="login()" value="登入"><input type="reset" value="清除"></td>
                <td><a href="?do=forget">忘記密碼</a>|<a href="?do=reg">尚未註冊</a></td>
            </tr>
        </table>
    </form>

</fieldset>

<script>
    function login(){
        let acc = $("#acc").val();
        let pw = $("#pw").val();
        $.post("./api/chkacc.php",{acc},(res)=>{
            if (res==1) {
            $.post("./api/chkpw.php",{acc,pw},(res)=>{
                if (res==2) {
                    location.href="./back.php"
                } else if(res==1){
                    location.href="./index.php"
                } else {
                    // console.log(res);
                    alert("密碼錯誤");
                    location.reload()
                }
            })
            } else {
                alert("查無帳號");
                location.reload()
            }
        })
    }
</script>