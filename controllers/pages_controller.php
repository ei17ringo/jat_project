<?php
  require('./controllers/users_controller.php'); // controller呼び出す
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
    case 'plan_list';
        $controller->plan_list();
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

        if (!empty($_POST)) {
          if (isset($_POST['prefecture'])) {
            $_SESSION['prefecture'] = $_POST['prefecture'];
          }
          if (isset($_POST['month']) && is_array($_POST['month'])) {
            $_SESSION['month'] = $_POST['month'];
          }
          if (isset($_POST['transpotation']) && is_array($_POST['transpotation'])) {
            $_SESSION['transpotation'] = $_POST['transpotation'];
          }
          if (isset($_POST['view'])) {
            $_SESSION['view'] = $_POST['view'];
          }
          header('Location: plan_list');
          exit;
        }

    }
      // function _new($sd)閉じ


    function index() {
      $resource        = $this->resource;
      $action          = 'index';
      $UsersController = new UsersController();
      $UsersController -> _loginCheck();

      if ($_SESSION['loginCheck'] == 'false') {
        header('Location: ../user/login');
        exit();
      }

      $page             = new Page();
      $indexContent     = $page->indexContent();

      require('views/layouts/application.php');
    }


    function contactus() {
      $resource = $this->resource;
      $action   = 'contactus';

      require('views/layouts/application.php');
    }


    function plan_list() {
      $resource        = $this->resource;
      $action          = 'plan_list';
      $UsersController = new UsersController();
      $UsersController -> _loginCheck();
      
      if ($_SESSION['loginCheck'] == 'false') {
        header('Location: ../user/login');
        exit();
      }



      require('views/layouts/application.php');
    }


  }
?>
