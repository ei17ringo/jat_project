<?php
  require('./controllers/users_controller.php');




   // コントローラのクラスをインスタンス化
   $controller = new SpotsController();

   $controller->resource = $resource;
   $controller->action = $action;

   // アクション名によって、呼び出すメソッドを変える
   switch ($action) {
     case 'index':
         $controller->index();
         break;
     case 'detail':
         $controller->detail($id);
         break;
      case 'create':
          $controller->create();
        break;
     case 'confirm':
         $controller->confirm($id);
      break;
      case 'save':
         $controller->save();
      break;
     case 'edit':
         $controller->edit($id);
       break;
     case 'update':
         $controller->update($id);
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
    var $id='';


     function _new($sd){
      $resource= $this->resource;
      $action= $this->action;
      $id=$this->id;

      $UsersController = new UsersController();
     $UsersController -> _loginCheck();

     if ($_SESSION['loginCheck'] == 'false') {
       header('Location: ../user/login');
       exit();
     }

if(!isset($_SESSION['spot']['duplicate'])&& (empty($sd))){return;
} 
                    //ボタンが押されたら//
            $error_message = array(); //<--ここ$error_messageを定義
            if(!empty($sd)){
                if ($sd["spot_name"] !== "") {
                //データがセットされていたら各変数にPOSTのデータを格納
                        $_SESSION['spot']['spot_name'] = htmlspecialchars($sd["spot_name"],ENT_QUOTES);
            //各データがなかったらエラーメッセージを配列に格納
                }else{
                    $error_message[] = "<font color=\"red\">※スポットの名前を入力して下さい。</font><br>";
                }

                if ($sd["address"]!=="") {
                    $_SESSION['spot']['address'] = htmlspecialchars($sd["address"],ENT_QUOTES);
                }else{
                    $error_message[] = "<font color=\"red\">※住所を入力してください。</font><br>";
                }
                $this->error_message=$error_message;


                // if ($action=='create') {
                //新規登録
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
                  //画像をアップロードする
                  $picture_1= date('YmdHis') . $_FILES['picture_1']['name'];
                    move_uploaded_file($_FILES['picture_1']['tmp_name'], 'spot_picture/' . $picture_1);
                  //セッションに値を保存
                  // $_SESSION['spot']=$_POST;
                  $_SESSION['spot']['picture_1']= $picture_1;
                  $_SESSION['spot']['delete_picture_1']= $sd['delete_picture_1'];
                  if($_SESSION['spot']['delete_picture_1']=='1' or $_FILES['picture_1']['name']==null){
                    $_SESSION['spot']['picture_1']='';
                  }
                  }


                   //画像ファイルの拡張子チェック
                 $fileName= $_FILES['picture_2']['name'];
                  if (!empty($fileName)) {
                   $ext= substr($fileName, -3);
                   $ext= strtolower($ext);
                  if ($ext != 'jpg'&& $ext !='gif'&& $ext !='png'){
                   $error_message['picture_path']= "<font color=\"red\">※写真などは「.gif」か「.jpg」か「.png」の画像を指定してください。</font>";
                      }
                    }
                  
                //エラーが無い時
                if (!count($error_message)){

                  //画像をアップロードする
                  $picture_2= date('YmdHis') . $_FILES['picture_2']['name'];
                    move_uploaded_file($_FILES['picture_2']['tmp_name'], 'spot_picture/' . $picture_2);
                  //セッションに値を保存
                  // $_SESSION['spot']=$_POST;
                  $_SESSION['spot']['picture_2']= $picture_2;
                  $_SESSION['spot']['delete_picture_2']= $sd['delete_picture_2'];
                  if($_SESSION['spot']['delete_picture_2']=='1' or $_FILES['picture_2']['name']==null){
                    $_SESSION['spot']['picture_2']='';
                  }
                   }


               }
               


     if($action=='create'){
     if(isset($_SESSION['spot']['duplicate'])&&($_SESSION['spot']['duplicate']==true)){
      $error_message['duplicate']="指定されたスポットは既に登録されています。";
     }
   }
      unset($_SESSION['spot']['duplicate']);


      //エラーが無い時
                if (!count($error_message)){
                  //確認ページヘ
                  if($action=='edit'){
                    // header("Location:../confirm/$id");
                    echo '<script> location.replace("../confirm/'.$id.'");</script>';
                  }else{
                    // header("Location:confirm");
                    echo '<script> location.replace("confirm");</script>';
                  }
                    exit;
                   }
                    else{
                      return $error_message;
                    }

   }




     function index() {
       // モデルを呼び出す
       $spot = new Spot();
       $viewOptions = $spot->index();
       $action = 'index';

       require('views/layout/application.php');
     }

     function detail($id) {
       $spot = new Spot();
       $viewOptions= $spot->detail($id);
       $resource= $this->resource;
       $action = 'detail';

       require('views/layouts/application.php');
     }

     function confirm($id=null) {
        $spot= new Spot();
        if ($id==null){
          $viewOptions= $spot->duplicate();
        }else{
          $viewOptions= $spot->edit($id);
        }

        if (isset($viewOptions['spot_name'])&& ($viewOptions['spot_name']=='duplicate')){
          $_SESSION['spot']['duplicate']=true;
          header("Location:create");
                    exit;
        }
        // $viewOptions= $spot->confirm();
        $resource= $this->resource;
        $action = 'confirm';

        require('views/layouts/application.php');
      }

      function save(){
         $spot= new Spot();
        $viewOptions= $spot->save();
       
        // トップページへ
　　　　　header('Location:mypage');
         exit();
      }


     function create() {
      $action = 'create';
      $resource= $this->resource;



            // var_dump($this->error_message);
            require('views/layouts/application.php');

        }


     function edit($id) {
       $spot = new Spot();
       $viewOptions = $spot->edit($id);
       $resource= $this->resource;
       $action = 'edit';

       require('views/layouts/application.php');
     }

     function update($id) {
       $spot = new Spot();
       $spot->update($id);

      
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