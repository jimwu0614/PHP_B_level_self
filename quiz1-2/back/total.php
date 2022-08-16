<style>
    input[type=text] {
        width: 80%;
    }

    .flex{
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }
    .h80{
        height: 80%;
    }
    .h100{
        height: 100%;
    }
    .yel{
	background:#F3DA49;
    display: inline-block;
    height: 30px;
    width: 100px;
    }
</style>

<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">進站總人數管理</p>
    <hr>
    <form class="h80" method="post" action="./api/editTotal.php">
        <div class=" h100 flex">
            <div>
                <span class="yel">進站總人數:</span>
                <span><input type="text" name="total" value="<?=$Total->find(['id'=>1])['total']?>"></span>
            </div>
            
            <div style="margin-left: 300px;">
                <input type="submit" value="修改確定">
                <input type="reset" value="重置">
            </div>
        </div>
    </form>
</div>