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
        <?php if(isset($plan_spot['spot_name'])):?>
          <h2><a href="../../spot/detail/<?php echo $plan_spot['spot_id'];?>"><?php echo $plan_spot['spot_name']; ?></a></h2>
        <?php else:?>
    <h2><?php echo $plan_spot['spot_name']; ?></h2></p>
  <?php endif; ?>

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

<?php foreach($viewOptions['transportation'] as $trans):?>
  <li class="ui-state-default">
  <dl class="syncer-acdn-faq">
  <dt class="syncer-acdn" data-target="syncer-acdn-101">移動経路</dt>
    
    <!-- <dd id="syncer-acdn-101"> -->
    
    
            <!-- Body -->
<div class="panel-body">
                <p>＊交通手段の選択</p>
                <div style="display:inline-flex">
    <p><?php echo $trans['trans_way']; ?></p>
    <p><?php if (isset($trans['other_way'])){
      echo $trans['other_way'];
      } ?></p>
      </div>

<p>＊所要時間</p>
<p><?php echo $trans['trans_time']; ?></p>


<p>＊費用<br>
<p><?php echo $trans['trans_fee']; ?>円（目安）</p>

<p>＊メモ<br>
<?php echo $trans['comment']; ?></p>

</div>
            <!-- /Body -->
    

        <!-- /Panel --><!-- </dd> -->
        </dl>
        </li>
        <?php endforeach ;?>

</ul>
 


 
<br style="clear:both">

