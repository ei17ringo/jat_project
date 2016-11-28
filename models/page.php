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
      $sql = 'SELECT * FROM `plans` p, `users` u, (SELECT * FROM `plan_spots` WHERE `spot_number` = 1) ps WHERE p.`user_id` = u.`id` AND p.`id` = ps.`plan_id` ORDER BY p.`id` DESC LIMIT 4';
      $content = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
      // 連想配列としてSQLの実行結果を受け取る(keyと値)
      $contents     = array();
      while ($table = mysqli_fetch_assoc($content)) {
        $contents[] = $table;
      }
      return $contents;
    }


    function planView() {
      $sql = 'SELECT * FROM `plans` ORDER BY `id` DESC LIMIT 4';
      $content = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
      // 連想配列としてSQLの実行結果を受け取る(keyと値)
      $contents     = array();
      while ($table = mysqli_fetch_assoc($content)) {
        $contents[] = $content;
      }
      return $content;
    }


    function searchContent($month,$areaName,$transpotation,$view) {

      if (!empty($month)) {
          $cnt = 0;
          $monthSubQuery = "AND (";
        foreach ($month as $when) {
          $cnt += 1;
          if ($cnt < count($month)){
          $monthSubQuery .= "p.`visit_month` LIKE '%" . $when . "%' OR ";
        } else {
          $monthSubQuery .= "p.`visit_month` LIKE '%" . $when . "%' ";
        }
      }
      $monthSubQuery .= ") ";
    } else {
      $monthSubQuery = "";
    }


    if (empty($areaName)) {
        $areaSubQuery = ' (SELECT * FROM `plan_spots` WHERE `spot_number` = 1)';
      } else {
        $areaSubQuery = '(SELECT * FROM `plan_spots` WHERE `area_name` ="' . $areaName . '" group by `plan_id`)';
      }


      if (!empty($transpotation)) {
          $cnt = 0;
          $transpotationSubQuery = "AND (";
        foreach ($transpotation as $trans) {
          $cnt += 1;
          if ($cnt < count($transpotation)){
          $transpotationSubQuery .= "p.`visit_type_name` LIKE '%" . $trans . "%' OR ";
        } else {
          $transpotationSubQuery .= "p.`visit_type_name` LIKE '%" . $trans . "%' ";
        }
      }
      $transpotationSubQuery .= ") ";
    } else {
      $transpotationSubQuery = "";
    }


      if (empty($view)) {
        $viewSubQuery = '';
      } else {
        if( $view == '1month') {
        $viewMonth = '1';
      } else if ($view == '3months') {
        $viewMonth = '3';
      } else if ($view == '6months') {
        $viewMonth = '6';
      }
        $viewSubQuery = ' AND p.`created` > now()-INTERVAL ' . $viewMonth . ' MONTH ';
      }


      $sql = "SELECT * FROM `plans` p, `users` u," . $areaSubQuery . " ps WHERE p.`user_id` = u.`id` AND p.`id` = ps.`plan_id`" . $viewSubQuery . "" . $monthSubQuery . "" . $transpotationSubQuery . "ORDER BY p.`id` DESC";
      var_dump($sql);

      $content = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
      // 連想配列としてSQLの実行結果を受け取る(keyと値)
      $contents     = array();
      while ($table = mysqli_fetch_assoc($content)) {
        $contents[] = $table;
      }
      return $contents;
    }

    
  }

?>
