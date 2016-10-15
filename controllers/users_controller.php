<?php
  // コントローラのクラスをインスタンス化
  $controller = new UsersController();

  // アクション名によって、呼び出すメソッドを変える
  switch ($action) {
    case 'create';
        $controller->create();
        break;
    case 'confirm':
        $controller->confirm($post);
        break;
    case 'login':
        $controller->login();
        break;
    case 'mypage';
        $controller->mypage($id);
        break;
    case 'profle';
        $controller->profile($id);
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'update':
        $controller->update($id, $post);
        break;
    case 'delete':
        $controller->delete($id);
    default:
        break;
  }

  class UsersController {

    function create() {

      $action = 'create';

      require('views/layouts/application.php');
    }

    function confirm($post) {
      // ⑦モデルを呼び出す
      $user        = new User();
      $viewOptions = $user->confirm($post);
      $action      = 'confirm';

      require('views/layouts/application.php');
    }

    function login() {
      $user        = new User();
      $action      = 'login';

      require('views/layouts/application.php');
    }

    function mypage($id) {
      $user        = new User();
      $viewOptions = $user->mypage($id);
      $action      = 'mypage';

      require('views/layouts/application.php');
    }

      function profile($id) {
      $user        = new User();
      $viewOptions = $user->profile($id);
      $action      = 'profile';

      require('views/layouts/application.php');
    }


    function edit($id) {
      $user        = new User();
      $viewOptions = $user->edit($id);
      $action      = 'edit';

      require('views/layouts/application.php');
    }

    function update($post, $id) {
      $user = new User();
      $user->update($id, $post);

      // indexへ遷移
      header('Location: /seed_blog/blogs/index');
      exit();
    }

    function delete($id) {
      $user        = new User();
      $viewOptions = $user->delete($id);
      $action      = 'delete';

      // indexへ遷移
      header('Location: /seed_blog/blogs/index');
      exit();
    }
  }
?>
