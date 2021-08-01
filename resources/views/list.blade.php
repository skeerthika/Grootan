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
			<div class="col-lg-12">
				
			</div>
				<div class="col-lg-12">
					<div class="login-panel panel panel-default">
					<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th width="20%" class="text-center">Name</th>
								<th width="15%" class="text-center">Age</th>
								<th width="25%" class="text-center">DOB</th>
								<th width="25%" class="text-center"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">test1</td>
								<td class="text-center">20</td>
								<td class="text-center">11/06/1999</td>
								<td class="text-center"><a href="{{ asset('detail') }}"><button type="button" class="btn btn-success btn-sm" >detail</button></a></td>
							<tr>
							<tr>
								<td class="text-center">test2</td>
								<td class="text-center">22</td>
								<td class="text-center">06/02/1998</td>
								<td class="text-center"><a href="{{ asset('detail') }}"><button type="button" class="btn btn-success btn-sm" >detail</button></a></td>
							<tr>
							<tr>
								<td class="text-center">test3</td>
								<td class="text-center">25</td>
								<td class="text-center">23/08/1995</td>
								<td class="text-center"><a href="{{ asset('detail') }}"><button type="button" class="btn btn-success btn-sm" >detail</button></a></td>
							<tr>
						</tbody>
					</table>
				</div></div>
				
			</div>
		</div>




	<div class="footer">
		<div class=""></div>　
	</div>
</body>
</html>