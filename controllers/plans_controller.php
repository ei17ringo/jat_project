<?php
  session_start();


   // コントローラのクラスをインスタンス化
   $controller = new PlansController();

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

   class PlansController {
    var $resource='';
    var $action='';
    var $error_message='';
    var $id='';


     function _new($sd){
      $resource= $this->resource;
      $action= $this->action;
      $id=$this->id;

} 
                    //ボタンが押されたら//
            $error_message = array(); //<--ここ$error_messageを定義
            if(!empty($sd)){
                if ($sd["title"] !== "") {
                //データがセットされていたら各変数にPOSTのデータを格納
                        $_SESSION['plan']['title'] = htmlspecialchars($sd["title"],ENT_QUOTES);
            //各データがなかったらエラーメッセージを配列に格納
                }else{
                    $error_message[] = "<font color=\"red\">※タイトルを入力して下さい。</font><br>";
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
                  //画像をアップロードする
                  $picture_1= date('YmdHis') . $_FILES['picture_1']['name'];
                    move_uploaded_file($_FILES['picture_1']['tmp_name'], 'plan_picture/' . $picture_1);
                  //セッションに値を保存
                  // $_SESSION['plan']=$_POST;
                  $_SESSION['plan']['picture_1']= $picture_1;
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
                    move_uploaded_file($_FILES['picture_2']['tmp_name'], 'plan_picture/' . $picture_2);
                  //セッションに値を保存
                  // $_SESSION['plan']=$_POST;
                  $_SESSION['plan']['picture_2']= $picture_2;
                   }

               }


      //エラーが無い時
                if (!count($error_message)){
                  //確認ページヘ
                  if($action=='edit'){
                    header("Location:../confirm/$id");
                  }else{
                    header("Location:confirm");
                  }
                    exit;
                   }
                    else{
                      return $error_message;
                    }

   }




     function index() {
       // モデルを呼び出す
       $plan = new Plan();
       $viewOptions = $plan->index();
       $action = 'index';

       require('views/layout/application.php');
     }

     function detail($id) {
       $plan = new Plan();
       $viewOptions= $plan->detail($id);
       $resource= $this->resource;
       $action = 'detail';

       require('views/layouts/application.php');
     }

     function confirm($id=null) {
        $plan= new Plan();
        if ($id==null){
          $viewOptions= $plan->duplicate();
        }

        if (isset($viewOptions['plan_name'])&& ($viewOptions['plan_name']=='duplicate')){
          $_SESSION['plan']['duplicate']=true;
          header("Location:create");
                    exit;
        }
        // $viewOptions= $plan->confirm();
        $resource= $this->resource;
        $action = 'confirm';

        require('views/layouts/application.php');
      }

      function save(){
         $plan= new Plan();
        $viewOptions= $plan->save();
       
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
       $plan = new Plan();
       $viewOptions = $plan->edit($id);
       $resource= $this->resource;
       $action = 'edit';

       require('views/layouts/application.php');
     }

     function update($id) {
       $plan = new Plan();
       $plan->update($id);

      
     }


     function delete($id){
      $plan= new Plan();
       $viewOptions= $plan -> delete($id);
       $action='delete';


       // indexへ遷移
       header('Location: /seed_plan/plans/index');
       exit();
     }

      }
  ?>