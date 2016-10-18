<?php
// session_start();

    $SpotsController = new SpotsController($db, $table_name, $action);
    $SpotsController->_new($_POST);
?>




<div class="container" style="margin-top:70px; margin-bottom:70px">
    <div class="row">

  <form method="post" action="">

        <div class="col-md-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">

                    <div class="panel-heading">

                        <h4 class="panel-title">
                            <span class="glyphicon glyphicon-file">
                            </span>スポット詳細
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label for="spot_name">
                                            ＊スポットの名称</label>
                                        <p><?php echo htmlspecialchars($_SESSION["spot_name"]);?></p>
                                    </div>
                                    <div class="form-group">
                                    <label for="adress">
                                            ＊スポットの住所</label>
                                        <p><?php echo htmlspecialchars($_SESSION["adress"]);?></p>
                                    </div>
                                </div>
                            </div>
                            
                                
                                    <div class="form-group">
                                        <label for="tags">
                                            ＊タグ</label>
                                        <p>京都、デート、紅葉、桜</p>
                                        
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
                             <label for="picture_1">
                             ＊画像ファイル</label>
                             <?php if (isset($error['picture_1']) && $error['picture_1']=='type'):?>
            <?php endif;?>
            
                            </div>
                                    
                        </div>

                    </div>
                </div>

             </div>


<p><input type="submit" name="regist" value="投稿する"></p>
<p><input type="button" value="戻る" name="return" onClick="history.back()"></p>
</form>

  </div>

</div>

 