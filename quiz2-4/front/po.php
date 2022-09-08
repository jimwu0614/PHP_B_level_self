<h3>目前位置:首頁＞分類網誌 <span id="header"></span></h3>
<div class="flex">
    <fieldset class="w20">
        <legend>分類網誌</legend>
        <div class="blue type">健康新知</div>
        <div class="blue type">菸害防治</div>
        <div class="blue type">癌症防治</div>
        <div class="blue type">慢性病防治</div>
    </fieldset>
    <fieldset class="w70">
        <legend>文章列表</legend>
        <div class="box"></div>
    </fieldset>
</div>

<script>
    $(".type").on("click",function(){
        let type = $(this).text()
        $.post("./api/getlist.php",{type},(res)=>{
            $(".box").html(res);
        })
    })


    // $(".title").on("click",function(){
    //     let type = $(this).text()
    //     console.log(type);
    //     $.post("./api/getnews.php",{type},(res2)=>{
    //         console.log(res2);
    //         $(".box").html(res2);
    //     })
    // })

    function getnews(text){
        let title = $(text).text();
        $.post("./api/getnews.php",{title},(res2)=>{
            // console.log(res2);
            $(".box").html(res2);
    })
    }
</script>