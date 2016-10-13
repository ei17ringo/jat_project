<?php
    $BlogsController = new BlogsController($db, $table_name, $action);
    $blog = $BlogsController->edit($id);
?>
