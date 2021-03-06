<?php
    $PlansController = new PlansController($db, $table_name, $action);
    $PlansController->action=$action;
    $PlansController->resource=$resource;
    $error_message=array();

    //初期表示はエラーチェックをしない
    $error_message=$PlansController->_new($_POST);
?>


<!-- Page header -->
<form id="form1" method="post" action="" enctype="multipart/form-data" class="repeater">
  <div class="page-header" style="margin-top:70px;">
        <p>プラン名<br>
    <input type="text" name="title" size="60"></p>

<p>＊訪問した年を選択してください。<br>
<select name="visit_year">
<option value="">--</option>
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
<input type="radio" name="visit_type_name" value="平日" checked> 平日
<input type="radio" name="visit_type_name" value="土日・祝祭日"> 土日・祝祭日
</p>

</div>

    <!-- /Page header -->


<ul id="sortable1" class="droptrue" data-repeater-list="group-a">
  <input data-repeater-delete type="button" value="削除"/>
  <input data-repeater-create type="button" value="追加"/>
  <li data-repeater-item class="ui-state-default">

<dl class="syncer-acdn-faq">
  <dt class="syncer-acdn" data-target="syncer-acdn-01">スポット</dt>

    <dd id="syncer-acdn-01">

            <!-- Body -->
            <div class="panel-body">
        <p>スポット名<br>
    <input type="text" name="spot_name" size="40"></p>


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
<input type="radio" name="crowded" value="普通" checked > 普通
<input type="radio" name="crowded" value="空いている"> 空いている
<input type="radio" name="crowded" value="ガラガラ"> ガラガラ
</p>

<p>＊滞在時間<br>
<input type="text" name="stay_time" placeholder="例:1時間30分" size="14"></p>

<p>＊費用<br>
<input type="text" name="fee" size="6">円（目安）</p>


<p>＊メモ<br>
<textarea name="comment" cols="50" rows="5"></textarea></p>

<p>画像ファイル①</p>
<input type="file" name="picture_1">
<p>画像ファイル②</p>
<input type="file" name="picture_2">
            <!-- /Body -->


        <!-- /Panel -->
        <input name="sort_number" value="1" type="hidden" />
        </dd>
        </dl>
  </li>
</ul>
</form>




<form id="form2" method="post" action="" class="repeater">
<ul id="sortable2" class="dropfalse" data-repeater-list="group-b">
 <input data-repeater-delete type="button" value="削除"/>
  <input data-repeater-create type="button" value="追加"/>
  <li data-repeater-item class="ui-state-highlight">

        <dl class="syncer-acdn-faq">
  <dt class="syncer-acdn" data-target="syncer-acdn-101">移動経路</dt>

    <dd id="syncer-acdn-101">

           <!-- Body -->
<div class="panel-body">
                <p>＊交通手段の選択</p>
                <div style="display:inline-flex">
    <p><select name="trans_way">
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
<input type="text" name="trans_time" placeholder="例:30分" size="14"></p>

<p>＊費用<br>
<input type="text" name="trans_fee" size="6">円（目安）</p>

<p>＊メモ<br>
<textarea name="comment" cols="50" rows="5"></textarea></p>

</div>
            <!-- /Body -->
        <!-- /Panel -->
        <input name="sort_number" value="1" type="hidden" />
        </dd>
        </dl>
  </li>
</ul>



<br style="clear:both">

<p><input type="button" value="確認ページへ" onclick="send()"></p>
</form>
<script type="text/javascript">
function send(){
  var target1= document.getElementById("form1");

  target1.submit();
}
</script>

<?php
//ここに記述し、表示させる
if (isset($error_message)&&(count($error_message)>0)) {
    foreach ($error_message as $message){
        echo $message;
    }
}

?>
