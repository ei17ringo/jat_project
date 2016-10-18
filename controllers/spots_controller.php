<?php
  session_start();

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
         $controller->confirm();
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
                    $error_message[] = "<font color=\"red\">※スポットの名前を入力して下さい。</font><br>";
                }

                if ($sd["adress"]!=="") {
                    $_SESSION['adress'] = htmlspecialchars($sd["adress"],ENT_QUOTES);
                }else{
                    $error_message[] = "<font color=\"red\">※住所を入力してください。</font><br>";
                }
                $this->error_message=$error_message;



                 //画像ファイルの拡張子チェック
                 $fileName= $_FILES['picture_1']['name'];
                  if (!empty($fileName)) {
                   $ext= substr($fileName, -3);
                   $ext= strtolower($ext);
                  if ($ext != 'jpg'&& $ext !='gif'&& $ext !='png'){
                   $error_message['picture_path']= "<font color=\"red\">※写真などは「.gif」か「.jpg」か「.png」の画像を指定してください。</font>";
    }
  }

                //エラーが無い時
                if (!count($error_message)){

                  // //画像をアップロードする
                  // $picture_1= date('YmdHis') . $_FILES['picture_1']['name'];
                  //   move_uploaded_file($_FILES['picture_1']['tmp_name'], 'controllers/spot_picture/' . $picture_1);
                  // //セッションに値を保存
                  // $_SESSION['join']=$_POST;
                  // $_SESSION['join']['picture_1']= $picture_1;
                  

                  //確認ページヘ
                    header("Location:confirm");
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
        $action = 'confirm';
        $resource= $this->resource;
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