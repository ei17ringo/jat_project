<?php
    $UsersController = new UsersController($db, $table_name, $action);
    $UsersController->_new($_POST);
?>


    <a name="about"></a>
      <div class="intro-header-confirm">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">

                      <div class="modal-dialog">
                          <div class="modal-content">
                            <form method="post" action="/jat_project/user/save" class="form-horizontal" role="form">
                            <input type="hidden" name="action" value="submit">
                              <div class="modal-header">
                                <h1 class="text-center">登録内容確認</h1>
                              </div>
                                  <div id="register-info">
                                    <div class="form-group confirm-content">
                                        <label class="col-md-4 control-label">Username</label>
                                        <div class="col-md-8 area-set">
                                            <?php echo htmlspecialchars($_SESSION['user']['user_name'], ENT_QUOTES, 'UTF-8'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group confirm-content">
                                        <label class="col-md-4 control-label">Email address</label>
                                        <div class="col-md-8 area-set">
                                            <?php echo htmlspecialchars($_SESSION['user']['email'], ENT_QUOTES, 'UTF-8'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group confirm-content">
                                        <label class="col-md-4 control-label">Password</label>
                                        <div class="col-md-8 area-set">
                                            表示されません。
                                        </div>
                                    </div>
                                    
                                      <div class="form-group confirm-content">
                                        <div class="col-md-4 control-label">photo</div>
                                        <div class="text-center">
                                          <img src="../user_picture/<?php echo htmlspecialchars($_SESSION['user']['user_picture'], ENT_QUOTES, 'UTF-8'); ?>" width="100" height="100">
                                        </div>
                                      </div>

                                <div class="register-btn-confirm">
                                        <input type='submit' value = '戻る' onClick='history.back()' > | 
                                        <input type="submit" class="btn btn-lg btn-success" name="signup" value="登録する">
                                </div>
                              </div>
                            </form>

                          </div>
                      </div>

                </div>
            </div>

        </div>
        <!-- /.container -->
      </div>

