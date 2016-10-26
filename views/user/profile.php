<?php 
    $UsersController = new UsersController($db, $table_name, $action);
    $UsersController->action   = $action;
    $UsersController->resource = $resource;
    $UsersController->id       = $id;
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
                <a><?php echo $viewInfo['user_name']; ?></a>
              </h4>
              <div class="favorite-number">
                <?php if ((isset($viewOptions)) && ($viewOptions == "LIKE")): ?>
                  <form method="post" action="/jat_project/user/like/<?php echo $id ?>">
                    <button type='submit' name='user_like' value='send'>LIKE：◯◯</button>
                  </form>
                <?php else: ?>
                  <form method="post" action="/jat_project/user/unlike/<?php echo $id ?>">
                    <button type='submit' name='like' value='send'>UNLIKE：◯◯</button>
                  </form>
                <?php endif; ?>
                
              </div>
            </div>
            <div class="col-md-8 mypage-main">
              <ul class="nav nav-tabs">
                <li class="posted-plan">
                  <a href="#">「<?php echo $viewInfo['user_name']; ?>さん」が投稿した旅路</a>
                </li>
              </ul>

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
              
            </div>
          </div>
        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->