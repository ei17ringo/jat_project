<?php
    $SpotsController = new SpotsController($db, $table_name, $action);
    $SpotsController->_new($_POST);
?>

<div class="container">
    <div class="row">
        <div class="col-md-12" style="top:70px;">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                <form method="post" action="example.cgi">
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
                                            ＊スポットの名称</label>
                                        <input type="text" class="form-control" placeholder="例：清水寺" required />
                                    </div>
                                    <div class="form-group">
                                    <label for="adress">
                                            ＊スポットの住所</label>
                                        <textarea class="form-control" placeholder="住所を入力してください" rows="2" required></textarea>
                                    </div>
                                </div>
                            </div>
                            
                                
                                    <div class="form-group">
                                        <label for="tags">
                                            ＊タグ</label>
                                        <!-- <input type="text" class="form-control" id="tags" placeholder="Tags" /> -->
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
                        </form>
                    </div>
                </div>

             </div>
            
            <button type="button" class="btn btn-default btn-sm" style="margin-top:70px;">
            <span class="glyphicon glyphicon-eye-open"></span>確認ページへ</button>


           
        </div>
    </div>
</div>