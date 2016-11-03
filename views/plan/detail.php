<?php
    $PlansController = new PlansController($db, $table_name, $action);
    $PlansController->_new($_POST);
?>

<body>

<!-- Page header -->

  <div class="page-header" style="margin-top:70px;">
    
        <p>プラン名<br>
    <h1><?php echo $viewOptions['plan']['title']; ?></h1>

    <p>訪問した年<br>
 <?php echo $viewOptions['plan']['visit_year']; ?></p>

    <p>＊訪問した月<br>
    <?php echo $viewOptions['plan']['visit_month']; ?></p>

<p>＊訪問日<br>
<?php echo $viewOptions['plan']['visit_type_name']; ?>
</p>

</div>

    <!-- /Page header -->


<ul>

<?php foreach($viewOptions['plan_spots'] as $plan_spot):?>
  <li class="ui-state-default">
<dl class="syncer-acdn-faq">
  <dt class="syncer-acdn" data-target="syncer-acdn-01">行き先</dt>

    <!-- <dd id="syncer-acdn-01"> -->

            <!-- Body -->
            <div class="panel-body">
        <p>スポット名<br>
    <h2><?php echo $plan_spot['spot_name']; ?></h2></p>

<p><?php echo $plan_spot['area_name']; ?></p>

<p>＊混雑具合<br>
<?php echo $plan_spot['crowded']; ?>
</p>

<p>＊滞在時間</p>
<p><?php echo $plan_spot['stay_time']; ?>分</p>

<p>＊費用<br>
<div style="display:inline-flex">
<P><?php echo $plan_spot['fee']; ?></P>円（目安）</p>
</div></p>


<p>＊メモ<br>
<p><?php echo $plan_spot['comment']; ?></p>
</p>

</div>

<!-- <div style="display:inline-flex"> -->
 <div class="panel-body">
                <?php if(empty($plan_spot['picture_1'])): ?>
                <img src="../../webroot/assets/img/no_image.png" width="208" height="129">
              <?php else:?>
                <a href="../../spot_picture/<?php echo $plan_spot['picture_1']; ?>"><img src="../../spot_picture/<?php echo $plan_spot['picture_1']; ?>" width="208" height="129">
            </a>
          <?php endif;?>
            </div>
 <div class="panel-body">
 <?php if(empty($plan_spot['picture_2'])): ?>
                <img src="../../webroot/assets/img/no_image.png" width="208" height="129">
              <?php else:?>
                <a href="../../spot_picture/<?php echo $plan_spot['picture_2']; ?>"><img src="../../spot_picture/<?php echo $plan_spot['picture_2']; ?>" width="208" height="129">
            </a>
             <?php endif;?>
            </div>

<!-- </div> -->

            <!-- /Body -->

       
        <!-- /Panel --><!-- </dd> -->　</dl>
  </li>

<?php endforeach ;?>


  <li class="ui-state-default">
  <dl class="syncer-acdn-faq">
  <dt class="syncer-acdn" data-target="syncer-acdn-101">移動経路①</dt>
    
    <dd id="syncer-acdn-101">
    
    
            <!-- Body -->
<div class="panel-body">
                <p>＊交通手段の選択</p>
                <div style="display:inline-flex">
    <p>バス</p>
</div>

<p>＊所要時間</p>
<div style="display:inline-flex">
<p>0</p>時間
<p>15</p>分
</div>

<p>＊費用<br>
<p>230</p>円（目安）</p>

<p>＊メモ<br>
費用はバス１人分の運賃です。</p>

</div>
            <!-- /Body -->
    

        <!-- /Panel --></dd></dl>
        </li>

</ul>
 


 
<br style="clear:both">

<div class="like">
  <a class="btn icon-btn btn-primary" href="#"><span class="glyphicon btn-glyphicon glyphicon-thumbs-up img-circle text-primary"></span>Like</a>
</div>



<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h2 class="page-header">コメント</h2>
        <section class="comment-list">
          <!-- First Comment -->
          <article class="row">
            <div class="col-md-2 col-sm-2 hidden-xs">
              <figure class="thumbnail">
                <img class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
                <figcaption class="text-center">username</figcaption>
              </figure>
            </div>
            <div class="col-md-10 col-sm-10">
              <div class="panel panel-default arrow left">
                <div class="panel-body">
                  <header class="text-left">
                    <div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> Dec 16, 2014</time>
                  </header>
                  <div class="comment-post">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                  </div>
                  <p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
                </div>
              </div>
            </div>
          </article>
          <!-- Second Comment Reply -->
          <article class="row">
            <div class="col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-0 hidden-xs">
              <figure class="thumbnail">
                <img class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
                <figcaption class="text-center">username</figcaption>
              </figure>
            </div>
            <div class="col-md-9 col-sm-9">
              <div class="panel panel-default arrow left">
                <div class="panel-heading right">Reply</div>
                <div class="panel-body">
                  <header class="text-left">
                    <div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> Dec 16, 2014</time>
                  </header>
                  <div class="comment-post">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                  </div>
                  <p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
                </div>
              </div>
            </div>
          </article>
          <!-- Third Comment -->
          <article class="row">
            <div class="col-md-10 col-sm-10">
              <div class="panel panel-default arrow right">
                <div class="panel-body">
                  <header class="text-right">
                    <div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> Dec 16, 2014</time>
                  </header>
                  <div class="comment-post">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                  </div>
                  <p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-2 hidden-xs">
              <figure class="thumbnail">
                <img class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
                <figcaption class="text-center">username</figcaption>
              </figure>
            </div>
          </article>
          <!-- Fourth Comment -->
          <article class="row">
            <div class="col-md-2 col-sm-2 hidden-xs">
              <figure class="thumbnail">
                <img class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
                <figcaption class="text-center">username</figcaption>
              </figure>
            </div>
            <div class="col-md-10 col-sm-10 col-xs-12">
              <div class="panel panel-default arrow left">
                <div class="panel-body">
                  <header class="text-left">
                    <div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> Dec 16, 2014</time>
                  </header>
                  <div class="comment-post">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                  </div>
                  <p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
                </div>
              </div>
            </div>
          </article>
          <!-- Fifth Comment -->
          <article class="row">
            <div class="col-md-10 col-sm-10">
              <div class="panel panel-default arrow right">
                <div class="panel-body">
                  <header class="text-right">
                    <div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> Dec 16, 2014</time>
                  </header>
                  <div class="comment-post">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                  </div>
                  <p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-2 hidden-xs">
              <figure class="thumbnail">
                <img class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
                <figcaption class="text-center">username</figcaption>
              </figure>
            </div>
          </article>
          <!-- Sixth Comment Reply -->
          <article class="row">
            <div class="col-md-9 col-sm-9 col-md-offset-1 col-md-pull-1 col-sm-offset-0">
              <div class="panel panel-default arrow right">
                <div class="panel-heading">Reply</div>
                <div class="panel-body">
                  <header class="text-right">
                    <div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> Dec 16, 2014</time>
                  </header>
                  <div class="comment-post">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                  </div>
                  <p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-2 col-md-pull-1 hidden-xs">
              <figure class="thumbnail">
                <img class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
                <figcaption class="text-center">username</figcaption>
              </figure>
            </div>
          </article>
        </section>
    </div>
  </div>
</div>
