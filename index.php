
<?php
session_start();
//ログイン済みの場合
if (!isset($_SESSION['email_db'])) { }
   else{
     echo 'Walcome User : ' .($_SESSION['email_db']) ;
     echo '<br>';
     echo "<a href='/home.php'>ホーム画面はこちら</a>";
     echo '<br>';
     echo "<a href='/logout.php'>ログアウトはこちら</a>";
   exit;
   }
?>

<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8">
    <title>LOGIN MENU</title>
    <LINK rel="stylesheet" type="text/css" href="css/style.css">
    <LINK rel="stylesheet" href="css/bootstrap.css" type="text/css" charset="utf-8">

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
      <input type="email" name="email"style="margin-left: 30px;padding-left: 10px;font-size: 17px;">
      <br><br>

      <label for="login_pass">Password</label>
      <input type="text" name="login_pass"style="margin-left: 7px;padding-left: 10px;font-size: 17px;">
      <br><br>

      <button type="submit" style="font-size: 17px;width : 170px;height : 38px;margin-left: 86px;">Sign In</button>
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