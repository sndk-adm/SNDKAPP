<?php
session_start();
$output = '';
if (isset($_SESSION['email_db'])) {
  $output = 'Logoutしました。';
} else {
  $output = 'SessionがTimeoutしました。';
}
//セッション変数のクリア
$_SESSION = array();
//セッションクッキーも削除
// if (ini_get("session.use_cookies")) {
//     $params = session_get_cookie_params();
//     setcookie(session_name(), '', time() - 42000,
//         $params["path"], $params["domain"],
//         $params["secure"], $params["httponly"]
//     );}

//セッションクリア
session_destroy();

echo $output;
echo '<br>';
echo "<a href='/index.php'>ログイン画面はこちら</a>";
echo '<br>';
?>
