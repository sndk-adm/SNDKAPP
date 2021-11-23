<html>
<head>
<title>データベース接続</title>
    
<?php

$dsn = 'pgsql:dbname=dfl9gst6l1jfl3 host=ec2-3-211-245-154.compute-1.amazonaws.com  port=5432';
$user = 'hhmxfllafjsciw';
$password = 'dd16a7e2edfc599031962ac809ded8807cfe6d41cbb2c8b73681578bf5841f5f';

$dbh = new PDO($dsn,$user,$password);

$result = pg_query($dbh, "SELECT * FROM login_emp");

$stmt = $dbh->query($sql);

$arr = pg_fetch_all($result);

  print "<table id=\"dblist\" summary=\"PostgreSQLのデータベースの一覧\">\n";
  print "<caption>PostgreSQL データベース一覧</caption>\n";

  //テーブルヘッダとしてフィールド（カラム）名を出力
  print "<tr>\n";
  $flds = pg_num_fields($result);
  for($i=0; $i<$flds; $i++){
    $field = pg_field_name($result, $i);
    printf("<th abbr=\"%s\">%s</th>\n", $field, $field);
  }
  print "</tr>\n";

  //データの出力
  foreach($arr as $rows){
    print "<tr>\n";
    foreach($rows as $value){
      printf("<td>%s</td>\n", $value);
    }
    print "</tr>\n";
  }

  print "</table>\n";

  //DBとの接続を閉じる
  pg_close($dbh);

    ?>

</body>
</html>