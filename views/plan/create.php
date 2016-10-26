<?php
    $PlansController = new PlansController($db, $table_name, $action);
    $PlansController->action=$action;
    $PlansController->resource=$resource;
    $error_message=array();

    //初期表示はエラーチェックをしない
    $error_message=$PlansController->_new($_POST);
?>

<!-- Page header -->
<form method="post" action="" enctype="multipart/form-data">
  <div class="page-header" style="margin-top:70px;">
    
        <p>プラン名<br>
    <input type="text" name="title" size="60"></p>



    <p>＊訪問した月を選択してください。（複数選択可）<br>
<input type="checkbox" name="visit_month[]" value="1"> 1月
<input type="checkbox" name="visit_month[]" value="2"> 2月
<input type="checkbox" name="visit_month[]" value="3"> 3月
<input type="checkbox" name="visit_month[]" value="4"> 4月
<input type="checkbox" name="visit_month[]" value="5"> 5月
<input type="checkbox" name="visit_month[]" value="6"> 6月
<input type="checkbox" name="visit_month[]" value="7"> 7月
<input type="checkbox" name="visit_month[]" value="8"> 8月
<input type="checkbox" name="visit_month[]" value="9"> 9月
<input type="checkbox" name="visit_month[]" value="10"> 10月
<input type="checkbox" name="visit_month[]" value="11"> 11月
<input type="checkbox" name="visit_month[]" value="12"> 12月
</p>

<p>＊訪問日を選択してください。<br>
<input type="radio" name="visit_day_type" value="平日" checked> 平日
<input type="radio" name="visit_day_type" value="土日・祝祭日"> 土日・祝祭日

</p>


</div>

    <!-- /Page header -->


<ul id="sortable1" class="droptrue">
  <li class="ui-state-default">

  

<dl class="syncer-acdn-faq">
  <dt class="syncer-acdn" data-target="syncer-acdn-01">スポット</dt><a href="">追加</a>&nbsp;<a href="">削除</a>
    
    <dd id="syncer-acdn-01">
            
    
            <!-- Body -->
            <div class="panel-body">
        <p>スポット名<br>
    <input type="text" name="supot_name" size="40"></p>

<p><select name="area_name">
<option value="">都道府県の選択</option>

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
<input type="radio" name="crowded" value="めちゃ混み"> めちゃ混み
<input type="radio" name="crowded" value="混んでいる"> 混んでいる
<input type="radio" name="crowded" value="普通"　checked > 普通
<input type="radio" name="crowded" value="空いている"> 空いている
<input type="radio" name="crowded" value="ガラガラ"> ガラガラ
</p>

<p>＊滞在時間<br>
<input type="text" name="stay_time" placeholder="例:1時間30分" size="4"></p>

</div>

<p>＊費用<br>
<input type="text" name="fee" size="6">円（目安）</p>


<p>＊メモ<br>
<textarea name="comment" cols="50" rows="5"></textarea></p>

<p>画像ファイル①</p>
<input type="file" name="picture_1">
<p>画像ファイル②</p>
<input type="file" name="picture_2">

</div>
            <!-- /Body -->

       
        <!-- /Panel --></dd>　</dl>
  </li>


  <li class="ui-state-default">
  
<dl class="syncer-acdn-faq">
  <dt class="syncer-acdn" data-target="syncer-acdn-02">スポット</dt><a href="">追加</a>&nbsp;<a href="">削除</a>
    <dd id="syncer-acdn-02">

            <!-- Body -->
            <div class="panel-body">
        <p>スポット名<br>
    <input type="text" name="suppot_name" size="40"></p>

<p><select name="prefecture">
<option value="">都道府県の選択</option>

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
<input type="radio" name="crowded" value="めちゃ混み"> めちゃ混み
<input type="radio" name="crowded" value="混んでいる"> 混んでいる
<input type="radio" name="crowded" value="普通"　checked > 普通
<input type="radio" name="crowded" value="空いている"> 空いている
<input type="radio" name="crowded" value="ガラガラ"> ガラガラ
</p>

