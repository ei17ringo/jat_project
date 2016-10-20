<?php
  session_start();
  // コントローラのクラスをインスタンス化
  $controller = new PagesController();

  $controller->resource = $resource;
  $controller->action   = $action;

  // アクション名によって、呼び出すメソッドを変える
  switch ($action) {
    case 'index';
        $controller->index();
        break;
    case 'contactus';
        $controller->contactus();
        break;
    default:
        break;
  }

  class PagesController {
    var $resource      ='';
    var $action        ='';
    var $error_message ='';

      function _new($sd){
        $resource = $this->resource;
        $action   = $this->action;

      }
      // function _new($sd)閉じ


    function index() {
      $resource = $this->resource;
      $action   = 'index';

      require('views/layouts/application.php');
    }

    function contactus() {
      $resource = $this->resource;
      $action   = 'contactus';

      require('views/layouts/application.php');
    }



  }

?>
