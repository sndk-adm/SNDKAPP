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
    <!-- ヘッダー開始 -->
    <div class="REG_BOX">
    <div class="REG_BOX_TX">User Login</div>
    </div>
    <!-- ヘッダー終了 -->
    
    <!-- メイン開始 --> 
    <!-- サブ見出し --> 
     <div class="SUB_TX">Please Enter E-mail & login Password</div>  

     <div class="FILL_TX">
      <form  action="login.php" method="post">

      <label for="email">E-mail</label>
      <input type="email" name="email"style="margin-left: 28px;padding-left: 10px;font-size: 17px;">
      <br><br>
      <label for="password">Password</label>
      <input type="password" name="password"style="margin-left: 5px;padding-left: 10px;font-size: 17px;">
      <br><br>
      <button type="submit" style="width : 300px;height : 100px;">Sign In</button>
      </form> 
      <br>
      <br>
      <li><a href="register.php">New Registration</a></li>
     </div>
    <!-- メイン終了 -->

    <!-- フッター開始 -->
    <div id="footer">
        <small>&copy;Copyright　-   SIAM NDK.All rights reserved.</small>
    </div>
    <!-- フッター終了 -->
  
</body>
</html>