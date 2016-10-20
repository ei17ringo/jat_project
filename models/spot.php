<?php
class Spot{

  // プロパティ
    private $dbconnect = '';

     // コンストラクタ
     function __construct() {
       // DB接続ファイルを読み込む
       require('dbconnect.php');

      // DB接続設定の値をプロパティに代入
       $this->dbconnect = $db;
     }

  function index(){
      // SQLの実行
       $sql = 'SELECT * FROM `spots` WHERE `delete_flag` = 0';
       $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

       $rtn = array();
       while ($result = mysqli_fetch_assoc($results)) {
         $rtn[] = $result;
       }
       // 取得結果を返す
       return $rtn;
  }

  function detail($id){
    $sql=sprintf('SELECT * FROM `spots` WHERE `id`=%d',
      mysqli_real_escape_string($this->dbconnect, $id)
      );
    $results=mysqli_query($this->dbconnect,$sql)or die(mysqli_error($this->dbconnect));

    $result = mysqli_fetch_assoc($results);
    return $result;
    }

  function create(){
    // $sql=sprintf('INSERT INTO `spots`(`title`, `body`, `delete_flag`, `created`) VALUES("%s","%s",0,now())',
    //   mysqli_real_escape_string($this->dbconnect,$post['title']),
    //   mysqli_real_escape_string($this->dbconnect,$post['body'])
    //   );
    // mysqli_query($this->dbconnect,$sql) or die (mysqli_error($this->dbconnect));
  }


function edit($id){
  $sql=sprintf('SELECT * FROM `spots` WHERE `id`=%d',
  mysqli_real_escape_string($this->dbconnect,$id)
      );
    $results=mysqli_query($this->dbconnect,$sql)or die(mysqli_error($this->dbconnect));

    $result = mysqli_fetch_assoc($results);
    return $result;
    }


function update($id,$post){
  $sql=sprintf('UPDATE `spots` SET `title`="%s",`body`="%s" WHERE `id`=%d',
    mysqli_real_escape_string($this->dbconnect,$post['title']),
    mysqli_real_escape_string($this->dbconnect,$post['body']),
    mysqli_real_escape_string($this->dbconnect,$id)
      );
    mysqli_query($this->dbconnect,$sql)or die(mysqli_error($this->dbconnect));
  }

  function delete($id){
  $sql=sprintf('UPDATE `spots` SET `delete_flag`=1 WHERE `id`=%d',
  mysqli_real_escape_string($this->dbconnect,$id)
      );
    mysqli_query($this->dbconnect,$sql)or die(mysqli_error($this->dbconnect));
}


function duplicate(){
  // スポット重複チェック
  $error=array();
    $sql=sprintf('SELECT COUNT(*) AS cnt FROM `spots` WHERE`spot_name`="%s"',
      mysqli_real_escape_string($this->dbconnect, $_SESSION['spot']['spot_name'])
      );
    //SQL実行
    $record= mysqli_query($this->dbconnect, $sql)or die(mysqli_error($this->dbconnect));
    //連想配列としてSQL実行結果を受け取る
    $table= mysqli_fetch_assoc($record);
    if($table['cnt']>0){
      //同じエラーが1件以上あったらエラー
      $error['spot_name']= 'duplicate';
    }
     return $error;
}



function save() {
// 投稿をDBに登録
  if(empty($error)){
     $sql = sprintf('INSERT INTO `spots` SET `spot_name`="%s", `address`="%s", `picture_1`="%s", `picture_2`="%s",`created`=now()',
              
               mysqli_real_escape_string($this->dbconnect, $_SESSION['spot']['spot_name']),
               mysqli_real_escape_string($this->dbconnect, $_SESSION['spot']['address']),
               mysqli_real_escape_string($this->dbconnect, $_SESSION['spot']['picture_1']),
               mysqli_real_escape_string($this->dbconnect, $_SESSION['spot']['picture_2'])
           );
           mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
           unset($_SESSION['spot']);

     // mypageへリダイレクト
     header('Location: mypage');
      exit();
      }
        }




}
?>













