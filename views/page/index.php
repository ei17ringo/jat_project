<?php 
    $PagesController = new PagesController($db, $table_name, $action);
    $PagesController->action   = $action;
    $PagesController->resource = $resource;
    $error_message = $PagesController->_new($_POST);
 ?>

    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header-index">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">

                      <div class="modal-dialog-index">
                          <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="text-center">旅路検索</h1>
                              </div>
                                <form id="plan_search" method="post" action="" class="form-horizontal" role="form">
                                  <div class="modal-body">
                                      <label class="col-md-4 control-label">目的地：</label>
                                        <div class="col-md-8 research">
                                          <select class="form-control" name="prefecture" placeholder="都道府県">
                                            <option value="">都道府県の選択</option>

                                            <option value="北海道">北海道</option>

                                            <option value="青森県">青森県</option>
                                            <option value="岩手県">岩手県</option>
                                            <option value="宮城県">宮城県</option>
                                            <option value="秋田県">秋田県</option>
                                            <option value="山形県">山形県</option>
                                            <option value="福島県">福島県</option>

                                            <option value="東京都">東京都</option>
                                            <option value="神奈川県">神奈川県</option>
                                            <option value="埼玉県">埼玉県</option>
                                            <option value="千葉県">千葉県</option>
                                            <option value="茨城県">茨城県</option>
                                            <option value="栃木県">栃木県</option>
                                            <option value="群馬県">群馬県</option>
                                            <option value="山梨県">山梨県</option>

                                            <option value="新潟県">新潟県</option>
                                            <option value="長野県">長野県</option>

                                            <option value="富山県">富山県</option>
                                            <option value="石川県">石川県</option>
                                            <option value="福井県">福井県</option>

                                            <option value="愛知県">愛知県</option>
                                            <option value="岐阜県">岐阜県</option>
                                            <option value="静岡県">静岡県</option>
                                            <option value="三重県">三重県</option>

                                            <option value="大阪府">大阪府</option>
                                            <option value="兵庫県">兵庫県</option>
                                            <option value="京都府">京都府</option>
                                            <option value="滋賀県">滋賀県</option>
                                            <option value="奈良県">奈良県</option>
                                            <option value="和歌山県">和歌山県</option>

                                            <option value="鳥取県">鳥取県</option>
                                            <option value="島根県">島根県</option>
                                            <option value="岡山県">岡山県</option>
                                            <option value="広島県">広島県</option>
                                            <option value="山口県">山口県</option>
                                            <option value="徳島県">徳島県</option>
                                            <option value="香川県">香川県</option>
                                            <option value="愛媛県">愛媛県</option>
                                            <option value="高知県">高知県</option>

                                            <option value="福岡県">福岡県</option>
                                            <option value="佐賀県">佐賀県</option>
                                            <option value="長崎県">長崎県</option>
                                            <option value="熊本県">熊本県</option>
                                            <option value="大分県">大分県</option>
                                            <option value="宮崎県">宮崎県</option>
                                            <option value="鹿児島県">鹿児島県</option>

                                            <option value="沖縄県">沖縄県</option>

                                    <label class="col-md-4 control-label">旅する月：</label>
                                      <div class="col-md-8 research">
                                        <input type="checkbox" name="month[]" value="１月" />１月
                                        <input type="checkbox" name="month[]" value="２月" />２月
                                        <input type="checkbox" name="month[]" value="３月" />３月
                                        <input type="checkbox" name="month[]" value="４月" />４月
                                        <br>
                                        <input type="checkbox" name="month[]" value="５月" />５月
                                        <input type="checkbox" name="month[]" value="６月" />６月
                                        <input type="checkbox" name="month[]" value="７月" />７月
                                        <input type="checkbox" name="month[]" value="８月" />８月
                                        <br>
                                        <input type="checkbox" name="month[]" value="９月" />９月
                                        <input type="checkbox" name="month[]" value="10月" />10月
                                        <input type="checkbox" name="month[]" value="11月" />11月
                                        <input type="checkbox" name="month[]" value="12月" />12月
                                        <br>
                                      </div>


                                      <label class="col-md-4 control-label">交通手段：</label>
                                        <div class="col-md-8 research">
                                          <input type="checkbox" name="transpotation[]" value="徒　歩" />徒　歩
                                          <input type="checkbox" name="transpotation[]" value="自転車" />自転車
                                          <input type="checkbox" name="transpotation[]" value="バイク" />バイク
                                          <input type="checkbox" name="transpotation[]" value="自動車" />自動車
                                          <br>
                                          <input type="checkbox" name="transpotation[]" value="電　車" />電　車
                                          <input type="checkbox" name="transpotation[]" value="タクシー" />タクシー
                                          <input type="checkbox" name="transpotation[]" value="バ　ス" />バ　ス
                                          <input type="checkbox" name="transpotation[]" value="その他" />その他
                                        </div>

                                      <label class="col-md-4 control-label">投稿時期：</label>
                                        <div class="col-md-8 research">
                                          <select class="form-control" name="view" placeholder="選択してください">
                                            <option value="">選択してください</option>
                                            <option value="1month">直近１か月</option>
                                            <option value="3months">直近３か月</option>
                                            <option value="6months">直近６か月</option>
                                            </select>
                                          </div>

                                        <!-- <label class="col-md-4 control-label"> タ グ ：</label>
                                          <div class="col-md-8 research">
                                            <input type="text" class="form-control" placeholder="例）デート、紅葉、のんびり">
                                          </div> -->

                                         <button type="submit" class="btn btn-block btn-default btn-warning" value="Login"/>Search</button>
              
                                  </div>
                              </form>
                          </div>
                      </div>
                </div>

                <div class="col-lg-6">
                      <div class="modal-dialog-post">
                          <div class="modal-content">
                              <div class="modal-header">
                                <select id="tabChange" class="form-control" placeholder="最新投稿" onchange="indexTab()">
                                  <option value="case_new">新着順</option>
                                  <option value="case_popular">人気順</option>
                                </select>
                              </div>

                              <div id="case_new">
                                <div class="row">
                                  <div class="col-md-12">
                                    <?php foreach($indexContent as $content): ?>
                                      <li class="index-comment index-user-comment">
                                        <p>投稿者：<?php echo htmlspecialchars($content['user_name']); ?>さん　作成日：<?php echo htmlspecialchars($content['created']); ?><br>
                                        旅路タイトル：<?php echo htmlspecialchars($content['title']); ?><br>
                                        行き先：<?php echo htmlspecialchars($content['spot_name']); ?><br>
                                        <a href="../plan/detail/<?php echo htmlspecialchars($content['plan_id']); ?>">View details »</a></p>
                                      </li>
                                    <?php endforeach; ?>
                                  </div>
                                </div>
                              </div>

                              <div id="case_popular">
                                <div class="row">
                                  <div class="col-md-12">
                                    <?php foreach($indexContent as $content): ?>
                                      <li class="index-comment index-user-comment">
                                        <p>投稿者：mamamama　作成日：<?php echo htmlspecialchars($content['created']); ?><br>
                                        旅路タイトル：<?php echo htmlspecialchars($content['title']); ?><br>
                                        Euismod</p>
                                      </li>
                                    <?php endforeach; ?>
                                  </div>
                                </div>
                              </div>

                              <script type="text/javascript">
                                function indexTab(){
                                  if(document.getElementById('tabChange')){
                                    id = document.getElementById('tabChange').value;
                                    if(id == 'case_new'){
                                      //フォーム
                                      document.getElementById('case_new').style.display = "";
                                      document.getElementById('case_popular').style.display = "none";
                                    }else if(id == 'case_popular'){
                                      //フォーム
                                      document.getElementById('case_new').style.display = "none";
                                      document.getElementById('case_popular').style.display = "";
                                    }
                                  }
                                }
                                //オンロードさせ、リロード時に選択を保持
                                window.onload = indexTab;
                              </script>

                          </div>
                      </div>
                </div>
            </div>
        </div>
        <!-- /.container -->

    </div>