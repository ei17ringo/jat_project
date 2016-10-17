<?php
    $SpotsController = new SpotsController($db, $table_name, $action);
    $error_message=$SpotsController->_new($_POST);

?>


<div class="container">
    <div class="row">

    <form method="post" action="">

        <div class="col-md-12" style="top:70px;">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                

                    <div class="panel-heading">

                        <h4 class="panel-title">
                            <span class="glyphicon glyphicon-file">
                            </span>新規スポット登録
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label for="spot_name">
                                            ＊スポットの名称</label><br>
                                        <input type="text" name="spot_name" size=40>
                                    </div>
                                    <div class="form-group">
                                    <label for="adress">＊スポットの住所</label><br>
                                    <textarea name="adress" ></textarea>
                                    </div>
                                </div>
                            </div>

                                  <div class="form-group">
                                        <label for="tags">
                                            ＊タグ</label>

                                        <div id="small"></div>
                                  </div>
        <script>
          $(function(){
            Tags.bootstrapVersion = "2";
            $("#small").tags({
              tagSize: "sm",
              suggestions: ["alpha", "bravo", "charlie", "delta", "echo", "foxtrot", "golf", "hotel", "india"],
              tagData: ["京都", "デート"]
            });
            });
        </script>


                            </div>

                            <div class="well well-sm">
                             <label for="image">
                             ＊画像ファイル</label>
                             <input type="file" name="pic">
                            </div>


                        </div>
                        
                    </div>
                </div>

             </div>

            <button type="submit" class="btn btn-default btn-sm" name="sousin" style="margin-top:70px;">
            <span class="glyphicon glyphicon-eye-open"></span>確認ページへ</button>

</form>

<?php
//ここに記述し、表示させる
if (isset($error_message)&&(count($error_message)>0)) {
    foreach ($error_message as $message){
        echo $message;
    }
}
?>

           </div>
        </div>