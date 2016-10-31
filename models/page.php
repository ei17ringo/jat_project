<?php
  
  class Page {
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


    function indexContent() {
      $sql = 'SELECT * FROM `plans` ORDER BY `id` DESC LIMIT 4';
      $content = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
      // 連想配列としてSQLの実行結果を受け取る(keyと値)
      $contents     = array();
      while ($table = mysqli_fetch_assoc($content)) {
        $contents[] = $content;
      }
      return $content;
    }

    
  }

?>
