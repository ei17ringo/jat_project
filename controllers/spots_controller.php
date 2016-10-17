<?php
   // require('models/spot.php');

   // コントローラのクラスをインスタンス化
   $controller = new SpotsController();

   $controller->resource = $resource;
   $controller->action = $action;

   // アクション名によって、呼び出すメソッドを変える
   switch ($action) {
     case 'index':
         $controller->index();
         break;
     case 'show':
         $controller->show($id);
         break;
      case 'create':
          $controller->create();
        break;
     case 'confirm':
         $controller->confirm($post);
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
      default:
          break;
    }

   class SpotsController {
    var $resource='';
    var $action='';
    var $error_message='';
     function _new($sd){
      $resource= $this->resource;
      $action= $this->action;

                     //ボタンが押されたら//
            $error_message = array(); //<--ここ$error_messageを定義
            if(!empty($sd)){
                if ($sd["spot_name"] !== "") {
                //データがセットされていたら各変数にPOSTのデータを格納
                        $_SESSION['spot_name'] = htmlspecialchars($sd["spot_name"],ENT_QUOTES);
            //各データがなかったらエラーメッセージを配列に格納
                }else{
                    $error_message[] = "スポットの名前を入力して下さい。<br>";
                }

                if ($sd["adress"]!=="") {
                    $_SESSION['adress'] = htmlspecialchars($sd["adress"],ENT_QUOTES);
                }else{
                    $error_message[] = "住所を入力してください。<br>";
                }
                $this->error_message=$error_message;

                //エラーが無い時
                if (!count($error_message)){
                //確認ページヘ
                    header("Location:confirm.php");
                    exit;
                   }
                    else{
                      return $error_message;

                }
            }
        
     }


     function index() {
       // モデルを呼び出す
       $spot = new Spot();
       $viewOptions = $spot->index();
       $action = 'index';

       require('views/layout/application.php');
     }

     function show($id) {
       $spot = new Spot();
       $viewOptions = $spot->show($id);
       $action = 'show';

       require('views/layout/application.php');
     }

     function confirm() {
        $action = 'add';
        require('views/layouts/application.php');
      }


     function create() {
      $action = 'create';
      $resource= $this->resource;


            var_dump($this->error_message);
            require('views/layouts/application.php');

        }


     function edit($id) {
       $spot = new Spot();
       $viewOptions = $spot->edit($id);
       $action = 'edit';

       require('views/layout/application.php');
     }

     function update($id, $post) {
       $spot = new Spot();
       $spot->update($id, $post);


       // indexへ遷移
       header('Location: /seed_spot/spots/index');
       exit();
     }


     function delete($id){
      $spot= new Spot();
       $viewOptions= $spot -> delete($id);
       $action='delete';


       // indexへ遷移
       header('Location: /seed_spot/spots/index');
       exit();
     }

    }
  ?>