<?php
    $PlansController = new PlansController($db, $table_name, $action);

?>


<!-- Page header -->
<form method="post" action="save" enctype="multipart/form-data">
  <div class="page-header" style="margin-top:70px;">

  <p>プラン名<br>
    <h1><?php echo htmlspecialchars($_SESSION['plan']['title']);?></h1></p>

<p>訪問した年<br>
 <?php echo htmlspecialchars($_SESSION['plan']['visit_year']);?></p>

  <p>＊訪問した月<br>
    <?php
      if (isset($_SESSION['plan']['visit_month'])){
        foreach ($_SESSION['plan']['visit_month'] as $_SESSION['plan']['visit_month']) {
        echo $_SESSION['plan']['visit_month']."月<br/>";
         }
         }else{
        echo "未入力";
     }
    ?></p>

  <p>＊訪問日<br>
    <?php
      echo htmlspecialchars($_SESSION['plan']['visit_type_name']);
?>
  </p>

  </div>

    <!-- /Page header -->

<div class="row">
<ul id="sortable1" class="droptrue">
  <li class="ui-state-default">


<dl class="syncer-acdn-faq">
  <dt class="syncer-acdn" data-target="syncer-acdn-01">行き先①</dt>
    
    <dd id="syncer-acdn-01">

            <div class="panel-body">
        <p>スポット名<br>
    <h2><?php
     echo htmlspecialchars($_SESSION['plan']['spots'][0]['spot_name']);
     ?></h2></p>

<p><?php echo htmlspecialchars($_SESSION['plan']['spots'][0]['area_name']);?></p>

<p>＊混雑具合<br>
 <?php echo htmlspecialchars($_SESSION['plan']['spots'][0]['crowded']);?>
</p>

<p>＊滞在時間<br>
<?php echo htmlspecialchars($_SESSION['plan']['spots'][0]['stay_time']);?>
</p>

<p>＊費用<br>
<div style="display:inline-flex">
<P><?php echo htmlspecialchars($_SESSION['plan']['spots'][0]['fee']);?></P>円（目安）
</div></p>


<p>＊メモ<br>
<p><?php echo htmlspecialchars($_SESSION['plan']['spots'][0]['comment']);?></p>
</p>

<!-- <div style="display:inline-flex"> -->
 <div class="panel-body">
                <img src="../<?php echo $path_adjust_string;?>plan_picture/<?php echo htmlspecialchars($_SESSION['plan']['spots'][0]['picture_1'], ENT_QUOTES, 'UTF-8'); ?>" width="208" height="129">
            </div>
 <div class="panel-body">
                <img src="../<?php echo $path_adjust_string;?>plan_picture/<?php echo htmlspecialchars($_SESSION['plan']['spots'][0]['picture_2'], ENT_QUOTES, 'UTF-8'); ?>" width="208" height="129">
            </div>
</div>

</dd>
</dl>
</li>


  <li class="ui-state-default">
  <dl class="syncer-acdn-faq">
  <dt class="syncer-acdn" data-target="syncer-acdn-101">移動経路①</dt>
    
    <dd id="syncer-acdn-101">
    
    
            <!-- Body -->
<div class="panel-body">
  <p>＊交通手段の選択</p>
    <div style="display:inline-flex">
  <p><?php echo htmlspecialchars($_SESSION['plan']['transportation'][0]['trans_way']);?></p>
  <p><?php echo htmlspecialchars($_SESSION['plan']['transportation'][0]['other_way']) ;?></p>
</div>

<p>＊所要時間</p>
<div style="display:inline-flex">
<p><?php echo htmlspecialchars($_SESSION['plan']['transportation'][0]['trans_time']);?></p>
</div>

<p>＊費用<br>
<p><?php echo htmlspecialchars($_SESSION['plan']['transportation'][0]['trans_fee']);?></p>円（目安）</p>

<p>＊メモ<br>
<?php echo htmlspecialchars($_SESSION['plan']['transportation'][0]['comment']);?></p>

</div>


        </dd>
        </dl>
        </li>


  <li class="ui-state-default">
  <dl class="syncer-acdn-faq">
  <dt class="syncer-acdn" data-target="syncer-acdn-02">行き先②</dt>
    <dd id="syncer-acdn-02">
         <!-- Body -->
            <div class="panel-body">
        <p>スポット名<br>
    <h2><?php echo htmlspecialchars($_SESSION['plan']['spots'][1]['spot_name']);?></h2></p>

