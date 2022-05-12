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
      <li><a href="home.php">Medical</a></li>
      <li><a href="phptest2.php">Marriage</a></li>
      <li><a href="phptest2.php">Maternity</a></li>
      <li><a href="phptest2.php">Funeral</a></li>
      <li><a href="phptest2.php">Ordination</a></li>
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
     echo "　 Welcome ---> Code :".$_SESSION['empcode']." - ".$_SESSION['prefix_en'].$_SESSION['name_en_db']." ".$_SESSION['surname_en_db'];
     echo '<br>';
     echo "　 Email :".$_SESSION['email']."    
     
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


    <!-- メイン終了 -->

    <!-- フッター開始 -->
    <div id="footer">
        <small>&copy;Copyright SIAM NDK.All rights reserved.</small>
    </div>
    <!-- フッター終了 -->
  </div>
</body>
</html>
