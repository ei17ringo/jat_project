<?php
class Plan{

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
       $sql = 'SELECT * FROM `plans` WHERE `delete_flag` = 0';
       $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

       $rtn = array();
       while ($result = mysqli_fetch_assoc($results)) {
         $rtn[] = $result;
       }
       // 取得結果を返す
       return $rtn;
  }

  function detail($id){
    $sql=sprintf('SELECT * FROM `plans` WHERE `id`=%d',
      mysqli_real_escape_string($this->dbconnect, $id)
      );
    $results=mysqli_query($this->dbconnect,$sql)or die(mysqli_error($this->dbconnect));

    $result = mysqli_fetch_assoc($results);
    return $result;
    }

    function plan_spots_detail($id){
    $sql=sprintf('SELECT * FROM `plan_spots` WHERE `plan_id`=%d',
      mysqli_real_escape_string($this->dbconnect, $id)
      );
    $results=mysqli_query($this->dbconnect,$sql)or die(mysqli_error($this->dbconnect));
    $spots=array();
    while ($result = mysqli_fetch_assoc($results)) {
      $spots[]=$result;
    }
    return $spots;
    }


  function create(){
    // $sql=sprintf('INSERT INTO `plans`(`title`, `body`, `delete_flag`, `created`) VALUES("%s","%s",0,now())',
    //   mysqli_real_escape_string($this->dbconnect,$post['title']),
    //   mysqli_real_escape_string($this->dbconnect,$post['body'])
    //   );
    // mysqli_query($this->dbconnect,$sql) or die (mysqli_error($this->dbconnect));
  }


function edit($id){
  $sql=sprintf('SELECT * FROM `plans` WHERE `id`=%d',
  mysqli_real_escape_string($this->dbconnect,$id)
      );
    $results=mysqli_query($this->dbconnect,$sql)or die(mysqli_error($this->dbconnect));

    $result = mysqli_fetch_assoc($results);
    return $result;
    }


  function delete($id){
  $sql=sprintf('UPDATE `plans` SET `delete_flag`=1 WHERE `id`=%d',
  mysqli_real_escape_string($this->dbconnect,$id)
      );
    mysqli_query($this->dbconnect,$sql)or die(mysqli_error($this->dbconnect));
}





function save() {
// 投稿をDBに登録
  if(empty($error)){
    $visit_months='';
    foreach ($_SESSION['plan']['visit_month'] as $visit_month) {
      $visit_months.=$visit_month.'月,';
    }
     $sql = sprintf('INSERT INTO `plans` SET `user_id`="%d", `title`="%s", `visit_year`="%s", `visit_month`="%s", `visit_type_name`="%s",`created`=now()',
              
               mysqli_real_escape_string($this->dbconnect, $_SESSION['login']['id']),
               mysqli_real_escape_string($this->dbconnect, $_SESSION['plan']['title']),
               mysqli_real_escape_string($this->dbconnect, $_SESSION['plan']['visit_year']),
               mysqli_real_escape_string($this->dbconnect, $visit_months),
               mysqli_real_escape_string($this->dbconnect, $_SESSION['plan']['visit_type_name'])
           );
           mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

           $last_id = mysqli_insert_id($this->dbconnect);
           // unset($_SESSION['plan']);
           return $last_id;
      }
//       // トップページへ
// 　　　　　header('Location:mypage');
//          exit();
        }


function plan_spots_save($plan_id) {
// 投稿をDBに登録
  if(empty($error)){
    var_dump($_SESSION['plan_spots']);
    foreach ($_SESSION['plan_spots'] as $spot) {
      if(isset($spot['spot_name'])){
     $sql = sprintf('INSERT INTO `plan_spots` SET `plan_id`=%d, spot_id=%d, `spot_name`="%s", `spot_number`=%d,
      `area_name`="%s", `crowded`="%s", `stay_time`="%s", `fee`="%s", `comment`="%s", `picture_1`="%s", `picture_2`="%s",`created`=now()',
               $plan_id,
               -1,
               mysqli_real_escape_string($this->dbconnect, $spot['spot_name']),
               1,
               mysqli_real_escape_string($this->dbconnect, $spot['area_name']),
               mysqli_real_escape_string($this->dbconnect, $spot['crowded']),
               mysqli_real_escape_string($this->dbconnect, $spot['stay_time']),
               mysqli_real_escape_string($this->dbconnect, $spot['fee']),
               mysqli_real_escape_string($this->dbconnect, $spot['comment']),
               mysqli_real_escape_string($this->dbconnect, ''),
               mysqli_real_escape_string($this->dbconnect, '')
           );
           mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
           }

           $last_id = mysqli_insert_id($this->dbconnect);
           // unset($_SESSION['plan']);
           return $last_id;

         }
      }
}


function transportation_save($plan_id) {
// 投稿をDBに登録
  if(empty($error)){
    foreach ($_SESSION['plan_spots'] as $trans) {
      var_dump('abcd');
      if(isset($trans['trans_way'])){
     $sql = sprintf('INSERT INTO `transportation` SET `plan_id`=%d, spot_id=%d, `trans_number`=%d, `trans_way`="%s", `trans_other`=%d,
      `trans_time`="%s", `trans_fee`="%s", `comment`="%s", `created`=now()',
               $plan_id,
               -1,
               1,
               mysqli_real_escape_string($this->dbconnect, $trans['trans_way']),
               mysqli_real_escape_string($this->dbconnect, $trans['trans_other']),
               mysqli_real_escape_string($this->dbconnect, $trans['trans_time']),
               mysqli_real_escape_string($this->dbconnect, $trans['trans_fee']),
               mysqli_real_escape_string($this->dbconnect, $trans['comment'])
           );
     var_dump($sql);
           mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
           }

           $last_id = mysqli_insert_id($this->dbconnect);
           // unset($_SESSION['plan']);
           

          }
      }
      return $last_id;
}



function update($id){

  $sql=sprintf('UPDATE `plans` SET `plan_name`="%s",`address`="%s",`picture_1`="%s", `picture_2`="%s",`created`=now() WHERE `id`=%d',
    mysqli_real_escape_string($this->dbconnect,$_SESSION['plan']['plan_name']),
    mysqli_real_escape_string($this->dbconnect,$_SESSION['plan']['address']),
    mysqli_real_escape_string($this->dbconnect,$_SESSION['plan']['picture_1']),
    mysqli_real_escape_string($this->dbconnect, $_SESSION['plan']['picture_2']),
    mysqli_real_escape_string($this->dbconnect,$id)
      );
    mysqli_query($this->dbconnect,$sql)or die(mysqli_error($this->dbconnect));
    unset($_SESSION['plan']);


       // リダイレクト
     header("Location:../detail/$id");
      exit();
  }


}
?>