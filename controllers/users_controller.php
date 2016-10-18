<?php
  session_start();
  // コントローラのクラスをインスタンス化
  $controller = new UsersController();

  $controller->resource = $resource;
  $controller->action = $action;

  // アクション名によって、呼び出すメソッドを変える
  switch ($action) {
    case 'create';
        $controller->create();
        break;
    case 'confirm':
        $controller->confirm();
        break;
    case 'login':
        $controller->login();
        break;
    case 'mypage';
        $controller->mypage($id);
        break;
    case 'profle';
        $controller->profile($id);
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


        if ($sd['password'] == "") {
          $error_message[] = "* パスワードを入力してください。<br>";
        } else if ($sd['password'] !== "") {
          if  ((strlen($sd['password']) < 4) || (strlen($sd['password']) > 16)) {
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
      }
        // //書き直し
        // if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'rewrite') {
        //   // $_GET['action] == 'rewrite'　でも良い]
        //   $_POST            = $_SESSION['user'];
        //   $error['rewrite'] = true;
    }


    function create() {
      $resource = $this->resource;
      $action   = 'create';


      require('views/layouts/application.php');
    }

    function confirm() {
      // ⑦モデルを呼び出す
      $user        = new User();
      // まだデータベースに保存しなくて良い
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

      require('views/layouts/application.php');
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
        setcookie('email', '', time() - 3600);
        setcookie('password', '', time() - 3600);

      header('Location: login');
      exit();
    }

    function mypage($id) {
      $user        = new User();
      $viewOptions = $user->mypage($id);
      $action      = 'mypage';

      require('views/layouts/application.php');
    }

      function profile($id) {
      $user        = new User();
      $viewOptions = $user->profile($id);
      $action      = 'profile';

      require('views/layouts/application.php');
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
