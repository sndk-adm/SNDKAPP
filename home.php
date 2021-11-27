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
  <div class="wrapper">
    <!-- ヘッダー開始 -->
    <ul id="nav">
      <li><a href="home.php">Home</a></li>
      <li><a href="home.php">User Setting</a></li>
      <li><a href="home.php">Admin Menu</a></li>
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
         
     //データベース情報の取得
    //  $dsn = 'pgsql:dbname=dfl9gst6l1jfl3 host=ec2-3-211-245-154.compute-1.amazonaws.com  port=5432';
    //  $user = 'hhmxfllafjsciw';
    //  $password = 'dd16a7e2edfc599031962ac809ded8807cfe6d41cbb2c8b73681578bf5841f5f';
    //  try{
    //  $dbh = new PDO($dsn, $user, $password, $option);   
    //  $sql = 'SELECT * FROM dt_emp';
    //  $stmt = $dbh->query($sql);
    //  foreach ($stmt as $row) {
    //  echo $row['dt_id'].'：'.$row['dt_sex'].'：'.$row['dt_idcard'].'：'.$row['dt_prefix_id'].'：'.$row['dt_name_en'].'：'.$row['dt_surname_en'].'：'.$row['dt_birthday'].'：'.$row['dt_email'].'：'.$row['dt_contact'];
    //  echo '<br>';
    //       }
    //  print('hello');

    //     }

    //  catch (PDOException $e){
    //   print('Error:'.$e->getMessage());
    //   die();
    //  } 
    // $dbh = null;
    ?>
    <!-- ヘッダー終了 -->
    <!-- メイン開始 --> 
   
    <br>
    <br>

    <div class="container-fluid">
		<div class="row">
		  <div class="col-xl-3">　<!--末尾の数字が[n/12]の[n]の部分 -->
			<div class="list-group">
	        <label class="list-group-item active text-center">Company Document / Form </label>
	        <a href="#" class="list-group-item">Organization Chart</a>
	        <a href="#" class="list-group-item">Company Calendar</a>
	        <a href="#" class="list-group-item">Labor Regulations</a>
          <a href="#" class="list-group-item">Settlement Form </a>
        	</div>
		  </div>

		<div class="col-xl-3"> <!--末尾の数字が[n/12]の[n]の部分 -->
			<div class="list-group">
	        <label class="list-group-item active text-center">Online Application </label>
	        <a href="#" class="list-group-item">Certificate Of Employment </a>
	        <a href="#" class="list-group-item">Medical Expense Application</a>
	        <a href="#" class="list-group-item">Booking Company Car </a>
			    <a href="#" class="list-group-item">IT Request </a>
			</div>
		</div>

		<div class="col-xl-3">
			<div class="list-group">
	        <label class="list-group-item active text-center">Task / Activity</label>
	        <a href="#" class="list-group-item">Employee Evaluation</a>
	        <a href="#" class="list-group-item">CORPS Activity</a>
	        <a href="#" class="list-group-item">Other Task</a>
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
