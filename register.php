
<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8">
   <title>REGISTER</title>
   <LINK rel="stylesheet" href="css/style.css"> <!-- type="text/css" -->
 </head>

 <body>
 <!-- ヘッダー開始 -->
 <div class="REG_BOX">
   <div class="REG_BOX_TX">New Registration Form</div>
 </div>
 <!-- ヘッダー終了 -->
 
 <!-- メイン開始 --> 
      <!-- サブ見出し --> 
      <div class="SUB_TX">Please fill in the item</div>
      <!-- 入力項目 -->
      <div class="FILL_TX">
      <form action="phptest.php" method="post">
      <label for="EMPCODE">Employee Code ：</label>
      <input type="text" name="EMPCODE" style="margin-left: 5px;padding-left: 10px;font-size: 17px;">
      <br><br>
      <input type="radio" name="PREFIX_EN" value="0">Mr.
      <input type="radio" name="PREFIX_EN" value="1">Miss.
      <input type="radio" name="PREFIX_EN" value="2">Mrs.
      <br><br>
      <label for="NAME">Name (Eng) ：</label>
      <input type="text" name="NAME"size="20"style="margin:0 10px 0 10px;padding-left: 10px;font-size: 17px;">
      <label for="SURNAME">Surname (Eng) ：</label>
      <input type="text" name="SURNAME"size="20"style="margin-left: 10px;padding-left: 10px;font-size: 17px;">
      <br><br>
      <label for="DATE_BIRTH">Birth day ：</label>
      <input type="date" name="DATE_BIRTH"style="margin-left: 10px;padding-left: 10px;font-size: 17px;">
      <br><br>
      <label for="email">E-mail ：</label>
      <input type="email" name="email" size="60" style="margin-left: 28px;padding-left: 10px;font-size: 17px;">
      <br><br>
      <label for="password">password ：</label>
      <input type="text" name="password"size="20"style="margin-left: 5px;padding-left: 10px;font-size: 17px;">
      <br><br>
      <button type="submit"style="font-size: 18px;width : 180px;height : 40px;margin-left:110px;">Sign Up</button>
      </form>
      </div>
    <!-- メイン終了 -->

    <!-- フッター開始 -->
    <div id="footer">
        <small>&copy;Copyright　-   SIAM NDK.All rights reserved.</small>
    </div>
    <!-- フッター終了 -->
  
</body>
</html>
