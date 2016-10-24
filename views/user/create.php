<?php 
    $UsersController = new UsersController($db, $table_name, $action);
    $UsersController->action   = $action;
    $UsersController->resource = $resource;
    $error_message = $UsersController->_new($_POST);
 ?>

    <a name="about"></a>
    <div class="intro-header-register">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">

                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="text-center">会員登録</h1>
                              </div>
                                
                                <form id="register-info" method="post" action="" class="form-horizontal" role="form" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Username</label>
                                        <div class="col-md-8 area-set">
                                            <?php if (isset($_POST['user_name'])): ?>
                                                <input type="text" class="form-control" name="user_name" placeholder="JATくん" value="<?php echo htmlspecialchars($_POST['user_name'], ENT_QUOTES,'UTF-8'); ?>">
                                            <?php else: ?>
                                                <input type="text" class="form-control" name="user_name" placeholder="JATくん" value="">
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Email address</label>
                                        <div class="col-md-8 area-set">
                                            <?php if (isset($_POST['email'])): ?>
                                                <input type="text" class="form-control" name="email" placeholder="例： seed@nex.com"  value="<?php echo htmlspecialchars($_POST['email'], ENT_QUOTES,'UTF-8'); ?>">
                                            <?php else: ?>
                                                <input type="text" class="form-control" name="email" placeholder="例： seed@nex.com"  value="">
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Password</label>
                                        <div class="col-md-8 area-set">
                                                <input type="password" class="form-control" name="password" placeholder="半角英数字４文字以上16文字以下" value="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Password(再入力)</label>
                                        <div class="col-md-8 area-set">
                                                <input type="password" class="form-control" name="password_check" placeholder="パスワードを再入力してください。" value="">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-4 control-label">photo</label>
                                            <div class="col-md-8 photo-upload">
                                                <input type="file" name="user_picture" class="form-control" size="100">
                                            </div>
                                            <div class="error_message">
                                        <!-- エラーメッセージ -->
                                                <?php
                                                    if (isset($error_message)&&(count($error_message)>0)) {
                                                        foreach ($error_message as $message) {
                                                            echo $message;
                                                        }
                                                    }
                                                ?>
                                            </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-xs-10 col-xs-offset-5 register-btn">

                                            <input type="submit" class="btn btn-lg btn-success" value="確認画面へ">
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
