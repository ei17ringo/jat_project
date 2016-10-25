<?php
    $PlansController = new PlansController($db, $table_name, $action);
    $plans = $PlansController->index();
?>

<body>

<!-- Page header -->

  <div class="page-header">
    
        <p>プラン名<br>
    <h1><?php echo htmlspecialchars($_SESSION['plan']["title"]);?></h1>



    <p>＊訪問した月<br>
    <?php
if (isset($_SESSION['plan']['visit_month'])) && (empty($_SESSION['plan']['month'])){
  foreach ($_SESSION['plan']['visit_month'] as $months) {
    echo $months."月<br/>";
   }
  }else{
    echo "未入力";
  }
  ?></p>

<p>＊訪問日を選択してください。<br>
<?php echo htmlspecialchars($_SESSION['plan']["visit_day_type"]);?>
</p>

</div>

    <!-- /Page header -->


<ul id="sortable1" class="droptrue">
  <li class="ui-state-default">


<dl class="syncer-acdn-faq">
  <dt class="syncer-acdn" data-target="syncer-acdn-01">行き先①</dt>
    
    <dd id="syncer-acdn-01">
            
    
            <!-- Body -->
            <div class="panel-body">
        <p>スポット名<br>
    <h2><?php echo htmlspecialchars($_SESSION['plan']["spot_name"]);?></h2></p>

<p><?php echo htmlspecialchars($_SESSION['plan']["area_name"]);?></p>

<p>＊混雑具合<br>
 <?php echo htmlspecialchars($_SESSION['plan']["crowded"]);?>
</p>

<p>＊滞在時間<br>
<?php echo htmlspecialchars($_SESSION['plan']["stay_time"]);?>
</p>

<p>＊費用<br>
<div style="display:inline-flex">
<P><?php echo htmlspecialchars($_SESSION['plan']["fee"]);?></P>円（目安）</p>
</div>


<p>＊メモ<br>
<p><?php echo htmlspecialchars($_SESSION['plan']["comment"]);?></p>
</p>

<!-- <div style="display:inline-flex"> -->
 <div class="panel-body">
                <img src="../<?php echo $path_adjust_string;?>plan_picture/<?php echo htmlspecialchars($_SESSION['plan']['picture_1'], ENT_QUOTES, 'UTF-8'); ?>" width="208" height="129">
            </div>
 <div class="panel-body">
                <img src="../<?php echo $path_adjust_string;?>plan_picture/<?php echo htmlspecialchars($_SESSION['spot']['picture_2'], ENT_QUOTES, 'UTF-8'); ?>" width="208" height="129">
            </div>
<!-- </div> -->

            <!-- /Body -->

       
        <!-- /Panel --></dd>　</dl>
  </li>


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


  <li class="ui-state-default">
  <dl class="syncer-acdn-faq">
  <dt class="syncer-acdn" data-target="syncer-acdn-02">行き先②</dt>
    <dd id="syncer-acdn-02">

            
    
            <!-- Body -->
            <div class="panel-body">
        <p>スポット名<br>
    <h2>清水寺</h2></p>

<p>京都</p>

<p>＊混雑具合<br>
 めちゃ混み
</p>

<p>＊滞在時間</p>
<div style="display:inline-flex">
<p>1</p>時間
<p>30</p>分
</div>

<p>＊費用<br>
<div style="display:inline-flex">
<P>2000円</P>（目安）</p>
</div>


<p>＊メモ<br>
<p>京都デートの定番スポット！
カップルで存分に楽しめると思います。
二人分の参拝料とお守りを購入してだいたい2000円くらいでした。
歩きやすい靴でいくことをお勧めします(°▽°)</p>
</p>

<!-- <div style="display:inline-flex"> -->
 <div class="panel-body">
                <img class="img-responsive img-rounded" src="//placehold.it/220x150" />
            </div>
 <div class="panel-body">
                <img class="img-responsive img-rounded" src="//placehold.it/220x150" />
            </div>
<!-- </div> -->

            <!-- /Body -->

     
        <!-- /Panel --></dd>　</dl>
</li>


  <li class="ui-state-default">
  <dl class="syncer-acdn-faq">
  <dt class="syncer-acdn" data-target="syncer-acdn-102">移動経路②</dt>
    
    <dd id="syncer-acdn-102">
    
    
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

  <li class="ui-state-default">
  <dl class="syncer-acdn-faq">
  <dt class="syncer-acdn" data-target="syncer-acdn-03">行き先③</dt>
    <dd id="syncer-acdn-03">

            
    
           <!-- Body -->
            <div class="panel-body">
        <p>スポット名<br>
    <h2>清水寺</h2></p>

<p>京都</p>

<p>＊混雑具合<br>
 めちゃ混み
</p>

<p>＊滞在時間</p>
<div style="display:inline-flex">
<p>1</p>時間
<p>30</p>分
</div>

<p>＊費用<br>
<div style="display:inline-flex">
<P>2000円</P>（目安）</p>
</div>


<p>＊メモ<br>
<p>京都デートの定番スポット！
カップルで存分に楽しめると思います。
二人分の参拝料とお守りを購入してだいたい2000円くらいでした。
歩きやすい靴でいくことをお勧めします(°▽°)</p>
</p>

<!-- <div style="display:inline-flex"> -->
 <div class="panel-body">
                <img class="img-responsive img-rounded" src="//placehold.it/220x150" />
            </div>
 <div class="panel-body">
                <img class="img-responsive img-rounded" src="//placehold.it/220x150" />
            </div>
<!-- </div> -->

            <!-- /Body -->

     
        <!-- /Panel --></dd>　</dl>
        </li>
</ul>
 


 <p><input type="submit" value="投稿する"></p>
<p><input type="submit" value="書き直す"></p>


</body>