<p>＊滞在時間</p>
<div style="display:inline-flex">
<input type="text" name="hour" size="4">時間
<input type="text" name="minute" size="4">分
</div>

<p>＊費用<br>
<input type="text" name="suppot_name" size="6">円（目安）</p>


<p>＊メモ<br>
<textarea name="example1" cols="50" rows="5"></textarea></p>

<p>画像ファイル①</p>
<input type="file" name="pic">
<p>画像ファイル②</p>
<input type="file" name="pic">

</div>
            <!-- /Body -->

     
        <!-- /Panel --></dd>　</dl>
        </li>


  <li class="ui-state-default">
  <dl class="syncer-acdn-faq">
  <dt class="syncer-acdn" data-target="syncer-acdn-03">スポット</dt><a href="">追加</a>&nbsp;<a href="">削除</a>
    <dd id="syncer-acdn-03">

            
    
            <!-- Body -->
            <div class="panel-body">
        <p>スポット名<br>
    <input type="text" name="suppot_name" size="40"></p>

<p><select name="prefecture">
<option value="">都道府県の選択</option>

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
<input type="radio" name="crowded" value="めちゃ混み"> めちゃ混み
<input type="radio" name="crowded" value="混んでいる"> 混んでいる
<input type="radio" name="crowded" value="普通"　checked > 普通
<input type="radio" name="crowded" value="空いている"> 空いている
<input type="radio" name="crowded" value="ガラガラ"> ガラガラ
</p>

<p>＊滞在時間</p>
<div style="display:inline-flex">
<input type="text" name="hour" size="4">時間
<input type="text" name="minute" size="4">分
</div>

<p>＊費用<br>
<input type="text" name="suppot_name" size="6">円（目安）</p>


<p>＊メモ<br>
<textarea name="example1" cols="50" rows="5"></textarea></p>

<p>画像ファイル①</p>
<input type="file" name="pic">
<p>画像ファイル②</p>
<input type="file" name="pic">

</div>
            <!-- /Body -->

     
        <!-- /Panel --></dd>　</dl>
</li>


  <li class="ui-state-default">
  <dl class="syncer-acdn-faq">
  <dt class="syncer-acdn" data-target="syncer-acdn-04">スポット</dt><a href="">追加</a>&nbsp;<a href="">削除</a>
    <dd id="syncer-acdn-04">

            
    
            <!-- Body -->
            <div class="panel-body">
        <p>スポット名<br>
    <input type="text" name="suppot_name" size="40"></p>

<p><select name="prefecture">
<option value="">都道府県の選択</option>

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
<input type="radio" name="crowded" value="めちゃ混み"> めちゃ混み
<input type="radio" name="crowded" value="混んでいる"> 混んでいる
<input type="radio" name="crowded" value="普通"　checked > 普通
<input type="radio" name="crowded" value="空いている"> 空いている
<input type="radio" name="crowded" value="ガラガラ"> ガラガラ
</p>

<p>＊滞在時間</p>
<div style="display:inline-flex">
<input type="text" name="hour" size="4">時間
<input type="text" name="minute" size="4">分
</div>

<p>＊費用<br>
<input type="text" name="suppot_name" size="6">円（目安）</p>


<p>＊メモ<br>
<textarea name="example1" cols="50" rows="5"></textarea></p>

<p>画像ファイル①</p>
<input type="file" name="pic">
<p>画像ファイル②</p>
<input type="file" name="pic">

</div>
            <!-- /Body -->

     
        <!-- /Panel --></dd>　</dl>
        </li>

  <li class="ui-state-default">
  <dl class="syncer-acdn-faq">
  <dt class="syncer-acdn" data-target="syncer-acdn-05">スポット</dt><a href="">追加</a>&nbsp;<a href="">削除</a>
    <dd id="syncer-acdn-05">

            
    
            <!-- Body -->
            <div class="panel-body">
        <p>スポット名<br>
    <input type="text" name="suppot_name" size="40"></p>

