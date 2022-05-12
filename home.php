<?php
session_start();
//ログインしていない場合
if (!isset($_SESSION['email_db'])) {
  echo '<br>';
  echo "<a href='/index.php'>Please login here / こちらからログインしてください</a>";
  echo '<br>';
  exit;
   }
   else{
   }
?>

<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8">
    <title>LOGIN MENU</title>
    <LINK rel="stylesheet" href="css/bootstrap.css" type="text/css" charset="utf-8">
    <LINK rel="stylesheet" type="text/css" href="css/style.css">
 </head>
 <body>
   <!-- <div class="wrapper"> -->
    <!-- ヘッダー開始 -->
    <!-- <ul id="nav">
      <li><a href="home.php">Home</a></li>
      <li><a href="home.php">Medical</a></li>
      <li><a href="phptest2.php">Marriage</a></li>
      <li><a href="phptest2.php">Maternity</a></li>
      <li><a href="phptest2.php">Funeral</a></li>
      <li><a href="phptest2.php">Ordination</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
   </div> -->


  <?php
    session_start();
    //ログインユーザー情報

     if ($_SESSION['prefix_en']==0) {
      $_SESSION['prefix_en']='Mr.';}
      elseif ($_SESSION['prefix_en']==1) {
      $_SESSION['prefix_en']='Ms.';}
      elseif ($_SESSION['prefix_en']==2) {
      $_SESSION['prefix_en']='Mrs.';}
     else {
     }

     echo '<br>';
     echo "　 Welcome ---> Code :".$_SESSION['empcode']." - ".$_SESSION['prefix_en'].$_SESSION['name_en_db']." ".$_SESSION['surname_en_db'];
     echo '<br>';
     echo "　 E-mail :".$_SESSION['email'];

  ?>

    <!-- フッター開始 -->
    <div id="footer">
        <small>&copy;Copyright　-   SIAM NDK.All rights reserved.</small>
    </div>
    <!-- フッター終了 -->
    
</body>
</html>