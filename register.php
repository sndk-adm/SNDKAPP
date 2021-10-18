
<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8">
    <title>LOGIN MENU</title>
    <LINK rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="wrapper">
    <h1>New Registration</h1>
    <!-- ヘッダー終了 -->
    <!-- メイン開始 --> 
        
    <div class="ck">
      <h2>Please Enter login</h2>
     
      <form action="signUp.php" method="post">
      <label for="EMPCODE">Employee Code</label>
      <input type="text" name="EMPCODE">
      <br>
      <input type="radio" name="PREFIX_EN" value="0">Mr.
      <input type="radio" name="PREFIX_EN" value="1">Miss.
      <input type="radio" name="PREFIX_EN" value="2">Mrs.
      <br>
      <label for="NAME">Name(Eng)</label>
      <input type="text" name="NAME"size="30">
      <label for="SURNAME">Surname(Eng)</label>
      <input type="text" name="SURNAME"size="30">
      <br>
      <label for="DATE_BIRTH">Birth day</label>
      <input type="date" name="DATE_BIRTH">
      <br>
      <label for="email">email</label>
      <input type="email" name="email" size="60">
      <br>
      <label for="password">password</label>
      <input type="password" name="password"size="20">
      <br>
      <button type="submit">Sign Up</button>
      <p>※パスワードは半角英数字をそれぞれ１文字以上含んだ、８文字以上で設定してください。</p>
      </form>
    </div>
  </div>
     
    <!-- メイン終了 -->

    <!-- フッター開始 -->
    <div id="footer">
        <small>&copy;Copyright   SIAM NDK.All rights reserved.</small>
    </div>
    <!-- フッター終了 -->
  
</body>
</html>
