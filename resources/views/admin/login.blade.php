<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body>



	<div class="wrap ">
		<div class="card shadow">
			<div class="card-body">
				<h2>Login</h2>
				<form action="" method="POSt">
                    @csrf
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input name="pass" class="form-control" type="text">
                    </div>

					<div class="form-group">
						<input name="login" class="btn btn-primary" type="submit" value="Login">
					</div>
				</form>
			</div>
            <div class="card-footer">
                <span>Have no account ?</span><a class="card-link float-right" href="{{route('admin.register')}}">Create Account</a>
            </div>
		</div>
	</div>








	<!-- JS FILES  -->
    <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{'assets/js/bootstrap.min.js'}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>
