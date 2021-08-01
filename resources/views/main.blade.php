    <html lang="ja">
	<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/vnd.microsoft.icon">
	<link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/vnd.microsoft.icon">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<title>GROOTAN LOGIN</title>
	<!-- Bootstrap Core CSS -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" />
	<!-- MetisMenu CSS -->
	<link href="{{ asset('css/metisMenu.min.css') }}" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="{{ asset('css/menu.css') }}" rel="stylesheet">
	<!-- Custom Fonts -->
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/common/common.css') }}">
	

	<!-- jQuery -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<!-- Metis Menu Plugin JavaScript -->
	<script src="{{ asset('js/metisMenu.min.js') }}"></script>
	<!-- Custom Theme JavaScript -->
	<script src="{{ asset('js/menu.js') }}"></script>
	<!-- Common JavaScript -->
	<script src="{{ asset('js/com.js') }}"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
	<link type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css" rel="stylesheet" />
	<style>
    .ui-datepicker select.ui-datepicker-month,
    .ui-datepicker select.ui-datepicker-year {width: 45%;}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title" style="padding-left: 110px;"> GROOTAN </h3>
						<div class="release-ver"></div>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<input class="form-control" placeholder="ID" name="f_id" type="text" value="" autofocus>
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="password" name="f_password" type="password">
						</div>
						<a href="{{ asset('list') }}" class="btn btn-lg btn-success btn-block">Login</a>
						
					</div>
				</div>
			</div>
		</div>



	<div class="footer">
		<div class=""></div>　
	</div>
</body>
</html>