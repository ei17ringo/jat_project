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


    function mypage($id) {

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

    function show($id) {
      $sql = sprintf('SELECT * FROM `blogs` WHERE `id` = %d',
        mysqli_real_escape_string($this->dbconnect, $id)
        );
      $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
      $result  = mysqli_fetch_assoc($results);

      return $result;
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
