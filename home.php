<?php
session_start();
//ログイン済みの場合
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
      <li><a href="index.php">Application</a></li>
      <li><a href="index.php">Admin</a></li>
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
     echo "Welcome  Code :".$_SESSION['empcode']." - ".$_SESSION['prefix_en'].$_SESSION['name_en_db']." ".$_SESSION['surname_en_db'];
     echo '<br>';
    $_SESSION['email_db'];
    $_SESSION['login_pass_db'];
    ?>
    <!-- ヘッダー終了 -->
    <!-- メイン開始 --> 
  
  <div class="ck">
  <h2>Information</h2>
	<!-- MainContents -->
    <div class="container-fluid">
		<div class="row">
		<div class="col-xs-1"> </div>

		  <div class="col-xl-3">
			<div class="list-group">
	        <label class="list-group-item active text-center">売上管理</label>
	        <a href="#" class="list-group-item">日次売上集計</a>
	        <a href="#" class="list-group-item">日次売上明細</a>
	        <a href="#" class="list-group-item">書籍分類別集計</a>
        	</div>
		  </div>

		<div class="col-xl-3"> <!--末尾の数字が[n/12]の[n]の部分 -->
			<div class="list-group">
	        <label class="list-group-item active text-center">在庫管理</label>
	        <a href="#" class="list-group-item">在庫検索</a>
	        <a href="#" class="list-group-item">入庫・在庫登録</a>
	        <a href="#" class="list-group-item">入庫明細</a>
			<a href="#" class="list-group-item">受払一覧</a>
			</div>
		</div>

		<div class="col-xl-3">
			<div class="list-group">
	        <label class="list-group-item active text-center">マスタ管理</label>
	        <a href="#" class="list-group-item">管理システムメニュー</a>
	        <a href="#" class="list-group-item">書籍 取次</a>
	        <a href="#" class="list-group-item">返品設定</a>
			<a href="#" class="list-group-item">書籍分類</a>
			</div>
		</div>
		</div> <!-- <div class="row"> -->
	</div> <!-- <div class="container-fluid"> -->
    
    <!-- <table class="info">
    <tr>
      <th>Employee Code</th> <!--表の見出し-->
      <th>Employee Name</th>
      <td> 140047 </td> <!--表のデータ-->
      <td> Taro </td>
    </tr>
    </table>
    </div> -->
    <!-- メイン終了 -->

    <!-- フッター開始 -->
    <div id="footer">
        <small>&copy;Copyright SIAM NDK.All rights reserved.</small>
    </div>
    <!-- フッター終了 -->
  </div>
</body>
</html>
