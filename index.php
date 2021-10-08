<html>
<head>
    <title>PHP LOGIN</title>
</head>
<body>
    <?php
        
    //ini_set('display_errors', 1);

    define('DSN', 'mysql:host=localhost;dbname=test_login');
    define('DB_USER', 'hogeUser');
    define('DB_PASS', 'hogehoge');

    function h($s){
    return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
  }
  
  session_start();
  //ログイン済みの場合
  if (isset($_SESSION['EMAIL'])) {
    echo 'ようこそ' .  h($_SESSION['EMAIL']) . "さん<br>";
    echo "<a href='/logout.php'>ログアウトはこちら。</a>";
    exit;
  }

  
  require_once('config.php');
//データベースへ接続、テーブルがない場合は作成
try {
  $pdo = new PDO(DSN, DB_USER, DB_PASS);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec("create table if not exists userDeta(
      id int not null auto_increment primary key,
      email varchar(255) unique,
      password varchar(255) ,
      created timestamp not null default current_timestamp
    )");
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
//POSTのValidate。
if (!$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  echo '入力された値が不正です。';
  return false;
}
//パスワードの正規表現
if (preg_match('/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{8,100}+\z/i', $_POST['password'])) {
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
} else {
  echo 'パスワードは半角英数字をそれぞれ1文字以上含んだ8文字以上で設定してください。';
  return false;
}
//登録処理
try {
  $stmt = $pdo->prepare("insert into userDeta(email, password) value(?, ?)");
  $stmt->execute([$email, $password]);
  echo '登録完了';
} catch (\Exception $e) {
  echo '登録済みのメールアドレスです。';
}

session_start();
$output = '';
if (isset($_SESSION["EMAIL"])) {
  $output = 'Logoutしました。';
} else {
  $output = 'SessionがTimeoutしました。';
}
//セッション変数のクリア
$_SESSION = array();
//セッションクッキーも削除
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
//セッションクリア
@session_destroy();

echo $output;




   ?>
  
  <!DOCTYPE html>
  <html lang="ja">
   <head>
     <meta charset="utf-8">
     <title>Login</title>
   </head>
   <body>
     <h1>ようこそ、ログインしてください。</h1>
     <form  action="login.php" method="post">
       <label for="email">email</label>
       <input type="email" name="email">
       <label for="password">password</label>
       <input type="password" name="password">
       <button type="submit">Sign In</button>
     </form>
     <h1>初めての方はこちら</h1>
     <form action="signUp.php" method="post">
       <label for="email">email</label>
       <input type="email" name="email">email
       <label for="password">password</label>
       <input type="password" name="password">
       <button type="submit">Sign Up</button>
       <p>※パスワードは半角英数字をそれぞれ１文字以上含んだ、８文字以上で設定してください。</p>
     </form>
   </body>
  </html>

</html>
