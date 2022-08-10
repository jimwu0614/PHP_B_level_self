<style>
    .box{
        width: 450px;
        height: 180px;
        border: 1px solid black;
    }
    input{
        width: 400px;
    }
</style>
<div class="box">
    <h3>請輸入信箱以查詢密碼</h3>
    <input type="email" id="mail">
    <div id="res"></div>
    <button onclick="findpw()">尋找</button>
</div>
<script>
    function findpw(){
        let mail = $("#mail").val();
        // console.log(mail);
        $.post("./api/find.php",{mail:mail},(res)=>{
            console.log(res);
            $("#res").html(res)
        })
    }
</script>