<?php
    $UsersController = new UsersController($db, $table_name, $action);
    $UsersController->confirm($_POST);
?>


    <a name="about"></a>
      <div class="intro-header-confirm">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">

                      <div class="modal-dialog">
                          <div class="modal-content">
                            <form method="post" action="" class="form-horizontal" role="form">
                            <input type="hidden" name="action" value="submit">
                              <div class="modal-header">
                                <h1 class="text-center">登録内容確認</h1>
                              </div>
                                  <div id="register-info">
                                    <div class="form-group confirm-content">
                                        <label class="col-md-4 control-label">Username</label>
                                        <div class="col-md-8 area-set">
                                            seed_jat
                                        </div>
                                    </div>

                                    <div class="form-group confirm-content">
                                        <label class="col-md-4 control-label">Email address</label>
                                        <div class="col-md-8 area-set">
                                            jatjat@jat.com
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
                                        <div class="text-center"><!-- <img src="../member_picture/<?php echo htmlspecialchars($_SESSION['join']['picture_path'],ENT_QUOTES, 'UTF-8'); ?>" width="100" height="100"> --></div>
                                      </div>

                                <div class="register-btn-confirm">
                                        <a href="index.php?action=rewrite">&laquo;&nbsp;書き直す</a> | 
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