<p><?php echo htmlspecialchars($_SESSION['plan']['spots'][1]['area_name']);?></p>

<p>＊混雑具合<br>
<?php echo htmlspecialchars($_SESSION['plan']['spots'][1]['crowded']);?>
</p>

<p>＊滞在時間</p>
<div style="display:inline-flex">
<p><?php echo htmlspecialchars($_SESSION['plan']['spots'][1]['stay_time']);?></p>
</div>

<p>＊費用<br>
<div style="display:inline-flex">
<P><?php echo htmlspecialchars($_SESSION['plan']['spots'][1]['fee']);?></P>円（目安）</p>
</div>


<p>＊メモ<br>
<p><?php echo htmlspecialchars($_SESSION['plan']['spots'][1]['comment']);?></p>
</p>

<!-- <div style="display:inline-flex"> -->
  <div class="panel-body">
                <img src="../<?php echo $path_adjust_string;?>plan_picture/<?php echo htmlspecialchars($_SESSION['plan']['spots'][1]['picture_1'], ENT_QUOTES, 'UTF-8'); ?>" width="208" height="129">
            </div>
 <div class="panel-body">
                <img src="../<?php echo $path_adjust_string;?>plan_picture/<?php echo htmlspecialchars($_SESSION['plan']['spots'][1]['picture_2'], ENT_QUOTES, 'UTF-8'); ?>" width="208" height="129">
            </div>
</div>

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
    <p><?php echo htmlspecialchars($_SESSION['plan']['transportation'][1]['trans_way']);?></p>
    <p><?php echo htmlspecialchars($_SESSION['plan']['transportation'][1]['other_way']) ;?></p>
</div>

<p>＊所要時間</p>
<div style="display:inline-flex">
<p><?php echo htmlspecialchars($_SESSION['plan']['transportation'][1]['trans_time']);?></p>
</div>

<p>＊費用<br>
<p><?php echo htmlspecialchars($_SESSION['plan']['transportation'][1]['trans_fee']);?></p>円（目安）</p>

<p>＊メモ<br>
<?php echo htmlspecialchars($_SESSION['plan']['transportation'][1]['comment']);?></p></p>

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
    <p>スポット名<br>
    <h2><?php echo htmlspecialchars($_SESSION['plan']['spots'][2]['spot_name']);?></h2></p>

<p><?php echo htmlspecialchars($_SESSION['plan']['spots'][2]['area_name']);?></p>

<p>＊混雑具合<br>
<?php echo htmlspecialchars($_SESSION['plan']['spots'][2]['crowded']);?>
</p>

<p>＊滞在時間</p>
<div style="display:inline-flex">
<p><?php echo htmlspecialchars($_SESSION['plan']['spots'][2]['stay_time']);?></p>
</div>

<p>＊費用<br>
<div style="display:inline-flex">
<P><?php echo htmlspecialchars($_SESSION['plan']['spots'][2]['fee']);?></P>円（目安）</p>
</div>


<p>＊メモ<br>
<p><?php echo htmlspecialchars($_SESSION['plan']['spots'][2]['comment']);?></p>
</p>

<!-- <div style="display:inline-flex"> -->
  <div class="panel-body">
                <img src="../<?php echo $path_adjust_string;?>plan_picture/<?php echo htmlspecialchars($_SESSION['plan']['spots'][2]['picture_1'], ENT_QUOTES, 'UTF-8'); ?>" width="208" height="129">
            </div>
 <div class="panel-body">
                <img src="../<?php echo $path_adjust_string;?>plan_picture/<?php echo htmlspecialchars($_SESSION['plan']['spots'][2]['picture_2'], ENT_QUOTES, 'UTF-8'); ?>" width="208" height="129">
            </div>
</div>

            <!-- /Body -->

     
        <!-- /Panel --></dd>　</dl>
        </li>
</ul>

</div>

<div class="row" style="margin:5px">
 <p><input type="submit" name="regist"　value="投稿する"></p>
<p><input type="submit" value="戻る" name="return" onClick="history.back()"></p>
</div>

</form>