<style>

</style>
<fieldset>
    <legend>忘記密碼</legend>
    <div class="ma ct">
        <div>請輸入信箱以查詢密碼</div>
        <div><input class="w80" type="text" name="email" id="email"></div>
        <div class="res"></div>
        <div><button onclick="findpw()">尋找</button></div>
    </div>
</fieldset>
<script>
    function findpw(){
        let mail = $("#email").val();
        $.post("./api/findpw.php",{mail},(res)=>{
            $(".res").html(res);
        })
    }
</script>