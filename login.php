    
    <?php
    session_start();
    echo "Hello #" . $_SESSION['count']

    // // セッションの有効期限を5分に設定
    // // session_set_cookie_params(60 * 5);
    // session_start();

    // //データベース接続情報
    //   $dsn = 'pgsql:dbname=dfl9gst6l1jfl3 host=ec2-3-211-245-154.compute-1.amazonaws.com  port=5432';
    //   $user = 'hhmxfllafjsciw';
    //   $password = 'dd16a7e2edfc599031962ac809ded8807cfe6d41cbb2c8b73681578bf5841f5f';

    //   //index.phpで入力された値
    //   $email=($_POST['email']);
    //   $login_pass=($_POST['login_pass']);
 
    //   $_session['email']=$email;
    //   echo $_session['email'];
           
    //   //emailデータ型の検証 
    //   if (filter_var($email,FILTER_VALIDATE_EMAIL) === false) {
    //   echo $email;
    //   echo '<br>';
    //   echo 'メールアドレスが不正です。';
    //   return false;  }

    //   //DB内でPOSTされたメールアドレスを検索
    //   try {
    //   $pdo = new PDO($dsn, $user, $password);
    //   $stmt = $pdo->prepare('select * from login_emp where email = ?');
    //   $stmt->execute([$email]);
    //     //取得したでレコードを1行返す
    //     $row = $stmt->fetch(PDO::FETCH_ASSOC);
    //   } 
    //   catch (\Exception $e) {
    //   echo 'メールアドレス又はパスワードが間違っています。';
    //   echo '<br>';
    //   echo $e->getMessage() . PHP_EOL;
    //   }

    //   //emailがDB内に存在しているかissetで確認
    //   if (isset($row['email']) === false) {
    //     echo '<br>';
    //     echo '従業員コードが見当たりません';
    //   return false;
    //   }

    //   //パスワード確認
    //   if ("$login_pass" == $row['login_pass']) {
    //     // $_session['name_en']=$row['name_en'];
    //     // $_session['email']=$row['email'];
    //     // $_session['login_pass']=$row['login_pass'];
     
    //   // header('Location: https://sndk-adm.herokuapp.com/home.php');
    //   // 
    // } 
      
    //   else {
    //   echo '<br>';
    //   echo 'パスワードが間違っています。';
    //   return false;
    //   }

    ?>
