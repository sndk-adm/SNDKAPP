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
      <ul id="nav">
      <li><a href="home.php">HOME</a></li>
      <li><a href="home.php">USER SETING</a></li>
      <li><a href="index.php">APPLICATION</a></li>
      <li><a href="index.php">REFERENCE</a></li>
      </ul>
    <h1 id=""></h1>
    <!-- ヘッダー終了 -->
    <!-- メイン開始 --> 
        
    <div class="ck">
      <h2>User Login</h2>
       
      <h1>Please Enter login</h1>
      <form  action="login.php" method="post">
      <label for="email">email</label>
      <input type="email" name="email">

      <label for="password">password</label>
      <input type="password" name="password">
      <button type="submit">Sign In</button>
      </form>

      <h1>New registration is here</h1>
      <form action="signUp.php" method="post">
      <label for="email">email</label>
      <input type="email" name="email">

      <label for="password">password</label>
      <input type="password" name="password">
      <button type="submit">Sign Up</button>
      <p>※パスワードは半角英数字をそれぞれ１文字以上含んだ、８文字以上で設定してください。</p>
      </form>
    </div>
  </div>
     
    <!-- メイン終了 -->

    <!-- フッター開始 -->
    <div id="footer">
        <small>&copy;Copyright   SIAM NDK.All rights reserved.</small>
    </div>
    <!-- フッター終了 -->
  
</body>
</html>
