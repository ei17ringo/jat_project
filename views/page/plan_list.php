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
                              <form id="research" method="post" action="" class="form-horizontal" role="form">
                                <div class="modal-body">

                                    <label class="col-md-4 control-label">目的地：</label>
                                      <div class="col-md-8 research">
                                        <select class="form-control" name="prefecture" placeholder="都道府県">
                                          <option value="">都道府県の選択</option>
                                          <?php foreach($_SESSION['prefs'] as $pref): ?>
                                            <?php if($_SESSION['prefecture'] == $pref):?>
                                              <?php echo '<option value="'.$pref.'" selected="selected">'; ?><?php echo $pref; ?>
                                            <?php else: ?>
                                              <?php echo '<option value="'.$pref.'">'; ?><?php echo $pref; ?>
                                            <?php endif; ?>
                                          <?php endforeach; ?>
                                        </select>
                                      </div>

                                    <label class="col-md-4 control-label">旅する月：</label>
                                      <div class="col-md-8 research">
                                        <?php foreach($_SESSION['tsuki'] as $tsuki): ?>
                                          <?php $checked = ''; ?>
                                            <?php if (!empty($_SESSION['month'])) :?> 
                                              <?php foreach ($_SESSION['month'] as $month): ?>
                                                  <?php if ($month == $tsuki): ?>
                                                      <?php $checked = 'checked="checked"'; ?>
                                                    <?php endif; ?>
                                                  <?php endforeach; ?>
                                            <?php endif; ?>
                                                <?php echo '<input type="checkbox" name="month[]" value="'.$tsuki.'" '. $checked .'>'; ?><?php echo $tsuki; ?>
                                        <?php endforeach; ?>
                                      </div>


                                      <label class="col-md-4 control-label">交通手段：</label>
                                        <div class="col-md-8 research">
                                          <?php foreach($_SESSION['kotsu'] as $kotsu): ?>
                                            <?php $checked = ''; ?>
                                              <?php if(!empty($_SESSION['transpotation'])): ?>
                                                <?php foreach ($_SESSION['transpotation'] as $transpotation): ?>
                                                  <?php if ($transpotation == $kotsu): ?>
                                                      <?php $checked = 'checked="checked"'; ?>
                                                    <?php endif; ?>
                                                  <?php endforeach; ?>
                                              <?php endif; ?>
                                                <?php echo '<input type="checkbox" name="transpotation[]" value="'.$kotsu.'" '. $checked .'>'; ?><?php echo $kotsu; ?>
                                          <?php endforeach; ?>
                                        </div>

                                      <label class="col-md-4 control-label">投稿時期：</label>
                                        <div class="col-md-8 research">
                                          <select class="form-control" name='view' placeholder="選択してください">
                                            <option value="">選択してください</option>
                                              <?php if ($_SESSION['view'] == '1month'): ?>
                                                <option value="1month" selected="selected">直近１ヶ月</option>
                                              <?php else: ?>
                                                <option value="1month">直近１ヶ月</option>
                                              <?php endif; ?>
                                              <?php if ($_SESSION['view'] == '3months'): ?>
                                                <option value="3months" selected="selected">直近３ヶ月</option>
                                              <?php else: ?>
                                                <option value="3months">直近３ヶ月</option>
                                              <?php endif; ?>
                                              <?php if ($_SESSION['view'] == '6months'): ?>
                                                <option value="6months" selected="selected">直近６ヶ月</option>
                                              <?php else: ?>
                                                <option value="6months">直近６ヶ月</option>
                                              <?php endif; ?>
                                          </select>
                                        </div>

                                        <button type="submit" class="btn btn-block btn-default btn-warning" value="Login"/>Search</button>
                                </div>
                              </form>
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
<!--                         <option value="case_popular">人気順</option> -->
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
          <?php foreach($searchContent as $search): ?>
            <div class="content-section-a">
              <div class="container-fluid">
                <div class="row">
                  <div class="plans-show">
                    <div class="plan-upper-content">
                      <div class="col-md-3 tag-content">
                      </div>
                      <div class="col-md-6">
                        <div class="plan-title">
                          <h3>
                            <a href="../plan/detail/<?php echo htmlspecialchars($search['id'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($search['title'], ENT_QUOTES, 'UTF-8'); ?></a>
                          </h3><br>
                          <p>投稿者：<a href="../user/profile/<?php echo htmlspecialchars($search['user_id'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($search['user_name'], ENT_QUOTES, 'UTF-8'); ?>さん</a>  作成日：<?php echo htmlspecialchars($search['created'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </div>
                      </div>
                      <div class="col-md-3 position-fix-plan-list">
                        <!-- <div class="position-fix-plan-list">
                          <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>：◯◯
                        </div> -->
                      </div>
                    </div>
                      <div class="plan-contents">
                        <div class="col-md-8">
                          <p class="plan-idea">
                            訪問した年月：<?php echo htmlspecialchars($search['visit_year'], ENT_QUOTES, 'UTF-8'); ?>年<?php echo htmlspecialchars($search['visit_month'], ENT_QUOTES, 'UTF-8'); ?><br>
                            行き先：<?php echo htmlspecialchars($search['area_name'], ENT_QUOTES, 'UTF-8'); ?><br>
                            スポット：<?php echo htmlspecialchars($search['spot_name'], ENT_QUOTES, 'UTF-8'); ?>　混み具合：<?php echo htmlspecialchars($search['crowded'], ENT_QUOTES, 'UTF-8'); ?>　滞在時間：<?php echo htmlspecialchars($search['stay_time'], ENT_QUOTES, 'UTF-8'); ?>分<br>
                            交通手段：<?php echo htmlspecialchars($search['visit_type_name'], ENT_QUOTES, 'UTF-8'); ?><br>
                            コメント：<br>
                            <?php echo htmlspecialchars($search['comment']); ?>
                            
                          </p>
                          <p class="plan-detail-plan-list">
                            <a class="btn" href="../plan/detail/<?php echo htmlspecialchars($search['id'], ENT_QUOTES, 'UTF-8'); ?>">View details »</a>
                          </p>
                        </div>
                        <div class="col-md-4">
                          <img alt="Bootstrap Image Preview" src="../user_picture/<?php echo htmlspecialchars($search['picture_1'], ENT_QUOTES, 'UTF-8'); ?>" />
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <!-- /.container -->
            </div>
        <!-- /.content-section-a -->
        <?php endforeach; ?>
      </div>



        <script type="text/javascript">
          // function indexTab(){
          //   if(document.getElementById('tabChange')){
          //     id = document.getElementById('tabChange').value;
          //     if(id == 'case_new'){
          //       //フォーム
          //       document.getElementById('case_new').style.display = "";
          //       document.getElementById('case_popular').style.display = "none";
          //     }else if(id == 'case_popular'){
          //       //フォーム
          //       document.getElementById('case_new').style.display = "none";
          //       document.getElementById('case_popular').style.display = "";
          //     }
          //   }
          // }
          //オンロードさせ、リロード時に選択を保持
          // window.onload = indexTab;
        </script>


      <div class="content-section-c">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4">
              </div>
              <!-- <div class="col-md-4">
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
              </div> -->
              <div class="col-md-4">
              </div>
            </div>
          </div>
          <!-- /.container -->

      </div>
      <!-- /.content-section-a -->
