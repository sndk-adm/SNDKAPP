<?php
    session_start();
    echo 'ここにセッション情報';
    echo '<br>';
    echo $_session['name_en'];
    echo '<br>';
    echo $_session['email'];
    echo '<br>';
    echo '入力内容の確認';
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
      <li><a href="home.php">USER SETTING</a></li>
      <li><a href="index.php">APPLICATION</a></li>
      <li><a href="index.php">ADMIN</a></li>
    </ul>
    <h1 id=""></h1>
    <!-- ヘッダー終了 -->
    <!-- メイン開始 --> 
    <div class="ck">
    <h2>Information</h2>
    <table class="info">
    <tr>
      <th>Employee Code</th> <!--表の見出し-->
      <td> 140047 </td> <!--表のデータ-->
    </tr>
    <tr>
      <th>Employee Name</th>
      <td> Taro </td>
    </tr>
    </table>
        
    </div>
    <!-- メイン終了 -->
    <!-- フッター開始 -->
    <div id="footer">
        <small>&copy;Copyright SIAM NDK.All rights reserved.</small>
    </div>
    <!-- フッター終了 -->
  </div>
</body>
</html>
