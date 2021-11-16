    
    <?php
    session_start();
     // セッションの有効期限を5分に設定
     session_set_cookie_params(60 * 5);
    //index.phpで入力された値
    $email=($_POST['email']);
    $login_pass=($_POST['login_pass']);
    echo "【Postされた情報】";
    echo '<br>';
    echo $email;
    echo '<br>';
    echo $login_pass;
    echo '<br>';

    //データベース接続情報
      $dsn = 'pgsql:dbname=dfl9gst6l1jfl3 host=ec2-3-211-245-154.compute-1.amazonaws.com  port=5432';
      $user = 'hhmxfllafjsciw';
      $password = 'dd16a7e2edfc599031962ac809ded8807cfe6d41cbb2c8b73681578bf5841f5f';
             
      //emailデータ型の検証 
      if (filter_var($email,FILTER_VALIDATE_EMAIL) === false) {
      echo $email;
      echo '<br>';
      echo 'email address is incorrect / メールアドレスが不正です。';
      return false;  }

      //DB内でPOSTされたメールアドレスを検索
      try {
      $pdo = new PDO($dsn, $user, $password);
      $stmt = $pdo->prepare('select * from login_emp where email = ?');
      $stmt->execute([$email]);
        //取得したレコードを1行返す(メールアドレスはUNIQUEなので1行しか出ない)
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      } 
      catch (\Exception $e) {
      echo 'email address or password is incorrect /';  
      echo '<br>';
      echo 'メールアドレス又はパスワードが間違っています。';
      echo '<br>';
      echo $e->getMessage() . PHP_EOL;
      }

      //emailがDB内に存在しているかissetで確認（データなければエラー表示）
      if (isset($row['email']) === false) {
        echo '<br>';
        echo 'Employee Data is not found / 従業員コードが見当たりません';
      return false;
      }

      //パスワード確認してレコードを取得する
      if ("$login_pass" == $row['login_pass']) {
        $_SESSION['empcode']=$row['empcode'];
        $_SESSION['prefix_en']=$row['prefix_en'];
        $_SESSION['name_en_db']=$row['name_en'];
        $_SESSION['surname_en_db']=$row['surname_en'];
        $_SESSION['email_db']=$row['email'];
        $_SESSION['login_pass_db']=$row['login_pass'];
      
        //コメントアウトしてセッションデータを確認
      echo '<br>';
      echo "【データベース情報--セッションに代入】";
      echo '<br>';
      echo $_SESSION['surname_en_db'];
      echo '<br>';
      echo $_SESSION['name_en_db'];
      echo '<br>';
      echo $_SESSION['email_db'];
      echo '<br>';
      echo $_SESSION['login_pass_db'];

      //ホーム画面へ遷移
    header('Location: https://sndk-adm.herokuapp.com/home.php');
    } 
    
      else {
      echo '<br>';
      echo 'Password is incorrect / パスワードが間違っています。';
      return false;
      }

    ?>
