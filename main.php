<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MAIN MENU</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="css/bookmin.css" type="text/css" charset="utf-8">

</head>
<body>
<!-- PageHeader -->
    <nav  class=“navbar navbar-inverse”>
	<!-- システム名 -->
	<div>Bookmin</div>
	<!-- MasterMenu -->
	<div  class="container-fluid">
		<ul  class="nav navbar-nav navbar-right">
			<li><a href="#">Home</a></li>
			<li><a href="#">売上管理</a></li>
			<li><a href="#">在庫管理</a></li>
			<li><a href="#">マスタ管理</a></li>
			<li><a href="#">ログアウト</a></li>
		</ul>
	</div>
	<!-- /MasterMenu -->
    </nav>
<!-- /PageHeader -->
    <li class="dropdown">
	    <a href="#">売上管理 <i class="caret"></i></a>
	    <ul class="dropdown-menu">
	    	<li><a href="#">日次売上集計</a></li>
	    	<li><a href="#">日次売上明細</a></li>
	    	<li><a href="#">書籍分類別集計</a></li>
    	</ul>
    </li>
	<!-- Breadcrumbs -->
    <ul class="breadcrumb">
	<li>管理メニュー一覧</li>
    </ul>

	<!-- MainContents -->
    <div class="container-fluid">
	<div class="row">
		<div class="col-xs-1"> </div>
		<div class="col-xs-3">
		<div class="list-group">
	        <label class="list-group-item active text-center">売上管理</label>
	        <a href="#" class="list-group-item">日次売上集計</a>
	        <a href="#" class="list-group-item">日次売上明細</a>
	        <a href="#" class="list-group-item">書籍分類別集計</a>
        </Div>
		</div>
		<div class="col-xs-3">
		在庫管理
			在庫検索 入庫・在庫登録 入庫明細 受払一覧 発注データ生成 返品候補一覧
		</div>
		<div class="col-xs-3">
		マスタ管理
			スタッフ 管理システムメニュー 書籍 取次 返品設定 書籍分類 消費税
		</div>
		<div class="col-xs-2"> </div>
	</div>
    </div>
	<!-- /MainContents -->
</body>
</Html>