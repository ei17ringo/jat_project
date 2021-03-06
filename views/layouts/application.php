<?php
    $UsersController = new UsersController($db, $table_name, $action);
    $UsersController->action   = $action;
    $UsersController->resource = $resource;


    $UsersController->_loginCheck();

    $path_adjust_string= '';
    if(isset($id)&& !empty($id)){
    //idがある場合、階層を一つあげる
        $path_adjust_string= '../';
    }

?>

<!DOCTYPE html>
<html lang="jp">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JAT - Japan Arange Trip</title>

    <!-- Bootstrap Core CSS -->
    <link href="../<?php echo $path_adjust_string; ?>webroot/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../<?php echo $path_adjust_string; ?>webroot/assets/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../<?php echo $path_adjust_string; ?>webroot/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- ファビコン -->
    <link rel="shortcut icon" href="../<?php echo $path_adjust_string; ?>user_picture/favicon.ico" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->




<!-- 写真 -->
<link href="../<?php echo $path_adjust_string;?>webroot/share/css/set/import.css" rel="stylesheet" type="text/css" media="all" />
<link href="../<?php echo $path_adjust_string;?>webroot/index/css/index.css" rel="stylesheet" type="text/css" media="all" />
<link href="../<?php echo $path_adjust_string;?>webroot/index/css/colorbox.css" rel="stylesheet" type="text/css" media="all" />
<link href="favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<link href="favicon.ico" rel="icon" type="image/vnd.microsoft.icon" />



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script src="../<?php echo $path_adjust_string;?>webroot/share/js/jquery.colorbox.js"></script>
<script src="../<?php echo $path_adjust_string;?>webroot/share/js/m5LazyDisplay.js"></script>
<script src="../<?php echo $path_adjust_string;?>webroot/share/js/jquery-opacity-rollover.js"></script>
<script type="text/javascript" src="../<?php echo $path_adjust_string;?>webroot/share/js/default.js"></script>



</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="../<?php echo $path_adjust_string; ?>page/index">
                    <img src="../<?php echo $path_adjust_string; ?>user_picture/logo.png" height="50px" width="120px" title="Japan Arange Trip" alt="たびシェア">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../<?php echo $path_adjust_string; ?>page/index">ホーム</a>
                    </li>
                    <?php if ($_SESSION['loginCheck'] == 'true'): ?>
                        <li>
                            <a href="../<?php echo $path_adjust_string; ?>plan/create">旅路投稿</a>
                        </li>
                        <li>
                            <a href="../<?php echo $path_adjust_string; ?>spot/create">スポット投稿</a>
                        </li>
                        <li>
                            <a href="../<?php echo $path_adjust_string; ?>user/mypage">マイページ</a>
                        </li>
                    <?php endif; ?>
                        <li>
                            <a href="../<?php echo $path_adjust_string; ?>page/contactus">お問い合わせ</a>
                        </li>
                    <?php if ($_SESSION['loginCheck'] == 'true'): ?>
                        <li>
                            <a href="../<?php echo $path_adjust_string; ?>user/logout">ログアウト</a>
                        </li>
                    <?php elseif ($_SESSION['loginCheck'] == 'false'): ?>
                        <li>
                            <a href="../<?php echo $path_adjust_string; ?>user/login">ログイン</a>
                        </li>
                    <?php endif; ?>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


        <?php
          include('views/' . $resource . '/' . $action .'.php');
        ?>


    <footer>
        <div class="container">
          <div>
            <ul class="list-inline banner-social-buttons">
<!--               <li>
                <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
              </li> -->
              <li>
                <a href="../<?php echo $path_adjust_string; ?>page/index">
                    <img src="../<?php echo $path_adjust_string; ?>user_picture/logo.png" height="70px" width="170px" title="Japan Arange Trip" alt="たびシェア">
                </a>
              </li>
<!--               <li>
                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
              </li> -->
            </ul>
          </div>

          <div class="copyright text-muted small">
            <p class="copyright">Copyright &copy; JAT 2016. All Rights Reserved</p>
          </div>
        </div>
    </footer>


    <script>
    var $pgj= $.noConflict(true);

    (function($){
    $(document).ready(function(){
        $("#mainContents p a").colorbox();
    });
    })($pgj);
