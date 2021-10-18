<?php
  //function h($s){
  //return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
  //}

  //session_start();
  //ログイン済みの場合
  //if (isset($_SESSION['EMAIL'])) {
  //echo 'ようこそ' .  h($_SESSION['EMAIL']) . 'さん'<br>;}
  //else {
  //echo <a href='/logout.php'>ログアウトはこちら。</a>;
  //exit;
  //}
?>

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
    <h1>User Login</h1>
    <!-- ヘッダー終了 -->
    <!-- メイン開始 --> 
        
    <div class="ck">
       
      <h3>Please Enter login</h3>
      <form  action="login.php" method="post">
      <label for="email">email</label>
      <input type="email" name="email">

      <label for="password">password</label>
      <input type="password" name="password">
      <button type="submit">Sign In</button>
      </form>

      </form>
    </div>
  </div>
  <br>
  <br>
  <li><a href="register.php">New Registration</a></li>

    <!-- メイン終了 -->

    <!-- フッター開始 -->
    <div id="footer">
        <small>&copy;Copyright   SIAM NDK.All rights reserved.</small>
    </div>
    <!-- フッター終了 -->
  
</body>
</html>
