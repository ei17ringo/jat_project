<?php
    $UsersController = new UsersController($db, $table_name, $action);
    $UsersController->create($_POST);
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
                                
                                <form id="register-info" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Username</label>
                                        <div class="col-md-8 area-set">
                                            <input type="text" class="form-control" name="username" placeholder="半角英数字６文字以上" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Email address</label>
                                        <div class="col-md-8 area-set">
                                            <input type="text" class="form-control" name="email" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Password</label>
                                        <div class="col-md-8 area-set">
                                            <input type="password" class="form-control" name="password" placeholder="半角英数字６文字以上"/>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-4 control-label">photo</label>
                                            <div class="col-md-8 photo-upload">
                                                <input type="file" name="upfile" size="30" />
                                            </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-xs-10 col-xs-offset-5 register-btn">
                                            <input type="submit" class="btn btn-lg btn-success" name="signup" value="Sign up">
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
