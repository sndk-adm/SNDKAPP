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
    <LINK rel="stylesheet" type="text/css" href="css/style.css">
    <LINK rel="stylesheet" href="css/bootstrap.css" type="text/css" charset="utf-8">
</head>
<body>
  <div class="wrapper">
    <!-- ヘッダー開始 -->
    <ul id="nav">
      <li><a href="home.php">Home</a></li>
      <li><a href="home.php">User Setting</a></li>
      <li><a href="index.php">Admin Menu</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>

    <?php
    session_start();
    //ログインユーザー情報

    if ($_SESSION['prefix_en']==0) {
      $_SESSION['prefix_en']='Mr.';}
      elseif ($_SESSION['prefix_en']==1) {
      $_SESSION['prefix_en']='Ms.';}
      elseif ($_SESSION['prefix_en']==2) {
      $_SESSION['prefix_en']='Mrs.';}
    else {}

     echo '<br>';
     echo "Welcome ---> Code :".$_SESSION['empcode']." - ".$_SESSION['prefix_en'].$_SESSION['name_en_db']." ".$_SESSION['surname_en_db'];
     echo '<br>';
    $_SESSION['email_db'];
    $_SESSION['login_pass_db'];
     echo '<br>';
    ?>
    <!-- ヘッダー終了 -->
    <!-- メイン開始 --> 
  
  <div class="ck">
  <h2>Main Menu</h2>
	<!-- MainContents -->
    <div class="container-fluid">
		<div class="row">
		<div class="col-xs-1"> </div>

		  <div class="col-xl-3">　<!--末尾の数字が[n/12]の[n]の部分 -->
			<div class="list-group">
	        <label class="list-group-item active text-center">規定／書式</label>
	        <a href="#" class="list-group-item">組織図</a>
	        <a href="#" class="list-group-item">カレンダー</a>
	        <a href="#" class="list-group-item">就業規則</a>
          <a href="#" class="list-group-item">精算フォーム</a>
        	</div>
		  </div>

		<div class="col-xl-3"> <!--末尾の数字が[n/12]の[n]の部分 -->
			<div class="list-group">
	        <label class="list-group-item active text-center">オンライン申請</label>
	        <a href="#" class="list-group-item">在職証明書</a>
	        <a href="#" class="list-group-item">医療費申請</a>
	        <a href="#" class="list-group-item">社用車使用</a>
			    <a href="#" class="list-group-item">ＩＴリクエスト</a>
			</div>
		</div>

		<div class="col-xl-3">
			<div class="list-group">
	        <label class="list-group-item active text-center">業務</label>
	        <a href="#" class="list-group-item">従業員評価</a>
	        <a href="#" class="list-group-item">CORPS活動</a>
	        <a href="#" class="list-group-item">その他</a>
			</div>
		</div>
		</div> <!-- <div class="row"> -->
	</div> <!-- <div class="container-fluid"> -->
    
    <!-- メイン終了 -->

    <!-- フッター開始 -->
    <div id="footer">
        <small>&copy;Copyright SIAM NDK.All rights reserved.</small>
    </div>
    <!-- フッター終了 -->
  </div>
</body>
</html>