</script>

<script>
    (function($) {
    $(function() {

     $('img').opOver(1.0,0.4);

    });
    })($pgj);
</script>
<script type="text/javascript">
        (function($){
            $("img").m5LazyDisplay();
        })($pgj);
</script>

<!-- 新規プラン作成////////////////////////////////// -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="../<?php echo $path_adjust_string;?>webroot/assets/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- コンテンツ -->
<link rel="stylesheet" type="text/css" href="../<?php echo $path_adjust_string;?>webroot/assets/css/plan_create.css">

<!-- スタイルシートの読み込み -->
    <link href="../<?php echo $path_adjust_string;?>webroot/jquery-ui-1.12.1.custom/accordion-faq.css" rel="stylesheet">

<!-- <! JavaScriptの読み込み -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> -->
<script src="../<?php echo $path_adjust_string;?>webroot/jquery-ui-1.12.1.custom/accordion.js"></script>


<script>
   var $plangj= $.noConflict(true);
   (function($) {
  $( function() {
    $( "ul.droptrue" ).sortable({
      connectWith: "ul",

      stop : function(event,ui){

        tags = document.getElementsByTagName('input');
        sort_count = 1;
        for(i=0; i<tags.length; i++ ){
          if( tags.item(i).getAttribute('type') == 'hidden' ){
            tags.item(i).value = sort_count;
            console.log(sort_count);
            sort_count++;
          }
        }
      }

    });

    $( "ul.dropfalse" ).sortable({
      connectWith: "ul",
      dropOnEmpty: false
    });

    $( "#sortable1, #sortable2, #sortable3" ).disableSelection();
  } );
  })($plangj);
  </script>



<!-- ボタンを押して追加・削除 -->
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="../<?php echo $path_adjust_string;?>webroot/jquery.repeater-master/jquery.repeater.js"></script>

<script>
var $plangj2= $.noConflict(true);

    (function($,$p){
$(document).ready(function () {
  'use strict';
  $('.repeater').repeater({
    show: function () {
      $(this).slideDown();
      
      console.log($(this));
      console.log($(this).parent().attr('id'));

      // 属性を削除
        // $("dt:last").children('dt').removeAttr('data-target');
        // $("dd:last").children('dd').removeAttr('id');

        var dt = document.getElementById($(this).parent().attr('id')).getElementsByTagName("dt");
        var dt_each = null;
        for(var i = 0; i < dt.length; ++i){
            dt_each = dt[i];
        }

        var dd = document.getElementById($(this).parent().attr('id')).getElementsByTagName("dd");
        var dd_each = null;
        for(var i = 0; i < dd.length; ++i){
            dd_each = dd[i];
        }
        
        var zero_i = ("0"+i).slice(-2);


      dt_each.setAttribute('data-target','syncer-acdn-'+zero_i);
      dd_each.setAttribute('id','syncer-acdn-'+zero_i);

      //[.syncer-acdn]にクリックイベントを設定する
      $p(dt_each).click(function()
      {
        //[data-target]の属性値を代入する
        var target= $(this).data('target');

        //[target]と同じ名前のIDを持つ要素[slideToggle]を実行する
        $('#'+target).slideToggle();

        //終了
        return false;
      });
      //console.log($("dt:last").attr('data-target'));
      //console.log($("dt:last").attr('id'));

  },
  hide:function(deleteElement){
    if(confirm('削除してもいいですか？')){
        $(this).slideUp(deleteElement);
    }
   }
  });
});
})($plangj2,$plangj);
</script>


 <!-- ボタンを押して追加・削除 -->
 <!-- //////////////////////////////////////////////  -->


     <!-- jQuery -->
   <script src="../<?php echo $path_adjust_string;?>webroot/assets/js/jquery.js"></script>



    <!-- Bootstrap Core JavaScript -->
    <script src="../<?php echo $path_adjust_string; ?>webroot/assets/js/bootstrap.min.js"></script>

</body>

</html>