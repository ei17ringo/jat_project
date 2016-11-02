<?php 
    $UsersController = new UsersController($db, $table_name, $action);
    $UsersController->action   = $action;
    $UsersController->resource = $resource;
    $error_message = $UsersController->_new($_POST);
?>
 
    <!-- Page Content -->

  <a  name="services"></a>
    <div class="content-section-mypage">

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2 mypage-profile">
              <img alt="user-icon" src="../user_picture/<?php echo htmlspecialchars($_SESSION['login']['user_picture'], ENT_QUOTES, 'UTF-8'); ?>" width="140" height="140" />
              <h4>
                <a href=""><?php echo htmlspecialchars($_SESSION['login']['user_name'], ENT_QUOTES, 'UTF-8'); ?></a>
              </h4>
              <div class="favorite-number">
                <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span><?php echo "\n" . htmlspecialchars($likeNum['cnt']); ?>
              </div>
            </div>
            <div class="col-md-8 mypage-main">
                <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#post_plan" aria-controls="post_plan" role="tab" data-toggle="tab">自分が投稿した旅路</a></li>
                <li role="presentation"><a href="#favorite_plan" aria-controls="favorite_plan" role="tab" data-toggle="tab">お気に入り旅路</a></li>
              </ul>

              <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="post_plan">
                    <?php foreach($postPlanContents as $planContent): ?>
                      <div class="post_plan">
                          <div class="plans-show">
                              <div class="plans-title">
                                  <div class="col-md-2">
                                      <div class="position-fix-favoritenum">
                                          <div class="favorite-number">
                                              <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>：◯◯
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-8">
                                      <div class="plan-title">
                                          <h3 class="plan-title-name">
                                              <a href="#"><?php echo htmlspecialchars($planContent['title']); ?></a>
                                          </h3>
                                      </div>
                                  </div>
                                  <div class="col-md-2">
                                  </div>

                                  <div class="tag-favonum">
                                      <div class="col-md-12 tag-content-mypage">
                                          <!-- <span class="glyphicon glyphicon-tags" aria-hidden="true">：◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijk</span> -->
                                      </div>
                                  </div>

                                  <div class="col-md-12">
                                      <div class="edit-btn">
                                          <a href="../plan/edit/<?php echo $planContent['id']; ?>" class="active">
                                              <div class="btn-set">
                                                  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                              </div>
                                          </a>
                                          <a href="#" class="active">
                                              <div class="btn-set">
                                                  <span class="glyphicon glyphicon-trash"></span>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                              </div>

                                  <div class="col-md-12">
                                      <p>投稿者：<a><?php echo htmlspecialchars($_SESSION['login']['user_name']); ?></a>  作成日：<?php echo htmlspecialchars($planContent['created']); ?></p>
                                  </div>
                          </div>

                          <div class="plan-contents">
                              <p class="plan-idea">
                                      目的地：京都符    訪問した年月：<?php echo htmlspecialchars($planContent['visit_year']); ?>年<?php echo htmlspecialchars($planContent['visit_month']); ?>月<br>
                                  スポット：<a href=""><?php echo htmlspecialchars($planContent['spot_name']); ?></a><br>
                                  <h4>コメント：</h4><br>
                                    <?php echo htmlspecialchars($planContent['comment']); ?><br>
                                </p>
                                <p class="plan-detail">
                                  <a class="btn" href="#">View details »</a>
                                </p>
                          </div>
                      </div>
                    <?php endforeach; ?>
                  </div>


                  <div role="tabpanel" class="tab-pane" id="favorite_plan">
                    <?php foreach($favPlans as $favPlan): ?>
                      <div class="post_plan">
                          <div class="plans-show">
                              <div class="plans-title">
                                  <div class="col-md-2">
                                      <div class="position-fix-favoritenum">
                                          <div class="favorite-number">
                                              <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>：◯◯
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-8">
                                      <div class="plan-title">
                                          <h3 class="plan-title-name">
                                              <a href="#"><?php echo htmlspecialchars($favPlan['title']); ?></a>
                                          </h3>
                                      </div>
                                  </div>
                                  <div class="col-md-2">
                                  </div>

                                  <div class="tag-favonum">
                                      <div class="col-md-12 tag-content-mypage">
                                          <!-- <span class="glyphicon glyphicon-tags" aria-hidden="true">：◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijk</span> -->
                                      </div>
                                  </div>

                                      <div class="col-md-12">
                                          <!-- <div class="edit-btn">
                                              <a href="#" class="active">
                                                  <div class="btn-set">
                                                      <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                  </div>
                                              </a>
                                              <a href="#" class="active">
                                                  <div class="btn-set">
                                                      <span class="glyphicon glyphicon-trash"></span>
                                                  </div>
                                              </a>
                                          </div> -->
                                      </div>
                              </div>

                                  <div class="col-md-12">
                                      <p>投稿者：<a href=""><?php echo htmlspecialchars($favPlan['user_name']); ?></a>  作成日：<?php echo htmlspecialchars($favPlan['created']); ?></p>
                                  </div>
                          </div>

                          <div class="plan-contents">
                              <p class="plan-idea">
                                      目的地：京都符    訪問した年月：<?php echo htmlspecialchars($favPlan['visit_year']); ?>年<?php echo htmlspecialchars($favPlan['visit_month']); ?>月<br>
                                  スポット：<a href=""><?php echo htmlspecialchars($favPlan['spot_name']); ?></a><br>
                                  <h4>コメント：</h4><br>
                                    <?php echo htmlspecialchars($favPlan['comment']); ?><br>
                                </p>
                                <p class="plan-detail">
                                  <a class="btn" href="#">View details »</a>
                                </p>
                          </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
              </div>



                
              <div class="col-md-12 mypage-pagi">
                <ul class="pagination">
                <?php if($page > 1): ?>
                  <li>
                    <a href="mypage?page=1">最初へ</a>
                  </li>
                  <li>
                    <a href="mypage?page=<?php echo $page -1; ?>">Prev</a>
                  </li>
                <?php endif; ?>
                <?php if($page < $maxPage): ?>
                  <li>
                    <a href="mypage?page=<?php echo $page +1; ?>">Next</a>
                  </li>
                  <li>
                    <a href="mypage?page=<?php echo $maxPage; ?>">最後へ</a>
                  </li>
                <?php endif; ?>
                </ul>
              </div>
            </div>
            <div class="col-md-2">
              <h4>
                お気に入りユーザー
              </h4>
              <?php if (isset($favUserList)): ?> 
              <?php foreach ($favUserList as $userList): ?>
              <div class="favorite-user-list">
                <div class="favorite-user-picture">
                  <img alt="user-icon" class="favorite-user-picture" src="../user_picture/<?php echo htmlspecialchars($userList['user_picture'], ENT_QUOTES, 'UTF-8'); ?>" />
                </div>
                <div class="favorite-user-name-area">
                  <p>
                    <a href="profile/<?php echo $userList['favorite_user_id']?>"><?php echo $userList['user_name']?></a>
                  </p>
                </div>
              </div>
              <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->