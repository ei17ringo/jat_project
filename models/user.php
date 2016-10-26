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

    function save() {
      $sql = sprintf('INSERT INTO `users` SET `user_name`="%s", `email`="%s", `password`="%s", `user_picture`="%s", `created`=now()',

                mysqli_real_escape_string($this->dbconnect, $_SESSION['user']['user_name']),
                mysqli_real_escape_string($this->dbconnect, $_SESSION['user']['email']),
                mysqli_real_escape_string($this->dbconnect, sha1($_SESSION['user']['password'])),
                mysqli_real_escape_string($this->dbconnect, $_SESSION['user']['user_picture'])
            );
            mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
            unset($_SESSION['user']);
    }


    function login() {
      $sql = sprintf('SELECT * FROM `users` WHERE `user_name` = "%s" AND password="%s"',
        mysqli_real_escape_string($this->dbconnect, $_SESSION['user']['user_name']),
        mysqli_real_escape_string($this->dbconnect, sha1($_SESSION['user']['password']))
        );
    // SQLの実行と変数に格納
      $record = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
      return $record;
    }


    function mypage() {
      // SQLの実行
      $sql     = 'SELECT * FROM `users` WHERE `id` = "%d"';
      $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
      // $rtn     = array();
      // while ($result = mysqli_fetch_assoc($results)) {
      //   $rtn[] = $result;
      // }
      // 取得結果を返すresultsに入らない
      return $results; 
    }

    function profile($id) {

    }

    function show($id) {
      $sql = sprintf('SELECT * FROM `blogs` WHERE `id` = %d',
        mysqli_real_escape_string($this->dbconnect, $id)
        );
      $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
      $result  = mysqli_fetch_assoc($results);
    }


    function likeStatus($id) {
      $sql = sprintf('SELECT COUNT(*) AS cnt FROM `user_like` WHERE `user_id` = %d AND `favorite_user_id`= %d',
        mysqli_real_escape_string($this->dbconnect, $_SESSION['login']['id']),
        mysqli_real_escape_string($this->dbconnect, $id)
            );
      // SQL実行(失敗したらエラーを表示)
      $record = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
      // 連想配列としてSQLの実行結果を受け取る(keyと値)
      $table = mysqli_fetch_assoc($record);

      $likeStatus = '';
      if ($table >= 1) {
        // 同じメールアドレスが１件以上あったらエラー
        $likeStatus = 'UNLIKE';
      } else if ($table == 0) {
        $likeStatus = 'LIKE';
      }
      return $likeStatus;
    }


    function like($id) {
      $sql = sprintf('INSERT INTO `user_like`(`user_id`, `favorite_user_id`) VALUES ( %d, %d)',

        mysqli_real_escape_string($this->dbconnect, $_SESSION['login']['id']),
        mysqli_real_escape_string($this->dbconnect, $id)
      );
      mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
    }


    function unlike($id) {
      $sql = sprintf('DELETE FROM `user_like` WHERE `user_id` = %d AND `favorite_user_id`= %d',

        mysqli_real_escape_string($this->dbconnect, $_SESSION['login']['id']),
        mysqli_real_escape_string($this->dbconnect, $id)
      );
      mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
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
