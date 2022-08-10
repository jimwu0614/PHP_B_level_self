<style>
    fieldset{
        display: block;
        width: 400px;
        
    }
    label{
        background: #ccc;
        width: 100px;
        display: block;
    }
    input{
        width: 300px;
        display: block;


    }
</style>
<fieldset>
    <legend>會員登入</legend>
    <table>
        <tr>
            <td><label >帳號:</label> </td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td><label >密碼:</label> </td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td><button onclick="login()">登入</button>
            <button onclick="$('input').val('')">清除</button></td>
            <td><a href="?do=forget">忘記密碼</a>|
            <a href="?do=reg">尚未註冊</a></td>
        </tr>
    </table>
</fieldset>

<script>
function login(){

    let acc = $('#acc').val();
    let pw = $('#pw').val();

    $.post("./api/chkacc.php",{acc:acc},(res)=>{
        console.log(res);
        if (res==1) {
            
            $.post("./api/chkpw.php",{acc:acc,pw:pw},(res2)=>{
                console.log("res2"+res2);
                if (res2==1) {

                    // let $_SESSION = acc;
                    if (acc==="admin") {
                        location.href ="./back.php";
                    }else{
                        location.href ="./index.php";
                        
                    }
                }else{
                    alert("密碼錯誤")
                }
            })

        }else{
            alert("查無帳號")
        }
    })
}
</script>