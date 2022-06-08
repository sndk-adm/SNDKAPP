<?php
session_start();
//ログインしていない場合はログイン画面に誘導
if (!isset($_SESSION['email_db'])) {
  echo '<br>';
  echo "<a href='/index.php'>Please login here again / こちらからログインしてください</a>";
  echo '<br>';
  exit;}
   else{ }
?>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="style.css">
  <title> LOGIN MENU </title>

  <body>
    <header class="header">
      <div class="logo">SIAM NDK CO.,LTD.</div> <!-- ヘッダーロゴ -->
      <div class="nav"> <!-- ハンバーガーメニュー部分 -->
      <input id="drawer_input" class="drawer_hidden" type="checkbox"> <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
      <label for="drawer_input" class="drawer_open"><span></span></label> <!-- ハンバーガーアイコン -->
        <!-- メニュー -->
        <nav class="nav_content">
          <ul class="nav_list">
            <a class="atama">Menu</a>
            <Br>
            <li class="nav_item"><a href="">User Info</a></li>
            <li class="nav_item"><a href="">History</a></li>
            <li class="nav_item"><a href="">Application</a></li>
            <li class="nav_item"><a href="">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>
    
    <div>
      <hr style="width: 100%;border-top: 5px solid #5469d4;" />
    </div>


  <!-- ログインユーザー情報の表示 -->

  <?php
    //session_start();
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
     echo "　 E-mail :".$_SESSION['email_db'];
  ?>
  
  <!-- メイン画面 -->
  <dl class="info">
  <dt><span>Information</span></dt>
  <dd><time>2020.7.29</time><a href="#">今なら50%OFFセール中！</a></dd><br>
  <dd><time>2020.7.30</time><a href="#">夏季休暇のお知らせ</a></dd><br>
  <dd><time>2020.7.31</time><a href="#">臨時休業のお知らせ</a></dd><br>
  <div></div>

  <dt><span>Waiting for Appoval</span></dt>
  
  <div class="container">
      <ol>
        <li>
          <a href="">3<br>Certificate</a>
        </li>
        <li>
          <a href="">5<br>Medical</a>
        </li>
        <li>
          <a href="">5<br>Other</a>
        </li>
      </ol>
      <dt></dt>
  </div>

  </dl>

<br>
    <!-- フッター開始 -->
    <div class="footer-link padding-top--24">
    <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
    <!-- smallタグで一回り小さいサイズで表示されます。 -->
    <small>&copy;Copyright　-   SIAM NDK . All rights reserved.</small>
    </div>
    </div>
    <!-- フッター終了 -->

</body>
</html>