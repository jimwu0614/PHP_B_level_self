<style>
    .flex{
        flex-wrap: nowrap;
    }
</style>
<h3>目前位置：首頁＞分類網誌<span id="header"></span></h3>
<div class="w80 flex ma">
    <fieldset class="w40 ">
        <legend>網誌分類</legend>
        <div class="blue" onclick="getlist(this)">健康新知</div>
        <div class="blue" onclick="getlist(this)">菸害防治</div>
        <div class="blue" onclick="getlist(this)">癌症防治</div>
        <div class="blue" onclick="getlist(this)">慢性病防治</div>
    
    </fieldset>
    <fieldset class="w60 ">
        <legend>文章列表</legend>
        <div id='content'></div>
    
    </fieldset>
</div>
<script>
    function getlist(list){
        let type = $(list).text();
        $("#header").text("＞"+type);
        $.post("./api/getlist.php",{type},(res)=>{
            $("#content").html(res);
        })

    }
    function getnews(list){
        let title = $(list).text();
        
        $.post("./api/getnews.php",{title},(res)=>{
            $("#content").html(res);
        })

    }
</script>
