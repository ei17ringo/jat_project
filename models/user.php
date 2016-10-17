<?php
  class User {
    // プロパティ
    private $dbconnect = '';
    // コンストラクタ
    function __construct() {
      // DB接続ファイルを読み込む
      require('dbconnect.php');
      // DB接続設定の値をプロパティに代入
      $this->dbconnect = $db;
    }

    function index() {
      // SQLの実行
      $sql     = 'SELECT * FROM `blogs` WHERE `delete_flag` = 0';
      $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
      $rtn     = array();
      while ($result = mysqli_fetch_assoc($results)) {
        $rtn[] = $result;
      }
      // 取得結果を返す
      return $rtn;
    }

    function create() {

      //     // ユーザーネームの重複チェック
      // if (empty($error)) {
      //   $sql = sprintf('SELECT COUNT(*) AS cnt FROM `users` WHERE `user_name` = "%s"',
      //     mysqli_real_escape_string($this->dbconnect, $user_name)
      //     );
      //   // SQL実行(失敗したらエラーを表示)
      //   $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->db));
      //   // 連想配列としてSQLの実行結果を受け取る(keyと値)
      //   $result = mysqli_fetch_assoc($results);
      //   if ($table['cnt'] > 0) {
      //     // 同じメールアドレスが１件以上あったらエラー
      //     $error['user_name'] = 'duplicate';
      //   }
      // }

      // // メールアドレスの重複チェック
      // if (empty($error)) {
      //   $sql = sprintf('SELECT COUNT(*) AS cnt FROM `users` WHERE `email` = "%s"',
      //     mysqli_real_escape_string($this->dbconnect, $email)
      //     );
      //   // SQL実行(失敗したらエラーを表示)
      //   $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
      //   // 連想配列としてSQLの実行結果を受け取る(keyと値)
      //   $result = mysqli_fetch_assoc($results);
      //   if ($table['cnt'] > 0) {
      //     // 同じメールアドレスが１件以上あったらエラー
      //     $error['email'] = 'duplicate';
      //   }
      // }

      // // エラーがない場合
      // if (empty($error)) {
      //   // 画像をアップロードする
      //   $user_picture = date('YmdHis') . $_FILES['user_picture']['name'];
      //   move_uploaded_file($_FILES['user_picture']['tmp_name'], '../webroot/assets/user_picture/' . $user_picture);
      //   // セッションに値を保存
      //   $_SESSION['user']                 = $sd;
      //   $_SESSION['user']['user_picture'] = $user_picture;
      //   // confirm.phpへ移動
      //   header('Location: confirm.php');
      //   exit();
      // }
    }

    function show($id) {
      $sql = sprintf('SELECT * FROM `blogs` WHERE `id` = %d',
        mysqli_real_escape_string($this->dbconnect, $id)
        );
      $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
      $result  = mysqli_fetch_assoc($results);

      return $result;
    }

    function confirm($post) {
      $sql = sprintf('INSERT INTO `users` SET `user_name`="%s", `email`="%s", `password`="%s", `user_picture`="%s", `created`=now()',
               
                mysqli_real_escape_string($this->dbconnect, $_SESSION['user']['user_name']),
                mysqli_real_escape_string($this->dbconnect, $_SESSION['user']['email']),
                mysqli_real_escape_string($this->dbconnect, sha1($_SESSION['user']['password'])),
                mysqli_real_escape_string($this->dbconnect, $_SESSION['user']['user_picture'])
            );
            mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
            unset($_SESSION['user']);

      // login.phpへリダイレクト
      header('Location: login.php');
      exit();

    }


    function edit($id) {
      $sql = sprintf('SELECT * FROM `blogs` WHERE `id` = %d',
        mysqli_real_escape_string($this->dbconnect, $id)
        );
      $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
      $result  = mysqli_fetch_assoc($results);

      return $result;
    }

    function update($post, $id) {
      $sql = sprintf('UPDATE `blogs` SET `title`= "%s",`body`= "%s" WHERE `id` = %d',
        mysqli_real_escape_string($this->dbconnect, $post['title']),
        mysqli_real_escape_string($this->dbconnect, $post['body']),
        mysqli_real_escape_string($this->dbconnect, $id)
        );
      mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
    }

    function delete($id) {
      $sql = sprintf('UPDATE `blogs` SET `delete_flag`= 1 WHERE `id` = %d',
        mysqli_real_escape_string($this->dbconnect, $id)
        );
      mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
    }

  }

?>
