<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/common.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/find-password.css') }}">
	<script src="{{ asset('js/jquery-1.10.1.min.js') }}"></script>
	<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
	@section('fin-password_js')
		<script src="{{ asset('js/additional-methods.js') }}"></script>
	@show
</head>
	<body>
		<div class="header">
			<div class="logo wth">
				<div class="logoleft fl">
					<a href="#"><img src="{{ asset('images/logo.png') }}"></a>
					<img src="{{ asset('images/user.png') }}">
				</div>
				<div class="logoright fr">
					<img src="{{ asset('images/logoright.png') }}">
				</div>
			</div>
		</div>

	<!--header结束-->
	@yield('main')
		<div class="foot wth">
			<p>武汉云析网络科技有限公司&nbsp;鄂ICP备10209250号&nbsp;|&nbsp;ICP许可证号：鄂B1-20150109&nbsp;|&nbsp;Copyright &copy;&nbsp;2010-2016&nbsp;JuanPi.com All Rights Reserved</p>
		</div>
	</body>
</html>		