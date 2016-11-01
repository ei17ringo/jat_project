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
                                            

                                            <option value="1">北海道</option>

                                            <option value="2">青森県</option>
                                            <option value="3">岩手県</option>
                                            <option value="4">宮城県</option>
                                            <option value="5">秋田県</option>
                                            <option value="6">山形県</option>
                                            <option value="7">福島県</option>

                                            <option value="8">東京都</option>
                                            <option value="9">神奈川県</option>
                                            <option value="10">埼玉県</option>
                                            <option value="11">千葉県</option>
                                            <option value="12">茨城県</option>
                                            <option value="13">栃木県</option>
                                            <option value="14">群馬県</option>
                                            <option value="15">山梨県</option>

                                            <option value="16">新潟県</option>
                                            <option value="17">長野県</option>

                                            <option value="18">富山県</option>
                                            <option value="19">石川県</option>
                                            <option value="20">福井県</option>

                                            <option value="21">愛知県</option>
                                            <option value="22">岐阜県</option>
                                            <option value="23">静岡県</option>
                                            <option value="24">三重県</option>

                                            <option value="25">大阪府</option>
                                            <option value="26">兵庫県</option>
                                            <option value="27">京都府</option>
                                            <option value="28">滋賀県</option>
                                            <option value="29">奈良県</option>
                                            <option value="30">和歌山県</option>

                                            <option value="31">鳥取県</option>
                                            <option value="32">島根県</option>
                                            <option value="33">岡山県</option>
                                            <option value="34">広島県</option>
                                            <option value="35">山口県</option>
                                            <option value="36">徳島県</option>
                                            <option value="37">香川県</option>
                                            <option value="38">愛媛県</option>
                                            <option value="39">高知県</option>

                                            <option value="40">福岡県</option>
                                            <option value="41">佐賀県</option>
                                            <option value="42">長崎県</option>
                                            <option value="43">熊本県</option>
                                            <option value="44">大分県</option>
                                            <option value="45">宮崎県</option>
                                            <option value="46">鹿児島県</option>

                                            <option value="47">沖縄県</option>

                                    <label class="col-md-4 control-label">旅する月：</label>
                                      <div class="col-md-8 research">
                                        <input type="checkbox" name="month[]" value="1" />１月
                                        <input type="checkbox" name="month[]" value="2" />２月
                                        <input type="checkbox" name="month[]" value="3" />３月
                                        <input type="checkbox" name="month[]" value="4" />４月
                                        <br>
                                        <input type="checkbox" name="month[]" value="5" />５月
                                        <input type="checkbox" name="month[]" value="6" />６月
                                        <input type="checkbox" name="month[]" value="7" />７月
                                        <input type="checkbox" name="month[]" value="8" />８月
                                        <br>
                                        <input type="checkbox" name="month[]" value="9" />９月
                                        <input type="checkbox" name="month[]" value="10" />10月
                                        <input type="checkbox" name="month[]" value="11" />11月
                                        <input type="checkbox" name="month[]" value="12" />12月
                                        <br>
                                      </div>


                                      <label class="col-md-4 control-label">交通手段：</label>
                                        <div class="col-md-8 research">
                                          <input type="checkbox" name="transpotation[]" value="walk" />徒　歩
                                          <input type="checkbox" name="transpotation[]" value="bike" />自転車
                                          <input type="checkbox" name="transpotation[]" value="autobike" />バイク
                                          <input type="checkbox" name="transpotation[]" value="car" />自動車
                                          <br>
                                          <input type="checkbox" name="transpotation[]" value="train" />電　車
                                          <input type="checkbox" name="transpotation[]" value="cab" />タクシー
                                          <input type="checkbox" name="transpotation[]" value="other" />その他　
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

                                        <label class="col-md-4 control-label"> タ グ ：</label>
                                          <div class="col-md-8 research">
                                            <input type="text" class="form-control" placeholder="例）デート、紅葉、のんびり">
                                          </div>

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
                                        <p>投稿者：<?php echo htmlspecialchars($content['user_id']); ?>　作成日：<?php echo htmlspecialchars($content['created']); ?><br>
                                        旅路タイトル：<?php echo htmlspecialchars($content['title']); ?><br>
                                        Euismod</p>
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