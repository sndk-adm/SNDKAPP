<html>
<head><title>PHP TEST</title></head>
<body>

<?php

function convert_enc($str){
    $from_enc = 'EUC_JP';
    $to_enc = 'SJIS';

    return mb_convert_encoding($str, $to_enc, $from_enc);
}

$dsn = 'pgsql:dbname=dfl9gst6l1jfl3 host=ec2-3-211-245-154.compute-1.amazonaws.com  port=5432';
$user = 'hhmxfllafjsciw';
$password = 'dd16a7e2edfc599031962ac809ded8807cfe6d41cbb2c8b73681578bf5841f5f';

try{
    $dbh = new PDO($dsn, $user, $password);

    print('接続に成功しました。<br>');

    $sql = 'SELECT * FROM login_emp';
    foreach ($dbh->query($sql) as $row) {
        print(convert_enc($row['id']));
        print(convert_enc($row['email']).'<br>');
        print(convert_enc($row['name_en']).'<br>');
    }
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}


$dbh = null;

?>

</body>
</html>