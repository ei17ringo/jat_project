<?php
    $PlansController = new PlansController($db, $table_name, $action);
    $PlansController->action=$action;
    $PlansController->resource=$resource;
    $PlansController->id=$id;
    $error_message=$PlansController->_new($_POST);
?>

<body>

<!-- Page header -->
<form method="post" action="">
  <div class="page-header">
    
        <p>プラン名<br>
    <input type="text" name="plan_name" size="60" value="<?php echo $viewOptions['plan']['title']; ?>"></p>

<p>＊訪問した年を選択してください。<br>
<?php echo $viewOptions['plan']['visit_year']; ?>
<select name="visit_year">
<option value="">変更なし</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
</select>
年
</p>


    <p>＊訪問した月選択してください。<br>
<?php echo $viewOptions['plan']['visit_month']; ?>
<input type="checkbox" name="q2" value="その1"> 1月
<input type="checkbox" name="q2" value="その2"> 2月
<input type="checkbox" name="q2" value="その3"> 3月
<input type="checkbox" name="q2" value="その4"> 4月
<input type="checkbox" name="q2" value="その5"> 5月
<input type="checkbox" name="q2" value="その1"> 6月
<input type="checkbox" name="q2" value="その2"> 7月
<input type="checkbox" name="q2" value="その3"> 8月
<input type="checkbox" name="q2" value="その4"> 9月
<input type="checkbox" name="q2" value="その5"> 10月
<input type="checkbox" name="q2" value="その1"> 11月
<input type="checkbox" name="q2" value="その2"> 12月
</p>

<p>＊訪問日を選択してください。<br>
<?php echo $viewOptions['plan']['visit_type_name']; ?>
<input type="radio" name="crowded" value="平日" checked> 平日
<input type="radio" name="crowded" value="土日・祝祭日"> 土日・祝祭日

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
    <h2><input type="text" name="spot_name" size="40" value="<?php echo $plan_spot['spot_name']; ?>"></h2></p>

<p><?php echo $plan_spot['area_name']; ?></p>
<p><select name="area_name">
<option value="">都道府県の変更</option>
<option value="北海道">北海道</option>
<option value="青森県">青森県</option>
<option value="岩手県">岩手県</option>
<option value="宮城県">宮城県</option>
<option value="秋田県">秋田県</option>
<option value="山形県">山形県</option>
<option value="福島県">福島県</option>
<option value="東京都">東京都</option>
<option value="神奈川県">神奈川県</option>
<option value="埼玉県">埼玉県</option>
<option value="千葉県">千葉県</option>
<option value="茨城県">茨城県</option>
<option value="栃木県">栃木県</option>
<option value="群馬県">群馬県</option>
<option value="山梨県">山梨県</option>
<option value="新潟県">新潟県</option>
<option value="長野県">長野県</option>
<option value="富山県">富山県</option>
<option value="石川県">石川県</option>
<option value="福井県">福井県</option>
<option value="愛知県">愛知県</option>
<option value="岐阜県">岐阜県</option>
<option value="静岡県">静岡県</option>
<option value="三重県">三重県</option>
<option value="大阪府">大阪府</option>
<option value="兵庫県">兵庫県</option>
<option value="京都府">京都府</option>
<option value="滋賀県">滋賀県</option>
<option value="奈良県">奈良県</option>
<option value="和歌山県">和歌山県</option>
<option value="鳥取県">鳥取県</option>
<option value="島根県">島根県</option>
<option value="岡山県">岡山県</option>
<option value="広島県">広島県</option>
<option value="山口県">山口県</option>
<option value="徳島県">徳島県</option>
<option value="香川県">香川県</option>
<option value="愛媛県">愛媛県</option>
<option value="高知県">高知県</option>
<option value="福岡県">福岡県</option>
<option value="佐賀県">佐賀県</option>
<option value="長崎県">長崎県</option>
<option value="熊本県">熊本県</option>
<option value="大分県">大分県</option>
<option value="宮崎県">宮崎県</option>
<option value="鹿児島県">鹿児島県</option>
<option value="沖縄県">沖縄県</option>
</select></p>

<p>＊混雑具合<br>
<?php echo $plan_spot['crowded']; ?>
</p>


<p>＊滞在時間</p>
<p><?php echo $plan_spot['stay_time']; ?>分</p>

<p>＊費用<br>
<div style="display:inline-flex">
<P><input type="text" name="stay_time" value="<?php echo $plan_spot['fee']; ?>" size="14"></p></P>円（目安）</p>
</div></p>


<p>＊メモ<br>
<p><textarea name="comment" cols="50" rows="5"><?php echo $plan_spot['comment']; ?></textarea></p>
</p>

</div>

<!-- <div style="display:inline-flex"> -->
 <div class="panel-body">
 <p><input type="checkbox" name="delete_picture_1" value="1">削除する</p>
                <?php if(empty($plan_spot['picture_1'])): ?>
                <img src="../../webroot/assets/img/no_image.png" width="208" height="129">
              <?php else:?>
                <a href="../../spot_picture/<?php echo $plan_spot['picture_1']; ?>"><img src="../../spot_picture/<?php echo $plan_spot['picture_1']; ?>" width="208" height="129">
            </a>
          <?php endif;?>
          <input type="file" name="picture_1">
            </div>
 <div class="panel-body">
 <p><input type="checkbox" name="delete_picture_2" value="$row">削除する</p>
 <?php if(empty($plan_spot['picture_2'])): ?>
                <img src="../../webroot/assets/img/no_image.png" width="208" height="129">
              <?php else:?>
                <a href="../../spot_picture/<?php echo $plan_spot['picture_2']; ?>"><img src="../../spot_picture/<?php echo $plan_spot['picture_2']; ?>" width="208" height="129">
            </a>
             <?php endif;?>
             <input type="file" name="picture_2">
            </div>

<!-- </div> -->

            <!-- /Body -->

       
        <!-- /Panel --><!-- </dd> -->　</dl>
  </li>

<?php endforeach ;?>


  <li class="ui-state-default">
  <dl class="syncer-acdn-faq">
  <dt class="syncer-acdn" data-target="syncer-acdn-101">移動経路</dt>
    
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

</form>
<p><input type="submit" value="確認画面へ"></p>
 


</body>
