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
              <img alt="user-icon" src="<?php echo $path_adjust_string; ?>../user_picture/<?php echo $viewInfo['user_picture']; ?>" width="140" height="140">
              <h4>
                <a><?php echo $viewInfo['user_name']; ?>さん</a>
              </h4>
              <div class="favorite-number">
                <?php if ((isset($viewOptions)) && ($viewOptions == "LIKE")): ?>
                  <form method="post" action="/jat_project/user/like/<?php echo $id ?>">
                    <button type='submit' name='user_like' value='send'>LIKE：<?php echo htmlspecialchars($likeCount['cnt']); ?></button>
                  </form>
                <?php else: ?>
                  <form method="post" action="/jat_project/user/unlike/<?php echo $id ?>">
                    <button type='submit' name='like' value='send'>UNLIKE：<?php echo htmlspecialchars($likeCount['cnt']); ?></button>
                  </form>
                <?php endif; ?>
                
              </div>
            </div>
            <div class="col-md-8 mypage-main">
              <ul class="nav nav-tabs">
                <li class="posted-plan">
                  <a href="#">「<?php echo htmlspecialchars($viewInfo['user_name']); ?>さん」が投稿した旅路</a>
                </li>
              </ul>
<?php var_dump($friendPlanContents); ?>
              <?php foreach($friendPlanContents as $planItem): ?>
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
                                      <a href="../plan/detail/<?php echo htmlspecialchars($planItem['plan_id']); ?>"><?php echo htmlspecialchars($planItem['title']); ?></a>
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
                              </div>
                          </div>
                      </div>

                          <div class="col-md-12">
                              <p>投稿者：<a><?php echo htmlspecialchars($viewInfo['user_name']); ?></a>  作成日：<?php echo htmlspecialchars($planItem['created']); ?></p>
                          </div>
                  </div>

                  <div class="plan-contents">
                      <p class="plan-idea">
                              目的地：京都符    訪問した年月：<?php echo htmlspecialchars($planItem['visit_year']); ?>年<?php echo htmlspecialchars($planItem['visit_month']); ?>月<br>
                          スポット：<a href="../spot/detail/<?php echo htmlspecialchars($planItem['spot_id']); ?>"><?php echo htmlspecialchars($planItem['spot_name']); ?></a><br>
                          <h4>コメント：</h4><br>
                          <?php echo htmlspecialchars($planItem['comment']); ?><br>
                          
                        </p>
                        <p class="plan-detail">
                          <a class="btn" href="../plan/detail/<?php echo htmlspecialchars($planItem['plan_id']); ?>">View details »</a>
                        </p>
                  </div>
                </div>
              <?php endforeach; ?>
                
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
              
            </div>
          </div>
        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->