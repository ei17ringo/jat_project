<?php
    $SpotsController = new SpotsController($db, $table_name, $action);
    $SpotsController->_new($_POST);
?>




<div class="container">
    <div class="row">
        <div class="col-md-12" style="top:70px;">
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
                                        <p>清水寺</p>
                                    </div>
                                    <div class="form-group">
                                    <label for="adress">
                                            ＊スポットの住所</label>
                                        <p>〒605-0862 京都府京都市東山区清水１丁目２９４</p>
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

                                
                                    
                        </div>

                    </div>
                </div>

             </div>



</div>
</div>
