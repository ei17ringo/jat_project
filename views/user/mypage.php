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
                <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>：◯◯
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
                      <div class="post_plan">
                          <div class="plans-show">
                              <div class="plans-title">
                                  <div class="col-md-12">
                                      <div class="plan-title">
                                          <h3 class="plan-title-name">
                                              <a href="#">宇治抹茶スイーツ巡り宇治抹茶スイーツ巡り宇治抹茶スイーツ巡り宇治抹茶スイーツ巡り</a>
                                          </h3>
                                      </div>
                                  </div>

                                      <div class="tag-favonum">
                                          <div class="col-md-10 tag-content-mypage">
                                              <span class="glyphicon glyphicon-tags" aria-hidden="true">：◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz</span>
                                          </div>
                                          <div class="col-md-2">
                                              <div class="position-fix-favoritenum">
                                                  <div class="favorite-number">
                                                      <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>：◯◯
                                                  </div>
                                              </div>
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
                                      <p>投稿者：<a href="">◯◯◯◯</a>  作成日：◯◯◯◯年◯◯月◯◯日</p>
                                  </div>
                          </div>

                          <div class="plan-contents">
                              <p class="plan-idea">
                                      目的地：京都符    訪問した年月：◯◯◯◯年◯◯月<br>
                                  スポット：<a href="">◯◯◯◯</a><br>
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
                                <p class="plan-detail">
                                  <a class="btn" href="#">View details »</a>
                                </p>
                          </div>
                      </div>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="favorite_plan">
                      <div class="post_plan">
                          <div class="plans-show">
                              <div class="plans-title">
                                  <div class="col-md-12">
                                      <div class="plan-title">
                                          <h3 class="plan-title-name">
                                              <a href="#">巡り</a>
                                          </h3>
                                      </div>
                                  </div>

                                      <div class="tag-favonum">
                                          <div class="col-md-10 tag-content-mypage">
                                              <span class="glyphicon glyphicon-tags" aria-hidden="true">：◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz</span>
                                          </div>
                                          <div class="col-md-2">
                                              <div class="position-fix-favoritenum">
                                                  <div class="favorite-number">
                                                      <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>：◯◯
                                                  </div>
                                              </div>
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
                                      <p>投稿者：<a href="">◯◯◯◯</a>  作成日：◯◯◯◯年◯◯月◯◯日</p>
                                  </div>
                          </div>

                          <div class="plan-contents">
                              <p class="plan-idea">
                                      目的地：京都符    訪問した年月：◯◯◯◯年◯◯月<br>
                                  スポット：<a href="">◯◯◯◯</a><br>
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
                                <p class="plan-detail">
                                  <a class="btn" href="#">View details »</a>
                                </p>
                          </div>
                      </div>
                  </div>
              </div>

                
              <div class="col-md-12 mypage-pagi">
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