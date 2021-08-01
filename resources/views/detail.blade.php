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
	    <div class="login-panel panel panel-default">
		<div class="row">
			<div class="col-sm-2">Name</div>
			<div class="col-sm-10 form-inline" style="padding: 2px;">
				<input type="text" name="name" id ="name" class="form-control input-sm" value="test1" size="50">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">Age</div>
			<div class="col-sm-10 form-inline" style="padding: 2px;">
				<input type="text" name="age" id ="age" class="form-control input-sm" value="20" size="50">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">DOB</div>
			<div class="col-sm-10 form-inline" style="padding: 2px;">
				<input type="text" name="dob" id ="dob" class="form-control input-sm" value="11/06/1999" size="50">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">FirstName</div>
			<div class="col-sm-10 form-inline" style="padding: 2px;">
				<input type="text" name="first_name" id ="first_name" class="form-control input-sm" value="test" size="50">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">LastName</div>
			<div class="col-sm-10 form-inline" style="padding: 2px;">
				<input type="text" name="last_name" id ="last_name" class="form-control input-sm" value="test" size="50">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">Address</div>
			<div class="col-sm-10 form-inline" style="padding: 2px;">
				<input type="text" name="address" id ="address" class="form-control input-sm" value="address" size="50">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">Phone</div>
			<div class="col-sm-10 form-inline" style="padding: 2px;">
				<input type="text" name="phone" id ="phone" class="form-control input-sm" value="0919876543212" size="50">
			</div>
		</div>
		<div  style="padding: 1px;">
						<input type="hidden" name="Back" value="{{ asset('list') }}">
					</div>


		</div>
        </div>




	<div class="footer">
		<div class=""></div>　
	</div>
</body>
</html>