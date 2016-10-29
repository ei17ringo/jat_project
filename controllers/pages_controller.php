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



        // if(empty($_POST['prefecture']])){
        //      echo "何も選んでません";
        // }else{
        //     echo $_POST['prefecture'];
        // }

        if(empty($_POST["month"])){
             echo "何も選んでません";
        }else{
             $month = $_POST["month"];
             foreach ($month as $value) {
              $select_month .= $value . ",";
             }
             echo $select_month;
         }
       
       if(isset($_POST["prefecture"])) {
        echo $_POST["prefecture"];
       }

       if(empty($_POST["transportation"])) {
             echo "何も選んでません";
        }else{
             $transportation = $_POST["transportation"];
             foreach ($transportation as $value) {
              $select_transportation .= $value . ",";
             }
             echo $select_transportation;
         }
       
        if(isset($_POST["view"])) {
        echo $_POST["view"];
       }



        //  if(empty($_POST["transportation"])){
        //      echo "何も選んでません";
        // }else{
        //      $transportation = $_POST["transportation"];
        //      $method = array("walk" => "徒歩", "bike" => "自転車", "autobike" => "バイク", "car" => "自動車", "train" => "電車", "cab" => "タクシー", "other" => "その他");
        //      //②
        //      for($i=0;$i<count($transportation);$i++){
        //           $check_transportation[$transportation[$i]]="checked";
        //      }
        //      //③
        //      foreach($transportation as $key => $value){
        //           $select_transportation .= $method[$value]."、";
        //      }
        //      $transportation_list=rtrim($select_transportation, "、");
        //      echo $transportation_list."を選びました";
        //  }




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

      $page        = new Page();
      $indexContent = $page->indexContent();



      require('views/layouts/application.php');
    }


    function contactus() {
      $resource = $this->resource;
      $action   = 'contactus';

      require('views/layouts/application.php');
    }
  }

?>
