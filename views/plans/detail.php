<?php
    $PlansController = new PlansController($db, $table_name, $action);
    $plans_record = $plansController->show($id);

    $blog = mysqli_fetch_assoc($blog_record);
?>

<h2>記事詳細</h2>
<div><?php echo $blog['title']; ?></div>
<div><?php echo $blog['body']; ?></div>

<?php echo link_to('../index', '一覧へ'); ?>
