<?php
    $PlansController = new PlansController($db, $table_name, $action);
    $plans = $PlansController->index();
?>

<h2>記事一覧</h2>
<div>
  <a href="../plans/create">記事作成</a>
</div>
<?php while ($blog = mysqli_fetch_assoc($blogs)): ?>
    <ul>
      <li><?php echo $blog['title']; ?> : 
        <?php echo $blog['created']; ?> 
        【<?php echo link_to('show/' . $blog['id'],'詳細'); ?> / 
        <?php echo link_to('edit/' . $blog['id'],'編集'); ?> / 
        <?php echo link_to('delete/' . $blog['id'],'削除'); ?>】
      </li>
    </ul>
<?php endwhile; ?>
