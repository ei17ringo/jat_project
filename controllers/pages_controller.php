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

        $_SESSION['prefecture']   = '';
        $_SESSION['month']        = '';
        $_SESSION['tranpotation'] = '';
        $_SESSION['view']         = '';

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
      $_SESSION['prefs'] = array ('北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','山梨県','新潟県','富山県','石川県','福井県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県');
      $_SESSION['tsuki'] = array ('１月','２月','３月','４月','５月','６月','７月','８月','９月','10月','11月','12月');

      $_SESSION['kotsu'] = array ('徒　歩','自転車','バイク','自動車','電　車','タクシー','その他');

      if ($_SESSION['loginCheck'] == 'false') {
        header('Location: ../user/login');
        exit();
      }

      $page             = new Page();
      $searchContent    = $page->searchContent($_SESSION['view'],$_SESSION['prefecture']);

      // if (!empty($_POST)) {
      //     if (isset($_POST['prefecture'])) {
      //       $_SESSION['prefecture'] = $_POST['prefecture'];
      //     }
      //     if (isset($_POST['month']) && is_array($_POST['month'])) {
      //       $_SESSION['month'] = $_POST['month'];
      //     }
      //     if (isset($_POST['transpotation']) && is_array($_POST['transpotation'])) {
      //       $_SESSION['transpotation'] = $_POST['transpotation'];
      //     }
      //     if (isset($_POST['view'])) {
      //       $_SESSION['view'] = $_POST['view'];
      //     }
      //     header('Location: plan_list');
      //     exit;
      //   }



      // $planView->planView();

      require('views/layouts/application.php');
    }


  }
?>
