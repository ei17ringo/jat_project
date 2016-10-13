<?php
    $plansController = new PlansController($db, $table_name, $action);
    $plans = $PlansController->edit($id);
?>

<div>
  <form action="" method="post">
    <div>
      <input type="text" name="title" value="<?php echo $plans['title'] ?>">
    </div>
    <div>
      <textarea name="body"><?php echo $blog['body'] ?></textarea>
    </div>
    <div>
      <?php echo link_to('../index', '&laquo;&nbsp;戻る'); ?><input type="submit" value="編集完了">
    </div>
  </form>
</div>
