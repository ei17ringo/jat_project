    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header-plan-list">
        <div class="container">

            <div class="row">
              <div class="col-md-2">
              </div>
              <div class="col-md-8">
                      <div class="modal-dialog-index">
                          <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="text-center">旅路検索</h1>
                              </div>
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
                                        </select>
                                      </div>

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
                                          <input type="checkbox" name="transportation[]" value="walk" />徒　歩
                                          <input type="checkbox" name="transportation[]" value="bike" />自転車
                                          <input type="checkbox" name="transportation[]" value="autobike" />バイク
                                          <input type="checkbox" name="transportation[]" value="car" />自動車
                                          <br>
                                          <input type="checkbox" name="transportation[]" value="train" />電　車
                                          <input type="checkbox" name="transportation[]" value="cab" />タクシー
                                          <input type="checkbox" name="transportation[]" value="other" />その他　
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
                                        <?php var_dump($_SESSION['prefecture']);
                                         var_dump($_SESSION['month']);
                                         var_dump($_SESSION['transpotation']);;
                                         var_dump($_SESSION['view']); ?>
                                </div>
                          </div>
                      </div>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

    <a  name="services"></a>
      <div class="content-section-b">

          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4">
                    <h2 class="text-center">
                      検索ヒット旅路
                    </h2>
                  </div>
                  <div class="col-md-4 btn-control">

                    <div class="btn-group">
                      <select id="tabChange" class="form-control" placeholder="最新投稿" onchange="indexTab()">
                        <option value="case_new">新着順</option>
                        <option value="case_popular">人気順</option>
                      </select>
                    </div>

                    <div class="btn-group">
                      <select id="tabChange" class="form-control" placeholder="最新投稿" onchange="indexTab()">
                        <option value="5items">５件</option>
                        <option value="10items">10件</option>
                        <option value="30items">30件</option>
                      </select>
                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div id="case_new">
          <div class="content-section-a">
            <div class="container-fluid">
              <div class="row">
                <div class="plans-show">
                  <div class="plan-upper-content">
                    <div class="col-md-3 tag-content">
                      <span class="glyphicon glyphicon-tags-mypage" aria-hidden="true">：◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz</span>
                    </div>
                    <div class="col-md-6">
                      <div class="plan-title">
                        <h3>
                          <a href="#">宇治抹茶スイーツ巡り</a>
                        </h3><br>
                        <p>投稿者：<a href="">◯◯◯◯</a>  作成日：◯◯◯◯年◯◯月◯◯日</p>
                      </div>
                    </div>
                    <div class="col-md-3 position-fix-plan-list">
                      <div class="position-fix-plan-list">
                        <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>：◯◯
                      </div>
                    </div>
                  </div>

                    <div class="plan-contents">
                      <div class="col-md-8">
                        <p class="plan-idea">
                          目的地：京都符    訪問した年月：◯◯◯◯年◯◯月<br>
                          スポット：◯◯◯◯<br>
                          ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                          交通手段<br>
                          ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                          交通手段<br>
                          ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                          交通手段<br>
                          ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                          交通手段<br>
                          ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                          交通手段<br>
                          ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                          交通手段<br>
                          ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                          交通手段<br>
                          ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                          交通手段<br>
                        </p>
                        <p class="plan-detail-plan-list">
                          <a class="btn" href="#">View details »</a>
                        </p>
                      </div>
                      <div class="col-md-4">
                        <img alt="Bootstrap Image Preview" src="http://lorempixel.com/275/275/" />
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- /.container -->
        </div>
      <!-- /.content-section-a -->

        <div class="content-section-b">

          <div class="container-fluid">
            <div class="row">
              <div class="plans-show">
                <div class="plan-upper-content">
                  <div class="col-md-3 tag-content">
                    <span class="glyphicon glyphicon-tags" aria-hidden="true">：◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz</span>
                  </div>
                  <div class="col-md-6">
                    <div class="plan-title">
                      <h3>
                        <a href="#">宇治抹茶スイーツ巡り</a>
                      </h3><br>
                      <p>投稿者：<a href="">◯◯◯◯</a>  作成日：◯◯◯◯年◯◯月◯◯日</p>
                    </div>
                  </div>
                  <div class="col-md-3 position-fix-plan-list">
                    <div class="position-fix-plan-list">
                      <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>：◯◯
                    </div>
                  </div>
                </div>

                  <div class="plan-contents">
                    <div class="col-md-8">
                      <p class="plan-idea">
                        目的地：京都符    訪問した年月：◯◯◯◯年◯◯月<br>
                        スポット：◯◯◯◯<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                      </p>
                      <p class="plan-detail-plan-list">
                        <a class="btn" href="#">View details »</a>
                      </p>
                    </div>
                    <div class="col-md-4">
                      <img alt="Bootstrap Image Preview" src="http://lorempixel.com/275/275/" />
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <!-- /.container -->
        </div>
      <!-- /.content-section-b -->
      </div>

        <div id="case_popular">
          <div class="content-section-a">
            <div class="container-fluid">
              <div class="row">
                <div class="plans-show">
                  <div class="plan-upper-content">
                    <div class="col-md-3 tag-content">
                      <span class="glyphicon glyphicon-tags-mypage" aria-hidden="true">：hijklmnopqrstuvwxyz</span>
                    </div>
                    <div class="col-md-6">
                      <div class="plan-title">
                        <h3>
                          <a href="#">宇治抹茶スイーツ巡り</a>
                        </h3><br>
                        <p>投稿者：<a href="">◯◯◯◯</a>  作成日：◯◯◯◯年◯◯月◯◯日</p>
                      </div>
                    </div>
                    <div class="col-md-3 position-fix-plan-list">
                      <div class="position-fix-plan-list">
                        <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>：◯◯
                      </div>
                    </div>
                  </div>

                    <div class="plan-contents">
                      <div class="col-md-8">
                        <p class="plan-idea">
                          目的地：京都符    訪問した年月：◯◯◯◯年◯◯月<br>
                          スポット：◯◯◯◯<br>
                          ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                          交通手段<br>
                          ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                          交通手段<br>
                          ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                          交通手段<br>
                          ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                          交通手段<br>
                          ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                          交通手段<br>
                          ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                          交通手段<br>
                          ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                          交通手段<br>
                          ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                          交通手段<br>
                        </p>
                        <p class="plan-detail-plan-list">
                          <a class="btn" href="#">View details »</a>
                        </p>
                      </div>
                      <div class="col-md-4">
                        <img alt="Bootstrap Image Preview" src="http://lorempixel.com/275/275/" />
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- /.container -->
        </div>
      <!-- /.content-section-a -->

        <div class="content-section-b">

          <div class="container-fluid">
            <div class="row">
              <div class="plans-show">
                <div class="plan-upper-content">
                  <div class="col-md-3 tag-content">
                    <span class="glyphicon glyphicon-tags" aria-hidden="true">：◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz</span>
                  </div>
                  <div class="col-md-6">
                    <div class="plan-title">
                      <h3>
                        <a href="#">宇治抹茶スイーツ巡り</a>
                      </h3><br>
                      <p>投稿者：<a href="">◯◯◯◯</a>  作成日：◯◯◯◯年◯◯月◯◯日</p>
                    </div>
                  </div>
                  <div class="col-md-3 position-fix-plan-list">
                    <div class="position-fix-plan-list">
                      <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>：◯◯
                    </div>
                  </div>
                </div>

                  <div class="plan-contents">
                    <div class="col-md-8">
                      <p class="plan-idea">
                        目的地：京都符    訪問した年月：◯◯◯◯年◯◯月<br>
                        スポット：◯◯◯◯<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                      </p>
                      <p class="plan-detail-plan-list">
                        <a class="btn" href="#">View details »</a>
                      </p>
                    </div>
                    <div class="col-md-4">
                      <img alt="Bootstrap Image Preview" src="http://lorempixel.com/275/275/" />
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <!-- /.container -->
        </div>
      <!-- /.content-section-b -->
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


      <div class="content-section-c">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-4">
                <ul class="pagination">
                  <li>
                    <a href="#">Prev</a>
                  </li>
                  <li>
                    <a href="#">1</a>
                  </li>
                  <li>
                    <a href="#">2</a>
                  </li>
                  <li>
                    <a href="#">3</a>
                  </li>
                  <li>
                    <a href="#">4</a>
                  </li>
                  <li>
                    <a href="#">5</a>
                  </li>
                  <li>
                    <a href="#">Next</a>
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
              </div>
            </div>
          </div>
          <!-- /.container -->

      </div>
      <!-- /.content-section-a -->
