<?php
  session_start();
  // コントローラのクラスをインスタンス化
  $controller = new UsersController();

  $controller->resource = $resource;
  $controller->action   = $action;
  $controller->id       = $id;

  // アクション名によって、呼び出すメソッドを変える
  switch ($action) {
    case 'create';
        $controller->create();
        break;
    case 'confirm':
        $controller->confirm();
        break;
    case 'save':
        $controller->save($post);
        break;
    case 'login':
        $controller->login();
        break;
    case 'mypage';
        $controller->mypage();
        break;
    case 'profile';
        $controller->profile($id);
        break;
    case 'like';
        $controller->like($id);
        break;
    case 'unlike';
        $controller->unlike($id);
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'update':
        $controller->update($id, $post);
        break;
    case 'delete':
        $controller->delete($id);
        break;
    case 'logout':
        $controller->logout($id);
        break;
    default:
        break;
  }

  class UsersController {
    var $resource      ='';
    var $action        ='';
    var $error_message ='';

      function _new($sd){
        $resource = $this->resource;
        $action   = $this->action;


        if ($action == 'create') {
            // 確認ボタン押下
            // エラーメッセージ格納
            $error_message = array();
          if (!empty($sd)) {
              if ($sd['user_name'] !== "") {
                //データがセットされていたら各変数にPOSTのデータを格納
                $_SESSION['user']['user_name'] = htmlspecialchars($sd["user_name"],ENT_QUOTES);
                $_SESSION['user']['user_name'] = trim(mb_convert_kana($_SESSION['user']['user_name'], "s", 'UTF-8'));
              } else {
                $error_message[] = "* ユーザーネームを入力してください。<br>";
              }


              if ($sd['email'] !== "") {
                $_SESSION['user']['email'] = htmlspecialchars($sd["email"],ENT_QUOTES);
                $_SESSION['user']['email'] = trim(mb_convert_kana($_SESSION['user']['email'], "s", 'UTF-8'));
              } else {
                $error_message[] = "* メールアドレスを入力してください。<br>";
              }


              if (($sd['password'] == "") || ($sd['password_check'] == "")) {
                $error_message[] = "* パスワードを入力してください。<br>";

              } else if (($sd['password'] !== "") && ($sd['password_check'] !== "")) {
                  if ($sd['password'] !== $sd['password_check']) {
                      $error_message[] = "* パスワードが一致しません。<br>";

                } else if ((strlen($sd['password']) < 4) || (strlen($sd['password']) > 16)) {
                  $error_message[] = "* パスワードは４文字以上16文字以下で入力してください。<br>";

                } else {
                  $_SESSION['user']['password'] = htmlspecialchars($sd["password"],ENT_QUOTES);
                  $_SESSION['user']['password'] = trim(mb_convert_kana($_SESSION['user']['password'], "s", 'UTF-8'));
                }
              }


              if ($_FILES['user_picture'] == "") {
                $error_message[] = "* 恐れ入りますが、画像を改めて指定してください。<br>";
              } else if ($_FILES['user_picture'] !== "") {
                $fileName = $_FILES['user_picture']['name'];
                if (!empty($fileName)) {
                  $ext = substr($fileName, -3);
                  $ext = strtolower($ext);
                if ($ext != 'jpg' && $ext != 'gif' && $ext != 'png') {
                  $error_message[] = "* 「.gif」、「.jpg」、「.png」の画像を指定してください。<br>";
                  } 
                }
              }

              if (isset($_SESSION['user']['duplicate']) && ($_SESSION['user']['duplicate'] == true)) {
                $error_message[] = "* 指定されたユーザーネームは既に登録されています。";
                return $error_message;
              }
                


            if (!count($error_message)){
              // 画像をアップロードする
              $user_picture = date('YmdHis') . $_FILES['user_picture']['name'];
              move_uploaded_file($_FILES['user_picture']['tmp_name'], 'user_picture/' . $user_picture);
              // セッションに値を保存
              $_SESSION['user']                 = $_POST;
              $_SESSION['user']['user_picture'] = $user_picture;
              //確認ページヘ
              header("Location:confirm");
              exit;
              } else {
              return $error_message;
              }

              unset($_SESSION['user']['duplicate']);
          }

            // if (!empty($sd)) 閉じ

            // //書き直し
            // if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'rewrite') {
            //   // $_GET['action] == 'rewrite'　でも良い]
            //   $_POST            = $_SESSION['user'];
            //   $error['rewrite'] = true;
        }
          // if ($action == 'create')閉じ

        if ($action == 'login') {
            // Cookies挿入
          if (isset($_COOCKIE['email']) && $_COOKIE['email'] !='') {
            $_POST['email']    = $_COOKIE['email'];
            $_POST['password'] = $_COOKIE['password'];
            $_POST['save']     = 'on';
          } else if (isset($sd['save'])) {
            $_POST['save'] = $sd['save'];
          } else {
            $_POST['save'] = 'off';
          }
            // 確認ボタン押下
            // エラーメッセージ格納
            $error_message = array();
          if (!empty($sd)) {
              if ($sd['user_name'] !== "") {
                //データがセットされていたら各変数にPOSTのデータを格納
                $_SESSION['user']['user_name'] = htmlspecialchars($sd["user_name"],ENT_QUOTES);
                $_SESSION['user']['user_name'] = trim(mb_convert_kana($_SESSION['user']['user_name'], "s", 'UTF-8'));
              } else {
                $error_message[] = "* ユーザーネームを入力してください。<br>";
              }


              if ($sd['password'] !== "") {
                if ((strlen($sd['password']) < 4) || (strlen($sd['password']) > 16)) {
                  $error_message[] = "* パスワードは４文字以上16文字以下で入力してください。<br>";
                } else {
                  $_SESSION['user']['password'] = htmlspecialchars($sd["password"],ENT_QUOTES);
                  $_SESSION['user']['password'] = trim(mb_convert_kana($_SESSION['user']['password'], "s", 'UTF-8'));
                }
              } else {
                $error_message[] = "* パスワードを入力してください。<br>";
              }

            if (!count($error_message)) {
              $user        = new User();
              $record = $user->login();

              if ($table = mysqli_fetch_assoc($record)) {
                // ログイン成功
                $_SESSION['login']['id']           = $table['id'];
                $_SESSION['login']['user_name']    = $table['user_name'];
                $_SESSION['login']['user_picture'] = $table['user_picture'];
                $_SESSION['time']                  = time();

                  // cookieにログイン情報を記録する
                if ($_POST['save'] == 'on') {
                  $_SESSION['save'] = 'on';
              }

                header("Location:../page/index");
                exit;
              } else {
                $error_message[] = "* ユーザーネームまたはパスワードが間違っています。<br>";
                return $error_message;
              }
            } else {
              return $error_message;
            }
            // if (!count($error_message))閉じ
          }
          // if (!empty($sd))閉じ
        }
        // if ($action == 'login')閉じ
      }
      // function _new($sd)閉じ


    function create() {
      $resource = $this->resource;
      $action   = 'create';

      require('views/layouts/application.php');
    }

    function confirm() {
      // ⑦モデルを呼び出す
      $user        = new User();
      $viewOptions = $user->duplicate();
      // まだデータベースに保存しなくて良い
      if (isset($viewOptions['user_name']) && ($viewOptions['user_name'] == 'duplicate')) {
        $_SESSION['user']['duplicate'] = true;
        header("Location: create");
        exit;
      }
      // $viewOptions = $user->confirm();
      $resource    = $this->resource;
      $action      = 'confirm';

      require('views/layouts/application.php');
    }

    function save() {
            // ⑦モデルを呼び出す
      $user        = new User();
      $viewOptions = $user->save();
      $resource    = $this->resource;
      $action      = 'save';

      // indexへ遷移
      header('Location: login');
      exit();
    }

    function login() {
      $resource    = $this->resource;
      $action      = 'login';
      $this->_loginCheck();

      if ($_SESSION['loginCheck'] == 'true') {
        header('Location: ../page/index');
        exit();
      }
        require('views/layouts/application.php');
    }


    function _loginCheck() {
      if (isset($_SESSION['login']['id'])) {
        $_SESSION['loginCheck'] = 'true';
      } else if (empty($_SESSION['login']['id'])) {
        $_SESSION['loginCheck'] = 'false';
      }
    }


    function logout($id) {
      $resource    = $this->resource;
      $action      = 'logout';

        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
          $params = session_get_cookie_params();
          setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
        }
        session_destroy();


        // Cookie情報も削除
        setcookie('user_name', '', time() - 3600);
        setcookie('password', '', time() - 3600);

      header('Location: login');
      exit();
    }


    function mypage() {
      $user        = new User();
      // $viewOptions = $user->mypage();
      $resource    = $this->resource;
      $action      = 'mypage';
      $myView = $user->mypage();
      $this->_loginCheck();


      if ($_SESSION['loginCheck'] == 'false') {
        header('Location: ../user/login');
        exit();

      }
      require('views/layouts/application.php');
    }


    function profile($id) {
      $user        = new User();
      $viewOptions = $user->likeStatus($id);
      $resource    = $this->resource;
      $action      = 'profile';

      require('views/layouts/application.php');
    }


    function like($id) {
      $user        = new User();
      $viewOptions = $user->like($id);
      $resource    = $this->resource;
      $action      = 'like';


      header("Location: ../profile/$id");
      exit();
    }


    function unlike($id) {
      $user        = new User();
      $viewOptions = $user->unlike($id);
      $resource    = $this->resource;
      $action      = 'unlike';

      header("Location: ../profile/$id");
      exit();
    }


    function edit($id) {
      $user        = new User();
      $viewOptions = $user->edit($id);
      $action      = 'edit';

      require('views/layouts/application.php');
    }

    function update($post, $id) {
      $user = new User();
      $user->update($id, $post);

      // indexへ遷移
      header('Location: /seed_blog/blogs/index');
      exit();
    }

    function delete($id) {
      $user        = new User();
      $viewOptions = $user->delete($id);
      $action      = 'delete';

      // indexへ遷移
      header('Location: /seed_blog/blogs/index');
      exit();
    }


  }

?>
