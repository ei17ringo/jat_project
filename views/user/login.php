<?php
    $UsersController = new UsersController($db, $table_name, $action);
    $users = $UsersController->login();
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
                                <div class="modal-body">
                                    <div class="form-group">
                                       <input type="text" class="form-control input-lg" placeholder="Username"/>
                                    </div>

                                    <div class="form-group">
                                       <input type="password" class="form-control input-lg" placeholder="Password"/>
                                    </div>

                                    <div class="checkbox-cokkie">
                                        <input type="checkbox" value="checkboxA"> ログイン情報を保存する
                                    </div>

                                    <div class="form-group">
                                       <input type="submit" class="btn btn-block btn-lg btn-primary" value="Login"/>
                                       <span class="pull-right"><a href="/jat_project/users/create/">Register</a></span>
                                    </div>

                                </div>
                          </div>
                       </div>

                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
