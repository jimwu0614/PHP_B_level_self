<style>
    .container{
        display: flex;
        width: 100%;
        flex-direction: column;
        
    }
    .table1{
        width: 80%;
        margin: 0px auto;
        text-align: center;
    }
    .th1{
        width: 50%;
    }
    .th2{
        width: 30%;
    }
    .th3{
        width: 20%;
        
    }
</style>

<fieldset class="container">
    <legend>帳號管理</legend>


    <div>
        <form action="./api/deluser.php" method="POST">
            
            <table class="table1">
                <tr>
                    <td class="clo th1">帳號</td>
                    <td class="clo th2">密碼</td>
                    <td class="clo th3">刪除</td>
                </tr>
                
            </table>
            <div style="margin: 0 auto; width: 170px;;">
                <input type="submit" value="確定刪除">
                <input type="reset" value="清空選取">
            </div>
        </form>
            




    </div>


    <div>
        <h1>新增會員</h1>
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
    </div>
</fieldset>


<script>

    $(document).ready(
        getuser()
    )
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
        
            location.href="?do=users";
        })

            }
        })

    }


    function getuser(){
        $.get("./api/getuser.php",(res)=>{
            $(".table1").append(res)
        })
    }
</script>