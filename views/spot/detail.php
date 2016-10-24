<?php
// session_start();

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
                                        <p><?php echo $viewOptions['spot_name']; ?></p>
                                    </div>
                                    <div class="form-group">
                                    <label for="adress">
                                            ＊スポットの住所</label>
                                        <p><?php echo $viewOptions['address']; ?></p>
                                    </div>
                                </div>
                            </div>
                            
                                
                                    <div class="form-group">
                                        <label for="tags">
                                            ＊タグ</label>
                                        <p>京都、デート、紅葉、桜</p>
                                        
                                    </div>
                                   <!-- <script>
          $(function(){
            Tags.bootstrapVersion = "2";
            $("#small").tags({
              tagSize: "sm",
              suggestions: ["alpha", "bravo", "charlie", "delta", "echo", "foxtrot", "golf", "hotel", "india"],
              tagData: ["京都", "デート"]
            });
            });
        </script> -->

                            
                            </div>

                                
                                    
                        </div>
                        </form>
                    </div>
                </div>

             </div>


           <div id="mainContents" class="clearfix">
            <h1>Pictures</h1>
            <p><a href="../../spot_picture/<?php echo $viewOptions['picture_1']; ?>"><img src="../../spot_picture/<?php echo $viewOptions['picture_1']; ?>" width="208" height="129">
            </a></p>

            <p><a href="../../spot_picture/<?php echo $viewOptions['picture_2']; ?>"><img src="../../spot_picture/<?php echo $viewOptions['picture_2']; ?>" width="208" height="129">
            </a></p>
            <p><a href="index/img/img_l3.jpg" rel="example3" title="画像の紹介テキストが入ります。"><img src="index/img/img_thumb3.jpg" alt="画像の紹介テキストが入ります。" /></a>title3</p>
            <p><a href="index/img/img_l4.jpg" rel="example4" title="画像の紹介テキストが入ります。"><img src="index/img/img_thumb4.jpg" alt="画像の紹介テキストが入ります。" /></a>title4</p>
            <p><a href="index/img/img_l5.jpg" rel="example5" title="画像の紹介テキストが入ります。"><img src="index/img/img_thumb5.jpg" alt="画像の紹介テキストが入ります。" /></a>title5</p>
            <p><a href="index/img/img_l6.jpg" rel="example6" title="画像の紹介テキストが入ります。"><img src="index/img/img_thumb6.jpg" alt="画像の紹介テキストが入ります。" /></a>title6</p>
            <p><a href="index/img/img_l7.jpg" rel="example7"  title="画像の紹介テキストが入ります。"><img src="index/img/img_thumb7.jpg" alt="画像の紹介テキストが入ります。" /></a>title7</p>
            <p><a href="index/img/img_l8.jpg" rel="example8"  title="画像の紹介テキストが入ります。"><img src="index/img/img_thumb8.jpg" alt="画像の紹介テキストが入ります。" /></a>title8</p>

            
            
        </div>





        </div>
    </div>
</div>