<p><select name="prefecture">
<option value="">都道府県の選択</option>

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
<input type="radio" name="crowded" value="めちゃ混み"> めちゃ混み
<input type="radio" name="crowded" value="混んでいる"> 混んでいる
<input type="radio" name="crowded" value="普通"　checked > 普通
<input type="radio" name="crowded" value="空いている"> 空いている
<input type="radio" name="crowded" value="ガラガラ"> ガラガラ
</p>

<p>＊滞在時間</p>
<div style="display:inline-flex">
<input type="text" name="hour" size="4">時間
<input type="text" name="minute" size="4">分
</div>

<p>＊費用<br>
<input type="text" name="suppot_name" size="6">円（目安）</p>


<p>＊メモ<br>
<textarea name="example1" cols="50" rows="5"></textarea></p>

<p>画像ファイル①</p>
<input type="file" name="pic">
<p>画像ファイル②</p>
<input type="file" name="pic">

</div>
            <!-- /Body -->

     
        <!-- /Panel --></dd>　</dl>
        </li>
</ul>
 
<ul id="sortable2" class="dropfalse">
  <li class="ui-state-highlight">
        
        <dl class="syncer-acdn-faq">
  <dt class="syncer-acdn" data-target="syncer-acdn-101">移動経路</dt><a href="">追加</a>&nbsp;<a href="">削除</a>
    
    <dd id="syncer-acdn-101">
    
           
            
    
            <!-- Body -->
<div class="panel-body">
                <p>＊交通手段の選択</p>
                <div style="display:inline-flex">
    <p><select name="traffic_way">
<option value=""></option>

<option value="徒歩" selected>徒歩</option>

<option value="電車">電車</option>
<option value="バス">バス</option>
<option value="自家用車">自家用車</option>
<option value="タクシー">タクシー</option>
<option value="自転車">自転車</option>
<option value="バイク">バイク</option>

<option value="飛行機">飛行機</option>
<option value="その他">その他</option>
</select><p><small>その他の場合は入力してください。</small><input type="text" name="other_way" size="10"></p></p>
</div>

<p>＊所要時間</p>
<div style="display:inline-flex">
<input type="text" name="hour" size="4">時間
<input type="text" name="minute" size="4">分
</div>

<p>＊費用<br>
<input type="text" name="suppot_name" size="6">円（目安）</p>

<p>＊メモ<br>
<textarea name="example1" cols="50" rows="5"></textarea></p>

</div>
            <!-- /Body -->
    

        <!-- /Panel --></dd></dl>
  </li>

  <li class="ui-state-highlight">

  <dl class="syncer-acdn-faq">
  <dt class="syncer-acdn" data-target="syncer-acdn-102">移動経路</dt><a href="">追加</a>&nbsp;<a href="">削除</a>
    
    <dd id="syncer-acdn-102">
    
    
            <!-- Body -->
<div class="panel-body">
                <p>＊交通手段の選択</p>
                <div style="display:inline-flex">
    <p><select name="traffic_way">
<option value=""></option>

<option value="徒歩" selected>徒歩</option>

<option value="電車">電車</option>
<option value="バス">バス</option>
<option value="自家用車">自家用車</option>
<option value="タクシー">タクシー</option>
<option value="自転車">自転車</option>
<option value="バイク">バイク</option>

<option value="飛行機">飛行機</option>
<option value="その他">その他</option>
</select><p><small>その他の場合は入力してください。</small><input type="text" name="other_way" size="10"></p></p>
</div>

<p>＊所要時間</p>
<div style="display:inline-flex">
<input type="text" name="hour" size="4">時間
<input type="text" name="minute" size="4">分
</div>

<p>＊費用<br>
<input type="text" name="suppot_name" size="6">円（目安）</p>

<p>＊メモ<br>
<textarea name="example1" cols="50" rows="5"></textarea></p>

</div>
            <!-- /Body -->
    

        <!-- /Panel --></dd></dl>
        </li>


  <li class="ui-state-highlight">
  <dl class="syncer-acdn-faq">
  <dt class="syncer-acdn" data-target="syncer-acdn-103">移動経路</dt><a href="">追加</a>&nbsp;<a href="">削除</a>
    
    <dd id="syncer-acdn-103">
    
    
            <!-- Body -->
