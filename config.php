<?php
//ini_set('display_errors', 1);
// define('DSN', 'pgsql:dbname=dfl9gst6l1jfl3 host=ec2-3-211-245-154.compute-1.amazonaws.com  port=5432')
// define('DB_USER', 'hhmxfllafjsciw');
// define('DB_PASS', 'dd16a7e2edfc599031962ac809ded8807cfe6d41cbb2c8b73681578bf5841f5f');

$dsn = 'pgsql:dbname=dfl9gst6l1jfl3 host=ec2-3-211-245-154.compute-1.amazonaws.com  port=5432';
$user = 'hhmxfllafjsciw';
$password = 'dd16a7e2edfc599031962ac809ded8807cfe6d41cbb2c8b73681578bf5841f5f';
$options = 'client_encording=UTF8'

    //データベース情報の取得
    //  $dsn = 'pgsql:dbname=dfl9gst6l1jfl3 host=ec2-3-211-245-154.compute-1.amazonaws.com  port=5432';
    //  $user = 'hhmxfllafjsciw';
    //  $password = 'dd16a7e2edfc599031962ac809ded8807cfe6d41cbb2c8b73681578bf5841f5f';
    //  try{
    //  $dbh = new PDO($dsn, $user, $password, $option);   
    //  $sql = 'SELECT * FROM dt_emp';
    //  $stmt = $dbh->query($sql);
    //  print('hello');
    //  }
    //  catch (PDOException $e){
    //   print('Error:'.$e->getMessage());
    //   die();
    //  } 
    // $dbh = null;
    
?>
