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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header-plan-list">
        <div class="container">

            <div class="row">
              <div class="col-md-2">
              </div>
              <div class="col-md-8">
                      <div class="modal-dialog-index">
                          <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="text-center">旅路検索</h1>
                              </div>
                                <div class="modal-body">
                                    <label class="col-md-4 control-label">目的地：</label>
                                      <div class="col-md-8 research">
                                        <select class="form-control" placeholder="都道府県">
                                          <option value="">選択してください</option>
                                          <option value="">北海道</option>
                                          <option value="">青森県</option>
                                        </select>
                                      </div>

                                    <label class="col-md-4 control-label">旅する月：</label>
                                      <div class="col-md-8 research">
                                        <input type="checkbox" name="1" value="1" />１月
                                        <input type="checkbox" name="2" value="2" />２月
                                        <input type="checkbox" name="3" value="3" />３月
                                        <input type="checkbox" name="4" value="4" />４月
                                        <br>
                                        <input type="checkbox" name="5" value="5" />５月
                                        <input type="checkbox" name="6" value="6" />６月
                                        <input type="checkbox" name="7" value="7" />７月
                                        <input type="checkbox" name="8" value="8" />８月
                                        <br>
                                        <input type="checkbox" name="9" value="9" />９月
                                        <input type="checkbox" name="10" value="10" />10月
                                        <input type="checkbox" name="11" value="11" />11月
                                        <input type="checkbox" name="12" value="12" />12月
                                        <br>
                                      </div>


                                      <label class="col-md-4 control-label">交通手段：</label>
                                        <div class="col-md-8 research">
                                          <input type="checkbox" value="walk" />徒　歩
                                          <input type="checkbox" value="bike" />自転車
                                          <input type="checkbox" value="autobike" />バイク
                                          <input type="checkbox" value="car" />自動車
                                          <br>
                                          <input type="checkbox" value="train" />電　車
                                          <input type="checkbox" value="cab" />タクシー
                                          <input type="checkbox" value="other" />その他　
                                        </div>

                                      <label class="col-md-4 control-label">投稿時期：</label>
                                        <div class="col-md-8 research">
                                          <select class="form-control" placeholder="選択してください">
                                            <option value="">選択してください</option>
                                            <option value="">直近１か月</option>
                                            <option value="">直近３か月</option>
                                            <option value="">直近６か月</option>
                                          </select>
                                        </div>

                                      <label class="col-md-4 control-label"> タ グ ：</label>
                                        <div class="col-md-8 research">
                                          <input type="text" class="form-control" placeholder="例）デート、紅葉、のんびり">
                                        </div>

                                        <button type="submit" class="btn btn-block btn-default btn-warning" value="Login"/>Search</button>
                                </div>
                          </div>
                      </div>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

    <a  name="services"></a>
      <div class="content-section-b">

          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4">
                    <h2 class="text-center">
                      検索ヒット旅路
                    </h2>
                  </div>
                  <div class="col-md-4 btn-control">

                    <div class="btn-group">
                      <button class="btn btn-default">
                        新着順
                      </button> 
                      <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li>
                          <a href="#">新着順</a>
                        </li>
                        <li>
                          <a href="#">人気順</a>
                        </li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <button class="btn btn-default">
                        表示件数
                      </button> 
                      <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li>
                          <a href="#">５件</a>
                        </li>
                        <li>
                          <a href="#">10件</a>
                        </li>
                        <li>
                          <a href="#">30件</a>
                        </li>
                      </ul>
                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="content-section-a">

          <div class="container-fluid">
            <div class="row">
              <div class="plans-show">
                <div class="plan-upper-content">
                  <div class="col-md-3 tag-content">
                    <span class="glyphicon glyphicon-tags-mypage" aria-hidden="true">：◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz</span>
                  </div>
                  <div class="col-md-6">
                    <div class="plan-title">
                      <h3>
                        <a href="#">宇治抹茶スイーツ巡り</a>
                      </h3><br>
                      <p>投稿者：<a href="">◯◯◯◯</a>  作成日：◯◯◯◯年◯◯月◯◯日</p>
                    </div>
                  </div>
                  <div class="col-md-3 position-fix-plan-list">
                    <div class="position-fix-plan-list">
                      <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>：◯◯
                    </div>
                  </div>
                </div>

                  <div class="plan-contents">
                    <div class="col-md-8">
                      <p class="plan-idea">
                        目的地：京都符    訪問した年月：◯◯◯◯年◯◯月<br>
                        スポット：◯◯◯◯<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                      </p>
                      <p class="plan-detail-plan-list">
                        <a class="btn" href="#">View details »</a>
                      </p>
                    </div>
                    <div class="col-md-4">
                      <img alt="Bootstrap Image Preview" src="http://lorempixel.com/275/275/" />
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <!-- /.container -->

      </div>
      <!-- /.content-section-a -->

      <div class="content-section-b">

          <div class="container-fluid">
            <div class="row">
              <div class="plans-show">
                <div class="plan-upper-content">
                  <div class="col-md-3 tag-content">
                    <span class="glyphicon glyphicon-tags" aria-hidden="true">：◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz◯◯◯◯abcdefghijklmnopqrstuvwxyz</span>
                  </div>
                  <div class="col-md-6">
                    <div class="plan-title">
                      <h3>
                        <a href="#">宇治抹茶スイーツ巡り</a>
                      </h3><br>
                      <p>投稿者：<a href="">◯◯◯◯</a>  作成日：◯◯◯◯年◯◯月◯◯日</p>
                    </div>
                  </div>
                  <div class="col-md-3 position-fix-plan-list">
                    <div class="position-fix-plan-list">
                      <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>：◯◯
                    </div>
                  </div>
                </div>

                  <div class="plan-contents">
                    <div class="col-md-8">
                      <p class="plan-idea">
                        目的地：京都符    訪問した年月：◯◯◯◯年◯◯月<br>
                        スポット：◯◯◯◯<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                        ◯◯◯◯◯◯◯◯◯◯◯◯<br>
                        交通手段<br>
                      </p>
                      <p class="plan-detail-plan-list">
                        <a class="btn" href="#">View details »</a>
                      </p>
                    </div>
                    <div class="col-md-4">
                      <img alt="Bootstrap Image Preview" src="http://lorempixel.com/275/275/" />
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <!-- /.container -->

      </div>
      <!-- /.content-section-b -->

      <div class="content-section-c">

          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-4">
                <ul class="pagination">
                  <li>
                    <a href="#">Prev</a>
                  </li>
                  <li>
                    <a href="#">1</a>
                  </li>
                  <li>
                    <a href="#">2</a>
                  </li>
                  <li>
                    <a href="#">3</a>
                  </li>
                  <li>
                    <a href="#">4</a>
                  </li>
                  <li>
                    <a href="#">5</a>
                  </li>
                  <li>
                    <a href="#">Next</a>
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
              </div>
            </div>
          </div>
          <!-- /.container -->

      </div>
      <!-- /.content-section-a -->




    <!-- Footer -->
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
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