<div class="panel-body">
                <p>＊交通手段の選択</p>
                <div style="display:inline-flex">
    <p><select name="traffic_way">
<option value=""></option>

<option value="徒歩" selected>徒歩</option>

<option value="電車">電車</option>
<option value="バス">バス</option>
<option value="自家用車">自家用車</option>
<option value="タクシー">タクシー</option>
<option value="自転車">自転車</option>
<option value="バイク">バイク</option>

<option value="飛行機">飛行機</option>
<option value="その他">その他</option>
</select><p><small>その他の場合は入力してください。</small><input type="text" name="other_way" size="10"></p></p>
</div>

<p>＊所要時間</p>
<div style="display:inline-flex">
<input type="text" name="hour" size="4">時間
<input type="text" name="minute" size="4">分
</div>

<p>＊費用<br>
<input type="text" name="suppot_name" size="6">円（目安）</p>

<p>＊メモ<br>
<textarea name="example1" cols="50" rows="5"></textarea></p>

</div>
            <!-- /Body -->
    

        <!-- /Panel --></dd></dl>

        </li>


  <li class="ui-state-highlight">
  <dl class="syncer-acdn-faq">
  <dt class="syncer-acdn" data-target="syncer-acdn-104">移動経路</dt><a href="">追加</a>&nbsp;<a href="">削除</a>
    
    <dd id="syncer-acdn-104">
    
    
            <!-- Body -->
<div class="panel-body">
                <p>＊交通手段の選択</p>
                <div style="display:inline-flex">
    <p><select name="traffic_way">
<option value=""></option>

<option value="徒歩" selected>徒歩</option>

<option value="電車">電車</option>
<option value="バス">バス</option>
<option value="自家用車">自家用車</option>
<option value="タクシー">タクシー</option>
<option value="自転車">自転車</option>
<option value="バイク">バイク</option>

<option value="飛行機">飛行機</option>
<option value="その他">その他</option>
</select><p><small>その他の場合は入力してください。</small><input type="text" name="other_way" size="10"></p></p>
</div>

<p>＊所要時間</p>
<div style="display:inline-flex">
<input type="text" name="hour" size="4">時間
<input type="text" name="minute" size="4">分
</div>

<p>＊費用<br>
<input type="text" name="suppot_name" size="6">円（目安）</p>

<p>＊メモ<br>
<textarea name="example1" cols="50" rows="5"></textarea></p>

</div>
            <!-- /Body -->
    

        <!-- /Panel --></dd></dl>
        </li>


  <li class="ui-state-highlight">
  <dl class="syncer-acdn-faq">
  <dt class="syncer-acdn" data-target="syncer-acdn-105">移動経路</dt><a href="">追加</a>&nbsp;<a href="">削除</a>
    
    <dd id="syncer-acdn-105">
    
    
            <!-- Body -->
<div class="panel-body">
                <p>＊交通手段の選択</p>
                <div style="display:inline-flex">
    <p><select name="traffic_way">
<option value=""></option>

<option value="徒歩" selected>徒歩</option>

<option value="電車">電車</option>
<option value="バス">バス</option>
<option value="自家用車">自家用車</option>
<option value="タクシー">タクシー</option>
<option value="自転車">自転車</option>
<option value="バイク">バイク</option>

<option value="飛行機">飛行機</option>
<option value="その他">その他</option>
</select><p><small>その他の場合は入力してください。</small><input type="text" name="other_way" size="10"></p></p>
</div>

<p>＊所要時間</p>
<div style="display:inline-flex">
<input type="text" name="hour" size="4">時間
<input type="text" name="minute" size="4">分
</div>

<p>＊費用<br>
<input type="text" name="suppot_name" size="6">円（目安）</p>

<p>＊メモ<br>
<textarea name="example1" cols="50" rows="5"></textarea></p>

</div>
            <!-- /Body -->
    

        <!-- /Panel --></dd></dl>
        </li>
</ul>
 

 
<br style="clear:both">

<p><input type="submit" value="確認画面へ"></p>
</form>

