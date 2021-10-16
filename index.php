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
      <li><a href="index.php">HOME</a></li>
      <li><a href="index.php">USER SETING</a></li>
      <li><a href="index.php">APPLICATION</a></li>
      <li><a href="index.php">REFERENCE</a></li>
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
    
    <?php
    echo '入力内容の確認';
    ?>
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

</html>
