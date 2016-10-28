<?php
// session_start();

    $SpotsController = new SpotsController($db, $table_name, $action);
    $SpotsController->_new($_POST);
?>




<div class="container" style="margin-top:70px; margin-bottom:70px">
    <div class="row">
<?php if($id==null):?>
<form method="post" action="save" enctype="multipart/form-data">
  <?php else :?>
    <form method="post" action="../update/<?php echo $id;?>" enctype="multipart/form-data">
  <?php endif ;?>

 

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
                                        <p><?php echo htmlspecialchars($_SESSION['spot']["spot_name"]);?></p>
                                    </div>
                                    <div class="form-group">
                                    <label for="address">
                                            ＊スポットの住所</label>
                                        <p><?php echo htmlspecialchars($_SESSION['spot']["address"]);?></p>
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
                             <?php if(!empty($_SESSION['spot']['delete_picture_1'])): ?>
                            <img src="../../webroot/assets/img/no_image.png" width="208" height="129">
                             <?php elseif(!empty($_SESSION['spot']['picture_1'])):?>
                             <img src="../<?php echo $path_adjust_string;?>spot_picture/<?php echo htmlspecialchars($_SESSION['spot']['picture_1'], ENT_QUOTES, 'UTF-8'); ?>" width="208" height="129">
                           <?php elseif($action='edit'&&(!isset($_SESSION['spot']['picture_1']))):?>
                             <img src="../../spot_picture/<?php echo $viewOptions['picture_1']; ?>" width="208" height="129">
                           <?php endif; ?>

                             </div>

                              <div class="well well-sm">
                             <label for="picture_2">
                             ＊画像ファイル</label>
                             <?php if(!empty($_SESSION['spot']['delete_picture_2'])): ?>
                            <img src="../../webroot/assets/img/no_image.png" width="208" height="129">
                             <?php elseif(!empty($_SESSION['spot']['picture_2'])):?>
                             <img src="../<?php echo $path_adjust_string;?>spot_picture/<?php echo htmlspecialchars($_SESSION['spot']['picture_2'], ENT_QUOTES, 'UTF-8'); ?>" width="208" height="129">
                             <?php elseif($action='edit'&&(!isset($_SESSION['spot']['picture_2']) || empty($_SESSION['spot']['picture_2']))):?>
                             <img src="../../spot_picture/<?php echo $viewOptions['picture_2']; ?>" width="208" height="129">
                           <?php endif; ?>
            <?php var_dump($_SESSION['spot']['picture_2']); ?>
            <?php var_dump($action); ?>

                            </div>
                                    
                     

                    </div>
                </div>

             </div>

<div class="row">
<p><input type="submit" name="regist" value="投稿する"></p>
<p><input type="button" value="戻る" name="return" onClick="history.back()"></p>
</div>
</form>


  </div>

</div>