<?php
  session_start();

  // Cookies挿入
if (isset($_COOCKIE['user_name']) && $_COOKIE['user_name'] !='') {
  $_POST['user_name']    = $_COOKIE['user_name'];
  $_POST['password'] = $_COOKIE['password'];
  $_POST['save']     = 'on';
}


  // ログインボタンクリック時
if (!empty($_POST)) {
  if ($_POST['user_name'] !='' && $_POST['password'] !='') {
    // ログイン処理
    $sql = sprintf('SELECT * FROM `users` WHERE `user_name` = "%s" AND password="%s"',
        mysqli_real_escape_string($db, $_POST['user_name']),
        mysqli_real_escape_string($db, sha1($_POST['password']))
        );
    // SQLの実行と変数に格納
    $record = mysqli_query($db, $sql) or die(mysqli_error($db));

    if ($table = mysqli_fetch_assoc($record)) {
      // ログイン成功
      $_SESSION['id']   = $table['users_id'];
      $_SESSION['time'] = time();

      // cookieにログイン情報を記録する
      if ($_POST['save'] == 'on') {
        setcookie('user_name', $_POST['user_name'], time()+60*60*24*14);
        setcookie('password', $_POST['password'], time()+60*60*24*14);


      // リダイレクト
      header('Location: mypage.php');


      }
      exit();
    } else {
      // ログイン失敗
      $error['login'] = 'failed';
    }
  } else {
    // 必須エラー
    $error['login'] = 'blank';
  }
}






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
                                      <?php if (isset($_POST['user_name'])): ?>
                                         <input type="text" name="user_name" class="form-control input-lg" placeholder="Username" value="<?php echo htmlspecialchars($_POST['user_name'], ENT_QUOTES, 'UTF-8'); ?>">
                                      <?php else: ?>
                                        <input type="text" name="user_name" class="form-control input-lg" placeholder="Username">
                                      <?php endif; ?>
                                      <!-- 必須エラー文 -->
                                      <?php if(isset($error['login']) && $error['login'] == 'blank'): ?>
                                        <p class="error">* ユーザーネームとパスワードをご記入ください。</p>
                                      <?php endif; ?>
                                      <!-- ログインエラー文 -->
                                      <?php if (isset($error['login']) && $error['login'] == 'failed'): ?>
                                        <p class="error">* ログインに失敗しました。正しくご記入ください。</p>
                                      <?php endif; ?>
                                    </div>

                                    <div class="form-group">
                                      <?php if(isset($_POST['password'])): ?>
                                         <input type="password" name="password" class="form-control input-lg" placeholder="Password" value=" <?php echo htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8'); ?>">
                                      <?php else: ?>
                                        <input type="password" name="password" class="form-control input-lg" placeholder="Password">
                                      <?php endif; ?>
                                    </div>

                                    <div class="checkbox-cokkie">
                                        <input type="checkbox" id="save" value="on"> ログイン情報を保存する
                                    </div>

                                    <div class="form-group">
                                       <input type="submit" class="btn btn-block btn-lg btn-primary" value="Login"/>
                                       <span class="pull-right"><a href="/jat_project/user/create">Register</a></span>
                                    </div>

                                </div>
                          </div>
                       </div>

                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
