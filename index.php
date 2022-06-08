<?php
session_start();
//ログイン済みの場合はホーム画面へ誘導
if (!isset($_SESSION['email_db'])) { }
   else{
     echo 'Walcome User : ' .($_SESSION['email_db']) ;
     echo '<br>';
     echo "<a href='/home.php'>ホーム画面はこちら</a>";
     echo '<br>';
     echo "<a href='/logout.php'>ログアウトはこちら</a>";
   exit;
   }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">　<!--デバイスによってCSS変更 -->
  <title>Sign-in</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" > <!--削除 style="flex-grow: 1; z-index: 9;" -->
        <div class="box-root padding-bottom--24 flex-flex flex-justifyContent--center"> <!--削除 padding-top--48  -->
          <h1><a>SIAM NDK CO.,LTD.</a></h1>
        </div>

        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">Sign in to your account</span>
              <form id="login-gamen" action="login.php" method="post">
                <div class="field padding-bottom--24">
                  <label for="email">E-mail</label>
                  <input type="email" name="email">　<!-- メールアドレス入力ボックス -->
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">Password</label>
                    <div class="reset-pass">
                      <a href="#">Forgot your password?</a>
                    </div>
                  </div>
                  <input type="password" name="login_pass"> <!-- パスワード入力ボックス -->
                </div>
                <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                  <label for="checkbox">
                    <input type="checkbox" name="checkbox"> Stay signed in for a week
                  </label>
                </div>

                <div class="field padding-bottom--24">
                <input type="submit" name="submit" value="Sign In">
			          </div>

              </form>
            </div>
          </div>

              <!-- フッター開始 -->
            <div class="footer-link padding-top--24">
            <span>Don't have an account? <a href="register.php">New Registration</a></span>
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
            <small>&copy;Copyright　-   SIAM NDK . All rights reserved.</small>
            </div>
            </div>
              <!-- フッター終了 -->

        </div>
      </div>
    </div>
  </div>
</body>

</html>