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
	<div  class="container-fluid">
	<!-- システム名 -->
	<div class="navbar-brand">Bookmin</div>
	<!-- MasterMenu -->
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
    <!-- <li class="dropdown">
	    <a href="#">売上管理 <i class="caret"></i></a>
	    <ul class="dropdown-menu">
	    	<li><a href="#">日次売上集計</a></li>
	    	<li><a href="#">日次売上明細</a></li>
	    	<li><a href="#">書籍分類別集計</a></li>
    	</ul>
    </li> -->
	<!-- Breadcrumbs -->
    <ul class="breadcrumb">
	<li>管理メニュー一覧</li>
    </ul>
	<!-- MainContents -->
    <div class="container-fluid">
		<div class="row">
		<div class="col-xs-1"> </div>

		  <div class="col-xl-3">
			<div class="list-group">
	        <label class="list-group-item active text-center">売上管理</label>
	        <a href="#" class="list-group-item">日次売上集計</a>
	        <a href="#" class="list-group-item">日次売上明細</a>
	        <a href="#" class="list-group-item">書籍分類別集計</a>
        	</div>
		  </div>

		<div class="col-xl-3"> <!--末尾の数字が[n/12]の[n]の部分 -->
			<div class="list-group">
	        <label class="list-group-item active text-center">在庫管理</label>
	        <a href="#" class="list-group-item">在庫検索</a>
	        <a href="#" class="list-group-item">入庫・在庫登録</a>
	        <a href="#" class="list-group-item">入庫明細</a>
			<a href="#" class="list-group-item">受払一覧</a>
			</div>
		</div>

		<div class="col-xl-3">
			<div class="list-group">
	        <label class="list-group-item active text-center">マスタ管理</label>
	        <a href="#" class="list-group-item">管理システムメニュー</a>
	        <a href="#" class="list-group-item">書籍 取次</a>
	        <a href="#" class="list-group-item">返品設定</a>
			<a href="#" class="list-group-item">書籍分類</a>
			</div>
		</div>
		</div> <!-- <div class="row"> -->

		<div class="col-xs-2"> </div>
	</div> <!-- <div class="container-fluid"> -->
    
	<!-- /MainContents -->
</body>
</Html>