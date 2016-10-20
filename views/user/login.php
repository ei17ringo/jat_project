<?php 
    $UsersController = new UsersController($db, $table_name, $action);
    $UsersController->action   = $action;
    $UsersController->resource = $resource;
    $error_message = $UsersController->_new($_POST);
?>

    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">

                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="text-center">Welcome</h1>
                              </div>

                              <form id="login-info" method="post" action="" class="form-horizontal" role="form">
                                <div class="modal-body">
                                    <div class="form-group">
                                      <?php if (isset($_POST['user_name'])): ?>
                                         <input type="text" name="user_name" class="form-control input-lg" placeholder="Username" value="<?php echo htmlspecialchars($_POST['user_name'], ENT_QUOTES, 'UTF-8'); ?>">
                                      <?php else: ?>
                                        <input type="text" name="user_name" class="form-control input-lg" placeholder="Username">
                                      <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                      <?php if(isset($_POST['password'])): ?>
                                         <input type="password" name="password" class="form-control input-lg" placeholder="Password" value="<?php echo htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8'); ?>">
                                      <?php else: ?>
                                        <input type="password" name="password" class="form-control input-lg" placeholder="Password">
                                      <?php endif; ?>
                                    </div>

                                    <?php if(isset($error_message)&&(count($error_message)>0)): ?>
                                      <div class="error_message">
                                        <!-- エラーメッセージ -->
                                        <?php
                                            foreach ($error_message as $message){
                                              echo $message;
                                            }
                                        ?>
                                      </div>
                                    <?php endif; ?>

                                    <div class="form-group">
                                      <div class="checkbox-cokkie">
                                          <input type="checkbox" id="save" name="save" value="on"> ログイン情報を保存する
                                      </div>
                                    </div>

                                    <div class="form-group">
                                       <input type="submit" class="btn btn-block btn-lg btn-primary" value="Login"/>
                                       <span class="pull-right"><a href="/jat_project/user/create">Register</a></span>
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
