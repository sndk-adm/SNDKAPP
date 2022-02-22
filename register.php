
<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8">
   <title>REGISTER</title>
   <LINK rel="stylesheet" href="css/style.css"> <!-- type="text/css" -->

   <!-- 入力データのチェックをReturnで返す -->
   <script type="text/javascript">
    function check () {
    var EMPCODE = document.regForm.EMPCODE.value;
    let PREFIX_EN = document.regForm.PREFIX_EN.value;
    var NAME = document.regForm.NAME.value;
    var SURNAME = document.regForm.SURNAME.value;
    var email = document.regForm.email.value;
    var login_pass = document.regForm.login_pass.value;

    if ( EMPCODE == "" ) {
    alert ( "EMPCODEを入力して下さい。" );
    document.regForm.EMPCODE.focus();
    return false;}
    if ( PREFIX_EN == "" ) {
    alert ( "PREFIX_ENを入力して下さい。" );
    document.regForm.EMPCODE.focus();
    return false;}
    if ( NAME == "" ) {
    alert ( "NAMEを入力して下さい。" );
    document.regForm.NAME.focus();
    return false;}
    if ( SURNAME == "" ) {
    alert ( "SURNAMEを入力して下さい。" );
    document.regForm.SURNAME.focus();
    return false;}
    if ( email == "" ) {
    alert ( "emailを入力して下さい。" );
    document.regForm.email.focus();
    return false;}
    if ( login_pass == "" ) {
    alert ( "passwordを入力して下さい。" );
    document.regForm.login_pass.focus();
    return false;}
  }
    </script>
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
      <form action="signUp.php" method="post" name="regForm" onSubmit="return check();">
      <label for="EMPCODE">Employee Code ：</label>
      <input type="text" name="EMPCODE" maxlength="10" style="margin-left: 5px;padding-left: 10px;font-size: 17px;">
      <br><br>
      <input type="radio" name="PREFIX_EN" value="0">Mr.
      <input type="radio" name="PREFIX_EN" value="1">Miss.
      <input type="radio" name="PREFIX_EN" value="2">Mrs.
      <br><br>
      <label for="NAME">Name (Eng) ：</label>
      <input type="text" name="NAME"  maxlength="20" size="16" style="margin:0 10px 0 10px;padding-left: 10px;font-size: 17px;">
      <label for="SURNAME">Surname (Eng) ：</label>
      <input type="text" name="SURNAME"  maxlength="20" size="16"style="margin-left: 10px;padding-left: 10px;font-size: 17px;">
      <br><br>
      <label for="email">E-mail ：</label>
      <input type="email" name="email"   maxlength="30" size="62" style="margin-left: 28px;padding-left: 10px;font-size: 17px;">
      <br><br>
      <label for="login_pass">password ：</label>
      <input type="text" name="login_pass"   maxlength="10" size="20"style="margin-left: 5px;padding-left: 10px;font-size: 17px;">
      <br><br>
      <button type="submit"style="font-size: 18px;width : 180px;height : 40px;margin-left:110px;">Sign Up</button>
      </form>
      <br><br>
      <li><a href="index.php">Go to Login Page</a></li>
    
      </div>
    <!-- メイン終了 -->

    <!-- フッター開始 -->
    <div id="footer">
        <small>&copy;Copyright　-   SIAM NDK.All rights reserved.</small>
    </div>
    <!-- フッター終了 -->
  
</body>
</html>