<?php 
    $UsersController = new UsersController($db, $table_name, $action);
    $UsersController->action   = $action;
    $UsersController->resource = $resource;
    $UsersController->_loginCheck();
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
    <link href="../webroot/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../webroot/assets/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../webroot/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- ファビコン -->
    <link rel="shortcut icon" href="../user_picture/favicon.ico" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <a class="navbar-brand topnav" href="../page/index">
                    <img src="../user_picture/logo.png" height="50px" width="120px" title="Japan Arange Trip" alt="たびシェア">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../page/index">ホーム</a>
                    </li>
                    <?php if ($_SESSION['loginCheck'] == 'true'): ?>
                        <li>
                            <a href="../plan/create">旅路投稿</a>
                        </li>
                        <li>
                            <a href="../spot/create">スポット投稿</a>
                        </li>
                        <li>
                            <a href="../user/mypage">マイページ</a>
                        </li>
                    <?php endif; ?>
                        <li>
                            <a href="../page/contactus">お問い合わせ</a>
                        </li>
                    <?php if ($_SESSION['loginCheck'] == 'true'): ?>
                        <li>
                            <a href="../user/logout">ログアウト</a>
                        </li>
                    <?php elseif ($_SESSION['loginCheck'] == 'false'): ?>
                        <li>
                            <a href="../user/login">ログイン</a>
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
                <a href="../page/index">
                    <img src="../user_picture/logo.png" height="70px" width="170px" title="Japan Arange Trip" alt="たびシェア">
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

    <!-- jQuery -->
    <script src="../webroot/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../webroot/assets/js/bootstrap.min.js"></script>

</body>

</html>