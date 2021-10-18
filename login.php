<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8">
    <title>LOGIN MENU</title>
    <LINK rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="wrapper">
    <!-- ヘッダー開始 -->
    <ul id="nav">
      <li><a href="home.php">HOME</a></li>
      <li><a href="home.php">USER SETING</a></li>
      <li><a href="index.php">APPLICATION</a></li>
      <li><a href="index.php">REFERENCE</a></li>
    </ul>
    <h1 id=""></h1>
    <!-- ヘッダー終了 -->

    <!-- メイン開始 --> 
    
    <?php
      require_once('config.php');

      session_start();
      //POSTのvalidate
      if (!filter_char($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      echo '入力された値が不正です。';
      return false;
      }
      //DB内でPOSTされたメールアドレスを検索
      try {
      $pdo = new PDO(DSN, DB_USER, DB_PASS);
      $stmt = $pdo->prepare('select * from LOGIN_EMP where email = ?');
      $stmt->execute([$_POST['email']]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      } catch (\Exception $e) {
      echo $e->getMessage() . PHP_EOL;
      }
      //emailがDB内に存在しているか確認
      if (!isset($row['email'])) {
      echo 'メールアドレス又はパスワードが間違っています。';
      return false;
      }
      //パスワード確認後sessionにメールアドレスを渡す
      if (password_verify($_POST['password'], $row['password'])) {
      session_regenerate_id(true); //session_idを新しく生成し、置き換える
      $_SESSION['EMAIL'] = $row['email'];
      echo 'ログインしました';
      } else {
      echo 'メールアドレス又はパスワードが間違っています。';
      return false;
      }
    ?>

    <!-- メイン終了 -->
    <!-- フッター開始 -->
    <div id="footer">
        <small>&copy;Copyright SIAM NDK.All rights reserved.</small>
    </div>
    <!-- フッター終了 -->
  </div>
</body>
</html>

</html>
