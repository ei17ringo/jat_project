<?php
    $path_adjust_string = '';

    if (isset($id)) {
        // idがある場合、階層を一つ上にする。
        $path_adjust_string = '../';
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
    <link href="../<?php echo $path_adjust_string ?>webroot/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../<?php echo $path_adjust_string ?>webroot/assets/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../<?php echo $path_adjust_string ?>webroot/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand topnav" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#home">ホーム</a>
                    </li>
                    <li>
                        <a href="#post-plan">旅路投稿</a>
                    </li>
                    <li>
                        <a href="#post-spot">スポット投稿</a>
                    </li>
                    <li>
                        <a href="#mypage">マイページ</a>
                    </li>
                    <li>
                        <a href="#contact">お問い合わせ</a>
                    </li>
                    <li>
                        <a href="#logout">ログアウト</a>
                    </li>
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
              <li>
                <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
              </li>
              <li>
                <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
              </li>
              <li>
                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
              </li>
            </ul>
          </div>

          <div class="copyright text-muted small">
            <p class="copyright">Copyright &copy; JAT 2016. All Rights Reserved</p>
          </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="../<?php echo $path_adjust_string ?>webroot/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../<?php echo $path_adjust_string ?>webroot/assets/js/bootstrap.min.js"></script>

</body>

</html>