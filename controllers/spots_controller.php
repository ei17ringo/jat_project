<?php
   // コントローラのクラスをインスタンス化
   $controller = new SpotsController();

   // アクション名によって、呼び出すメソッドを変える
   switch ($action) {
     case 'index':
         $controller->index();
         break;
     case 'show':
         $controller->show($id);
         break;
      case 'add':
          $controller->add();
        break;
     case 'create':
         $controller->create($post);
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

     function add() {
        $action = 'add';
        require('views/layout/application.php');
      }

     
      

        function create() {
               //ボタンが押されたら//
            $error_message = array(); //<--ここ$error_messageを定義
            if (isset($_POST ["register"])) {
            //エラーメッセージを格納する配列を作成
                if ($_POST ["spot_name"] !== "") {
                //データがセットされていたら各変数にPOSTのデータを格納
                        $spot_name = htmlspecialchars($_POST["spot_name"],ENT_QUOTES);
            //各データがなかったらエラーメッセージを配列に格納
                }else{
                    $error_message[] = "スポットの名前を入力して下さい。<br>";
                }

                if ($_POST["adress"]!=="") {
                    $adress = htmlspecialchars($_POST["adress"],ENT_QUOTES);
                }else{
                    $error_message[] = "住所を入力してください。<br>";
                }

                //エラーが無い時
                if (!count($error_message)){
                //確認ページヘ
                    header("Location:confirm.php");
                    exit;
                }else{
                    require('views/layout/application.php');
                }
            }
        
            var_dump($error_message);
            require('views/layout/application.php');

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