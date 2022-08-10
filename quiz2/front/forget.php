<style>
    .box{
        width: 600px;
        height: 400px;
        border: 1px solid black;
    }
</style>
<div class="box">
    <h3>請輸入信箱</h3>
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