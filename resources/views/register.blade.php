<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login Majoo</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/toastr/toastr.min.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/bike.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('img/bike.png')}}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<p class="lead"><b>create your account</b></p>
							</div>
                            @if($errors->any())
                                <div class="alert alert-warning">
                                    @foreach($errors->all() as $error)
                                    <strong>{{$error}}</strong><br>
                                    @endforeach
                                </div>
                            @endif
                            <form action="{{ url('register') }}" method="post" enctype="multipart/form-data">
                                @csrf
								<div class="form-group">
									<input name="username" type="text"  class="form-control" placeholder="Username" required>
								</div>
								<div class="form-group">
									<input name="password" type="password" class="form-control" placeholder="Password" required>
								</div>
								<div class="form-group">
									<input name="nama" type="text" class="form-control" placeholder="Nama" required>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
								<div class="bottom">
									<span class="helper-text"> <a href="/login">Sudah punya akun?</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right" style="background-image: url('{{ asset('img/overlay.png')}}');">
						<div class="overlay"></div>
						<div class="content text">
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->

	<!-- Javascript -->
	<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('vendor/toastr/toastr.min.js')}}"></script>
	<script src="{{asset('scripts/klorofil-common.js')}}"></script>
</body>

</html>
