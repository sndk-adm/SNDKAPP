<html>
<head><title>signUp</title></head>

<body>
<?php
function convert_enc($str){
  $from_enc = 'EUC_JP';
  $to_enc = 'SJIS';

  return mb_convert_encoding($str, $to_enc, $from_enc);
  }
  
require('config.php');//config.phpの読み込み

//データベースへ接続、テーブルがない場合は作成
try {  $dbh = new PDO($dsn, $user, $password,$options);
        
  // PDO::ATTR_ERRMODE属性でPDO::ERRMODE_EXCEPTIONの値を設定することでエラーが発生したときに、//
  // PDOExceptionの例外（エラー）を投げる。説明 https://w.atwiki.jp/nicepaper/pages/151.html//
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo 'データベースに接続しました。';
  //例外処理 作成済みのテーブルを作ろうとするエラーを防ぐ。
  // $dbh->exec("create table if not exists login_emp(
  //     id serial primary key,
  //     empcode char(10) unique,
  //     prefix_en int not null,
  //     name_en varchar(20) not null,
  //     surname_en varchar(20) not null,
  //     email char(30) unique,
  //     login_pass text not null)");
  }
catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;}
 
//emailデータ型の検証 
if (filter_var($email,FILTER_VALIDATE_EMAIL) === false){
  echo $email;
  echo '<br>';
  echo 'メールアドレスが不正です。';
  return false;  }

//パスワードの正規表現
if (preg_match('/^[a-z0-9_]{4,10}$/i', $login_pass)) {}
else {
  echo 'パスワードは半角英数字を4文字以上で設定してください。';
  echo '<br>';
  echo '<br>';
  echo "<a href=\"https://sndk-adm.herokuapp.com/register.php\">Back to New Registration</a>";
  return false;}

//登録処理
// try {
//   $stmt = $dbh->prepare('INSERT INTO login_emp(empcode,prefix_en,name_en,surname_en,email,login_pass) VALUES(:empcode,:prefix_en,:name_en,:surname_en,:email,:login_pass)');
//   $stmt->execute([$empcode, $prefix_en, $name_en, $surname_en, $email, $login_pass]);

//   echo '登録完了';
// }
  
// catch (\Exception $e) {
//   echo '登録済みもしくは登録エラー。';
//   echo '<br>';
//   echo '<br>';
//   echo "<a href=\"https://sndk-adm.herokuapp.com/register.php\">Back to New Registration</a>";
// }
  
$dbh = null;

?>
<br>
<br>
<!-- <li><a href="register.php">Back to New Registration</a></li> -->

</body>
</html>